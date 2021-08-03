removeValidationErrors = function(formId = null){
    if(formId)
    {
        $(formId).find('.is-invalid').removeClass('is-invalid');
        $(formId).find('.lev').html('');
    }


};

showValidationErrors = function(errors,formId = null){


    removeValidationErrors(formId);

    // validator.focusInvalid();


    if(errors && formId){



        let i = 0;
        for (let key in errors) {
            if(i==0)
            {
                let input = $(formId).find('[name="' + key + '"]');
                if(!input) {
                    input = $(formId).find('[id="' + key + '"]');
                }
                if(!input) {
                    input = $(formId).find('[class="' + key + '"]');
                }
                if(input)
                {
                    $('html, body').animate({
                        scrollTop: input.offset().top-50
                    }, 2000);
                }

            }
            ++i;
            $(formId).find('[name="' + key + '"]').parents('.form-group').find('.lev').html(errors[key][0]);
            $(formId).find('[id="' + key + '"]').parents('.form-group').find('.lev').html(errors[key][0]);
            $(formId).find('[class="' + key + '"]').parents('.form-group').find('.lev').html(errors[key][0]);
            $(formId).find('[name="' + key + '"]').addClass('is-invalid');
            $(formId).find('[id="' + key + '"]').addClass('is-invalid');
            $(formId).find('[class="' + key + '"]').addClass('is-invalid');


        }
    }
    else
    if(errors){
        for (let key in errors) {
            $('[name="' + key + '"]').parents('.form-group').find('.lev').html(errors[key][0]);
            $('[id="' + key + '"]').parents('.form-group').find('.lev').html(errors[key][0]);
            $('[class="' + key + '"]').parents('.form-group').find('.lev').html(errors[key][0]);
            $('[name="' + key + '"]').addClass('is-invalid');
            $('[id="' + key + '"]').addClass('is-invalid');
            $('[class="' + key + '"]').addClass('is-invalid');

        }
    }

};
