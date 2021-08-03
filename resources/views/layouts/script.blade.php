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

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('metronic/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/js/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{ asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{ asset('metronic/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('metronic/js/pages/dashboard.js') }}" type="text/javascript"></script>

<!--end::Page Scripts -->

<script src="{{ asset('js/helper/sweet_alert_msg/general_sweet_alert.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/helper/toastr_msg/toastr_general_options.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/helper/laravel_validation_errors.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/helper/reset_form.js') }}" type="text/javascript"></script>
