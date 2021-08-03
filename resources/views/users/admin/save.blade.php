<!--begin::Modal-->
<div class="modal fade" id="save_admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="save_admin_form" method="POST">
                    <input name="admin_id" value="0" id="admin_id" type="hidden">
                    @csrf
                    <div class="row">
                        {{--   img --}}
                        <div class="form-group col-md-6">
                            <div class="row">
                                <label class="col-xl-3 col-lg-3 col-form-label">photo</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                        <div class="kt-avatar__holder"></div>
                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen"></i>
                                            <input type="file" id="img" name="img" accept="image/png, image/jpg, image/jpeg">
                                        </label>
                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														      <span class="form-text text-danger lev"></span>
                                                            <i class="fa fa-times"></i>
													</span>
                                    </div>
                                    <span class="form-text text-muted">img_allowed_files</span>
                                </div>
                            </div>

                        </div>

                        {{--   form --}}
                        <div class="col-md-6">
                            <div class="form-group col-md-8">
                                <label class="required" >email</label>
                                <div class="input-group">

                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-envelope"></i></span>
                                    </div>
                                    <input name="email" id="email" type="text" class="form-control"
                                           placeholder="john@example.com">
                                </div>
                                <span class="text-danger lev"></span>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="required">full_name</label>
                                <div class="input-group">

                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-user"></i></span>
                                    </div>
                                    <input name="name" id="full_name" type="text" class="form-control"
                                           placeholder="full_name">
                                </div>
                                <span class="text-danger lev"></span>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="required">mobile_phone</label>
                                <div class="input-group">

                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-phone"></i></span>
                                    </div>
                                    <input name="mobile" id="mobile" type="text" class="form-control"
                                           placeholder="Mobile">
                                </div>
                                <span class="text-primary d-block">970591234567</span>
                                <span class="text-danger lev"></span>
                            </div>
                            {{--   is_active --}}
                            <div class="col-md-8">
                                <div class="form-group row i7_vm">
                                    <label class="col-3 col-form-label">active</label>
                                    <div class="col-6">
                                        <span class="kt-switch kt-switch--outline kt-switch--icon-check kt-switch--brand">
                                            <label>
                                                <input name="is_active" value="0" type="hidden">
                                                <input name="is_active" value="1"  id="is_active" class="i7_switch"
                                                       type="checkbox">

                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <span class="text-danger lev"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-8">
                                <label class="required">password</label>
                                <div class="input-group">

                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-key"></i></span>
                                    </div>
                                    <input name="password" id="password" type="text" class="form-control"
                                           placeholder="password">
                                </div>
                                      <span class="text-danger lev"></span>


                                </div>

</div>

                        </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                <button form="save_admin_form" type="submit" class="btn btn-brand">
                    save
                </button>
            </div>
        </div>
    </div>
</div>

<!--end::Modal-->
