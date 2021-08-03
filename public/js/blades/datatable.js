const general_data = {};

datatable = null;
var datatable_admin = function () {
    // Private functions

    var options = {
        // datasource definition
        data: {
            type: "remote",
            source: {
                read: {
                    url: baseUrl + "/admins/index",
                    method: "GET",
                    map: function (t) {
                        var e = t;
                        t.data.forEach(row => {
                            general_data[row.id] = row;
                        });
                        return void 0 !== t.data && (e = t.data), e;
                    }
                }
            },
            pageSize: 10,
              serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
            saveState:{cookie:false,webstorage:false}
        },

        // layout definition
        layout: {
            scroll: false, // enable/disable datatable scroll both horizontal and
            // vertical when needed.
            footer: false, // display/hide footer
        },

        // column sorting
        sortable: true,

        pagination: true,

        // columns definition

        columns: [
            {
                field: 'id',
                title: '#',
                sortable: false,
                width: 20,
                selector: {
                    class: 'kt-checkbox--solid'
                },
                textAlign: 'left',
            },
            {
                field: "user",
                title: 'admin',
                width: 200,
                textAlign: 'left',

                template: function (t) {

                    return `<div class="kt-user-card-v2" style="width: inherit;">
								<div class="kt-user-card-v2__img">
									<img src="${t.img_url}" alt="${get('photo')}" height="50px!important" width="50px!important" style="object-fit: contain;">
								</div>
								<div class="kt-user-card-v2__details mx-2">
									<a href="#" class="kt-user-card-v2__name">${t.name}</a>

									<span class="kt-user-card-v2__desc">${t.email}</span>
								</div>
							</div>`
                }},
            {
                field: "is_active",
                title: 'is_active',
                filterable: 1,
                sortable: 1,
                width: 70,
                textAlign: "left",
                template: function (t) {
                    var checked = t.is_active? 'checked' : '';
                    return `<span class="kt-switch kt-switch--sm  kt-switch--outline kt-switch--icon-check kt-switch--brand">
                                <label>
                                <input type="checkbox" ${checked} name="is_active" onclick="updateStatus('is_active',this,${t.id})">
                                <span></span>
                                </label>
                                </span>`
                }
            },

            {
                field: "created_at",
                title: 'created_at',
                width: 120,
                textAlign: 'left',
                template: function (t) {
                    return t.created_at_date;
                } },

            {
                field: "actions",
                textAlign: 'left',
                width: 80,
                title: 'actions',
                sortable: false,
                autoHide: false,
                overflow: 'visible',
                template: function (t) {

                    return `
                  <button type="button" onclick="fillAdminModal(${t.id})" data-toggle="modal" data-target="#save_admin_modal"
                        class="btn btn-outline-hover-success btn-icon btn-sm"><i class="la la-edit"></i></button>
                        <button onclick="remove(${t.id},'admins/delete',datatable)"
                        class="btn btn-outline-hover-danger btn-icon btn-sm"><i class="la la-trash"></i></button>
                        `
                }
            }],

    };

    return {
        // public functions
        init: function () {
            // enable extension
            options.extensions = {
                checkbox: {},
            };
            options.search = {
                input: $('#generalSearch'),
                // search delay in milliseconds
                delay: 1000,
            };

            datatable = $('#admin_datatable').KTDatatable(options);

            $('#active_admin_filter').on('change', function () {
                datatable.search($(this).val().toLowerCase(), 'is_active');
            });




            // event handler on check and uncheck on records

            datatable.on(
                'kt-datatable--on-click-checkbox kt-datatable--on-layout-updated',
                function (e) {
                    // datatable.checkbox() access to extension methods
                    var ids = datatable.checkbox().getSelectedId();
                    var count = ids.length;
                    console.log("count", count);
                    $('#kt_subheader_group_selected_rows').html(count);

                    if (count > 0) {
                        $('#kt_subheader_search').addClass('kt-hidden');
                        $('#kt_subheader_group_actions').removeClass('kt-hidden');
                    } else {
                        $('#kt_subheader_search').removeClass('kt-hidden');
                        $('#kt_subheader_group_actions').addClass('kt-hidden');
                    }
                });

            datatable.on('kt-datatable--on-layout-updated', function (e) {
                console.log('kt-datatable--on-ajax-done', datatable.getTotalRows());
                $('#kt_subheader_total_value').text(datatable.getTotalRows());

            })

       /*    $('#kt_datatable_records_fetch_modal').on('show.bs.modal', function (e) {
                var ids = datatable.checkbox().getSelectedId();
                var c = document.createDocumentFragment();
                for (var i = 0; i < ids.length; i++) {
                    var li = document.createElement('li');
                    li.setAttribute('data-id', ids[i]);
                    li.innerHTML = 'Selected record ID: ' + ids[i];
                    c.appendChild(li);
                }
                $(e.target).find('.kt-datatable_selected_ids').append(c);
            }).on('hide.bs.modal', function (e) {
                $(e.target).find('.kt-datatable_selected_ids').empty();
            });*/

        },
    };
}();
jQuery(document).ready(function () {
    datatable_admin.init();
    count = datatable.getTotalRows() ?? 0;
    $('#kt_subheader_total_value').text(count);
    $('.selectpicker').selectpicker();

});

$('#refresh_table_btn').on('click', function () {

    datatable.reload();


});





$(document).on('click', '#kt_subheader_group_actions_delete_all', function () {
    var ids = datatable.checkbox().getSelectedId();
    let url = "admins/multi/delete";
    remove(ids, url, datatable);
});



updateStatus = function(key,element, id) {
    console.log(id);

    $.ajax({
        url: baseUrl + "/admins/status/update",
        type: "post",
        data: {
            'key' : key,
            'status' : element.checked ? 1 : 0,
            'id':id,
        },
        error: function (jqXHR, error, errorThrown) {

            swalException(error);
            $(element).prop('checked',!element.checked);

        },
        success: function (result) {
            if (result.status) {
                toastr.success(result.message);
                general_data[id].is_active = element.checked ;
            } else {
                toastr.error(result.message);
            }
        },
        complete: function () {
        }
    });
}



fillAdminModal = function(id)
{
    var row = general_data[id];
    $('.kt-avatar__holder').attr('style', `background-image:url('${row.img_url}')`);
    $('#admin_id').val(id);
    $('#email').val(row.email);
    $('#mobile').val(row.mobile);
    $('#password').val(row.password);


    $('#is_active').prop('checked', row.is_active );







}
