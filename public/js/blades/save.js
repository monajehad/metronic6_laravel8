$("#save_admin_form").validate({
    rules: {

        "email": {required: true},
        // "password": {required: true},
        "roles[]": {required: true},
    },
    focusInvalid: false,
    invalidHandler: function (form, validator) {

        if (!validator.numberOfInvalids())
            return;

        $('html, body').animate({
            scrollTop: $(validator.errorList[0].element).offset().top-180
        }, 2000);

    },
    submitHandler: function (form) {

        saveUser(form);
        return false;
    }
});

function saveUser(form) {
    let form_data = new FormData(form);
    var url = "/admins/store";
    if($('#admin_id').val() != 0) url = "/admins/update";
    $.ajax({
        url: baseUrl + url,
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_admin_form');
                KTUtil.scrollTop();

            } else {
                swalException();
                KTUtil.scrollTop();
            }
        },
        success: function (result) {
            if (result.status) {

                $('#save_admin_modal').modal('toggle');
                resetForm('save_admin_form');
                $('#admin_id').val(0);
                toastr.success(result.message);
                datatable.reload();
            } else {
                toastr.error(result.message);
                KTUtil.scrollTop();

            }
        },
        complete: function () {
        }
    });
}





$(document).on('click','#add_admin_btn',function (){
    resetForm('save_admin_form');
    $('#admin_id').val(0);
});
