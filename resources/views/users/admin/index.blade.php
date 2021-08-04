@extends('layouts.cpanel.app')
@section('title', "Admin")

@section('subheader')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    Admins
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
          total  :
 </span><span class="kt-subheader__desc" id="kt_subheader_total_value">

 </span>

                    <form class="kt-margin-l-20" id="kt_subheader_search_form">
                        <div class="kt-input-icon kt-input-icon--right kt-subheader__search">
                            <input type="text" class="form-control" placeholder="search" id="generalSearch">
                            <span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span>

                                                        <i class="fa fa-search"></i>
													</span>
												</span>
                        </div>
                    </form>
                    <div class="kt-form__group kt-form__group--inline mx-2" style="width: 150px">
                        <div class="kt-form__control">
                            <select class="form-control selectpicker" id="active_admin_filter"
                                    name="active_shop_category_filter">
                                <option value="">all</option>
                                <option value="1">active</option>
                                <option value="0">not_active</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
                    <div class="kt-subheader__desc"><span id="kt_subheader_group_selected_rows"></span>  selected </div>
                    <div class="btn-toolbar kt-margin-l-20">

                        <button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
                            delete_selected_items
                        </button>


                    </div>


                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <button type="button"  id="refresh_table_btn" class="btn btn-outline-brand btn-icon">

                    <i class="flaticon2-reload" style="font-weight: bold" ></i>
                </button>

                <button id="add_admin_btn" type="button" data-toggle="modal" data-target="#save_admin_modal" class="btn btn-label-brand btn-bold">
                    <i class="la la-plus"></i>add_new
                </button>

            </div>
        </div>
    </div>
@endsection
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__body kt-portlet__body--fit">

            <!--begin: Datatable -->
            <div class="kt-datatable" id="admin_datatable"></div>

            <!--end: Datatable -->
        </div>
    </div>

    <!--end::Portlet-->
    @include('users.admin.save')
@endsection
@section('script')

{{--    <script src="{{ asset('plugins/jquery-ui.bundle.js') }}"></script>--}}

    <script src="{{ asset('js/blades/datatable.js') }}"></script>
    <script src="{{ asset('js/blades/save.js') }}"></script>
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>
@endsection

