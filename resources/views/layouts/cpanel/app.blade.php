<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>@yield('title')  </title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.style')
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
@include('layouts.cpanel.header')

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->

        <!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
       @include('layouts.cpanel.aside')

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                <!-- begin:: Header Menu -->

                <!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->
@include('layouts.cpanel.header_menu')

                <!-- end:: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">

                    <!--begin: Search -->

                    <!--begin: Search -->
                  @include('layouts.cpanel.search')

                    <!--end: Search -->

                    <!--end: Search -->

                    <!--begin: Notifications -->
                   @include('layouts.cpanel.notifications')

                    <!--end: Notifications -->

                    <!--begin: Quick Actions -->
                    @include('layouts.cpanel.quick_actions')
                    <!--end: Quick Actions -->

                    <!--begin: My Cart -->
              {{--      @include('layouts.cpanel.mycart')--}}

     <!--end: My Cart -->

     <!--begin: Quick panel toggler -->
                {{-- <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
                             <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24" />
                                         <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                         <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                     </g>
                                 </svg> </span>
                 </div>--}}

                 <!--end: Quick panel toggler -->

                 <!--begin: Language bar -->
                 @include('layouts.cpanel.language_bar')
                 <!--end: Language bar -->

                 <!--begin: User Bar -->
                 @include('layouts.cpanel.user_bar')

                 <!--end: User Bar -->
             </div>

             <!-- end:: Header Topbar -->
            </div>

            <!-- end:: Header -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

             <!-- begin:: Content Head -->
            @yield('subheader')

             <!-- end:: Content Head -->

             <!-- begin:: Content -->
             <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                 @yield('content')

             </div>

             <!-- end:: Content -->
            </div>

            <!-- begin:: Footer -->
            @include('layouts.cpanel.footer')

            <!-- end:: Footer -->
            </div>
            </div>
            </div>

            <!-- end:: Page -->

            <!-- begin::Quick Panel -->
             @include('layouts.cpanel.quick_panel')

            <!-- end::Quick Panel -->

            <!-- begin::Scrolltop -->
            <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
            </div>

            <!-- end::Scrolltop -->

            <!-- begin::Sticky Toolbar -->
            {{--@include('layouts.cpanel.sticky_toolbar')--}}

<!-- end::Sticky Toolbar -->

<!-- begin::Demo Panel -->
{{--@include('layouts.cpanel.demo_panel')--}}

<!-- end::Demo Panel -->

<!--Begin:: Chat-->
{{--@include('layouts.cpanel.chat')--}}

<!--ENd:: Chat-->

@include('layouts.script')
@yield('script')

</body>

<!-- end::Body -->
</html>
