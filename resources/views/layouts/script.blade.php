<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>
<script>
    var baseUrl = @json(url('/'));


</script>

<!-- end::Global Config -->
<script src="{{ asset('metronic/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('metronic/js/scripts.bundle.js') }}"></script>

<script src="{{ asset("js/app.js") }}"></script>




<script src="{{ asset('plugins/sweetalert2.min.js') }}" type="text/javascript"></script>


<script defer src="{{ asset('js/blades/general/notifications/fcm/firebase_ini.js') }}" type="text/javascript"></script>
<script defer src="{{ asset('js/blades/general/notifications/fcm/fcm.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/blades/general/notifications/last_notifications.js') }}"></script>

<!--begin::Global Theme Bundle(used by all pages) -->

<!--begin:: Vendor Plugins -->
<script src="{{ asset ('metronic/plugins/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/wnumb/wNumb.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/dropzone.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/quill/dist/quill.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/@yaireo/tagify/dist/tagify.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/jquery-validation.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/dual-listbox/dist/dual-listbox.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/raphael/raphael.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/morris.js/morris.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/plugins/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/js/global/integration/plugins/sweetalert2.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>

<!--end:: Vendor Plugins -->
<script src="{{ asset ('metronic/js/scripts.bundle.js')}}" type="text/javascript"></script>

<!--begin:: Vendor Plugins for custom pages -->
<script src="{{ asset ('metronic/plugins/custom/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/@fullcalendar/core/main.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/@fullcalendar/daygrid/main.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/@fullcalendar/google-calendar/main.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/@fullcalendar/interaction/main.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/@fullcalendar/list/main.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/@fullcalendar/timegrid/main.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/dist/es5/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/source/jquery.flot.resize.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/source/jquery.flot.categories.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/source/jquery.flot.pie.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/source/jquery.flot.stack.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/source/jquery.flot.crosshair.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/flot/source/jquery.flot.axislabels.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net/js/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/js/global/integration/plugins/datatables.init.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/jszip/dist/jszip.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/pdfmake/build/pdfmake.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/pdfmake/build/vfs_fonts.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-buttons/js/buttons.colVis.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-buttons/js/buttons.flash.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-buttons/js/buttons.html5.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-buttons/js/buttons.print.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('metronic/plugins/custom/datatables.net-select/js/dataTables.select.min.js')}}" type="text/javascript"></script>


<!--end:: Vendor Plugins for custom pages -->

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset ('metronic/js/pages/dashboard.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
