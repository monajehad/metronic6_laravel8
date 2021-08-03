resetForm = function(formId){

    // for metronic bootstrap select
    formId = '#' + formId;
    $(formId).trigger("reset");

    try{
        $(formId + ' select').each(function( index, el ) {
            // console.log('each',  index, el)
            // el.val('');
        });
        $(formId + ' .selectpicker').selectpicker('refresh');

        // for images
        $(formId + ' img').attr('src', '');


        // for mertonic avator
        $(formId + ' .kt-avatar__holder').attr('style','background-image:url("/images/image.png")');
        $(formId + ' .kt-avatar').removeClass('kt-avatar--changed');

        $(formId + ' [type="checkbox"]').attr("checked", null);

    }catch(error){

    }
};
