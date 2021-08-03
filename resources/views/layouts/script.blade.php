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

<script src="{{ asset('metronic/plugins/global/components/base/app.js') }}"></script>
<script src="{{ asset('metronic/plugins/global/plugins.bundle.js') }}"></script>

<script src="{{ asset('metronic/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('metronic/css/js/scripts.bundle.js') }}"></script>

<script src="{{ asset('metronic/js/pages/dashboard.js') }}"></script>


{{--<script src="{{ asset("js/app.js") }}"></script>--}}




{{--<script src="{{ asset('metronic/plugins/sweetalert2.min.js') }}" type="text/javascript"></script>--}}





<!--begin::Page Vendors(used by this page) -->
{{--<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>--}}

<!--end::Page Vendors -->

