/* save into database */
var saveData = function(_form){
    
    var frm = jQuery(_form);
    var btn = frm.find(".saveBtn");
    var loader = frm.find("#ajaxloader");
    
    axios({
        method: 'post',
        url: frm.attr('action'),
        data:frm.serialize(),
        onUploadProgress: function (progressEvent) {
            btn.hide();
            loader.fadeIn(500);
        }
    })
        .then(function (response){
            if(response.data){
                $(window).scrollTop(0);
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                if(response.data.success) {
                        frm[0].reset();
                        
                        toastr.success(response.data.message);
                        loader.hide();
                        btn.fadeIn(500);
                        setTimeout(function(){
                            window.location.href=response.data.redirect;             
                           },1000);
                           
                }else{
                    
                    loader.hide();
                    btn.fadeIn(500);
                    
                }

            }
        })
        .catch(function (error) {
            loader.hide();
            btn.fadeIn(500);
            if (error.response) {
                if(error.response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                $(window).scrollTop(0);
                var errors =  error.response.data.errors;
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                var checkFirstEle = 0;
                jQuery.each(errors, function(i, _msg) {
                    var el = frm.find("[name="+i+"]");
                    if(checkFirstEle == 0){
                        el.focus();
                        checkFirstEle++;
                        }
                    el.parents('.form-group').addClass('error');
                    el.parents('.form-group').find('.help-block').html(_msg[0]);
                });
            }
        });
    return false;
};

var updateProfile = function(_form){
    
    var frm = jQuery(_form);
    var btn = frm.find(".saveBtn");
    var loader = frm.find("#ajaxloader");
    //var msg = frm.find("#msg");
    
    axios({
        method: 'post',
        url: frm.attr('action'),
        data:frm.serialize(),
        onUploadProgress: function (progressEvent) {
            //msg.hide();
            btn.hide();
            loader.fadeIn(500);
        }
    })
        .then(function (response){
            if(response.data){
                $(window).scrollTop(0);
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                if(response.data.success) {
                        //frm[0].reset();
                        /*msg.removeClass('alert-danger');
                        msg.addClass('alert-success');
                        msg.show();
                        msg.html(response.data.message);*/
                        toastr.success(response.data.message);
                        loader.hide();
                        $('input').attr('readonly', true);
                        $('select').attr('disabled', true);
                        btn.fadeIn(500);
                        btn.parent('div').hide();
                        if (Dropzone.instances.length > 0) {
                            Dropzone.instances.forEach(dz => dz.destroy())
                            Dropzone.instances.forEach(dz => dz.destroy())
                            Dropzone.instances.forEach(dz => dz.destroy())
                        }
                            
                            
                            $('#editBtn').removeClass('invisible'); 
                            $('#updateProfilePic').removeClass('upload_image_profile'); 
                            $('#updateProfilePic').removeClass('dz-clickable'); 
                            $('#updateBikeImg').removeClass('upload_image_bike_img');
                            $('#updateBikeImg').removeClass('dz-clickable');
                            $('#updateLicense').removeClass('upload_image_license');
                            $('#updateLicense').removeClass('dz-clickable');
                            $('#updateRC').removeClass('upload_image_rc');
                            $('#updateRC').removeClass('dz-clickable');
                            $('#updatePUC').removeClass('upload_image_puc');
                            $('#updatePUC').removeClass('dz-clickable');
                            $('#updateInsurance').removeClass('upload_image_insurance');
                            $('#updateInsurance').removeClass('dz-clickable'); 
                            $('.dz-overlay').hide();               
                               
                        
                        /*setTimeout(function(){
                            if (Dropzone.instances.length > 0) 
                            Dropzone.instances.forEach(dz => dz.destroy())                
                           },500);   */                  
                }else{
                    loader.hide();
                    btn.fadeIn(500);
                }

            }
        })
        .catch(function (error) {
            loader.hide();
            btn.fadeIn(500);
            if (error.response) {
                if(error.response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                $(window).scrollTop(0);
                var errors =  error.response.data.errors;
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                var checkFirstEle = 0;
                jQuery.each(errors, function(i, _msg) {
                    var el = frm.find("[name="+i+"]");
                    if(checkFirstEle == 0){
                        el.focus();
                        checkFirstEle++;
                        }
                    el.parents('.form-group').addClass('error');
                    el.parents('.form-group').find('.help-block').html(_msg[0]);
                });
            }
        });
    return false;
};

var updateForm = function(_form){
    
    var frm = jQuery(_form);
    var btn = frm.find(".saveBtn");
    var loader = frm.find("#ajaxloader");
    var msg = frm.find("#msg");
    
    axios({
        method: 'post',
        url: frm.attr('action'),
        data:frm.serialize(),
        onUploadProgress: function (progressEvent) {
            msg.hide();
            btn.hide();
            loader.fadeIn(500);
        }
    })
        .then(function (response){
            if(response.data){
                $(window).scrollTop(0);
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                if(response.data.success) {
                        //frm[0].reset();
                        msg.removeClass('alert-danger');
                        msg.addClass('alert-success');
                        msg.show();
                        msg.html(response.data.message);
                        //toastr.success(response.data.message);
                        loader.hide();
                        $('input').attr('readonly', true);
                        $('select').attr('disabled', true);
                        btn.fadeIn(500);
                        btn.parent('div').hide();
                        $('#editBtn').removeClass('invisible'); 
                        setTimeout(function(){
                            window.location.href=response.data.redirect;             
                           },1000);
                           setTimeout(function(){
                            msg.fadeOut(500);                   
                           },3000);                 
                }else{
                    loader.hide();
                    btn.fadeIn(500);
                }

            }
        })
        .catch(function (error) {
            loader.hide();
            btn.fadeIn(500);
            if (error.response) {
                if(error.response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                $(window).scrollTop(0);
                var errors =  error.response.data.errors;
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                var checkFirstEle = 0;
                jQuery.each(errors, function(i, _msg) {
                    var el = frm.find("[name="+i+"]");
                    if(checkFirstEle == 0){
                        el.focus();
                        checkFirstEle++;
                        }
                    el.parents('.form-group').addClass('error');
                    el.parents('.form-group').find('.help-block').html(_msg[0]);
                });
            }
        });
    return false;
};

var formSubmit = function(_form){
    
    var frm = jQuery(_form);
    var btn = frm.find(".saveBtn");
    var loader = frm.find("#ajaxloader");
    var msg = frm.find("#msg");
    
    axios({
        method: 'post',
        url: frm.attr('action'),
        data:frm.serialize(),
        onUploadProgress: function (progressEvent) {
            msg.hide();
            btn.hide();
            loader.fadeIn(500);
        }
    })
        .then(function (response){
            if(response.data){
                $(window).scrollTop(0);
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                if(response.data.success) {
                        frm[0].reset();
                        msg.removeClass('alert-danger');
                        msg.addClass('alert-success');
                        msg.show();
                        msg.html(response.data.message);
                        //toastr.success(response.data.message);
                        loader.hide();
                        btn.fadeIn(500);
                        setTimeout(function(){
                            window.location.href=response.data.redirect;             
                           },1000);
                           setTimeout(function(){
                            msg.fadeOut(500);                   
                           },3000);
                }else{
                    msg.removeClass('alert-success');
                    msg.addClass('alert-danger');
                    msg.show();
                    msg.html(response.data.message);
                    loader.hide();
                    btn.fadeIn(500);
                    setTimeout(function(){
                        msg.fadeOut(500);                   
                       },3000);
                }

            }
        })
        .catch(function (error) {
            loader.hide();
            btn.fadeIn(500);
            if (error.response) {
                if(error.response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                $(window).scrollTop(0);
                var errors =  error.response.data.errors;
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                var checkFirstEle = 0;
                jQuery.each(errors, function(i, _msg) {
                    var el = frm.find("[name="+i+"]");
                    if(checkFirstEle == 0){
                        el.focus();
                        checkFirstEle++;
                        }
                    el.parents('.form-group').addClass('error');
                    el.parents('.form-group').find('.help-block').html(_msg[0]);
                });
            }
        });
    return false;
};

var formSubmitWithSummernote = function(_form){
    $('#privacy_summer').parents('.form-group').find('.help-block').html("");
    $('#tnc_summer').parents('.form-group').find('.help-block').html("");
    $('#privacy_summer').parents('.form-group').removeClass('error');
    $('#tnc_summer').parents('.form-group').removeClass('error');
    if($('#privacy_summer').summernote('isEmpty') || $('#tnc_summer').summernote('isEmpty')) {
        if($('#privacy_summer').summernote('isEmpty')) {
            $('#privacy_summer').parents('.form-group').addClass('error');
            $('#privacy_summer').parents('.form-group').find('.help-block').html("Privacy policy is required");
        }
        if($('#tnc_summer').summernote('isEmpty')) {
            $('#tnc_summer').parents('.form-group').addClass('error');
            $('#tnc_summer').parents('.form-group').find('.help-block').html("Terms and conditions is required");
        }
        return false;
      }
    
      
    var frm = jQuery(_form);
    var btn = frm.find(".saveBtn");
    var loader = frm.find("#ajaxloader");
    
    axios({
        method: 'post',
        url: frm.attr('action'),
        data:frm.serialize(),
        onUploadProgress: function (progressEvent) {
            btn.hide();
            loader.fadeIn(500);
        }
    })
        .then(function (response){
            if(response.data){
                $(window).scrollTop(0);
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                if(response.data.success) {
                        //frm[0].reset();
                        toastr.success(response.data.message);
                        loader.hide();
                        btn.fadeIn(500);
                        setTimeout(function(){
                            window.location.href=response.data.redirect;             
                           },1000);
                           
                }else{
                    loader.hide();
                    btn.fadeIn(500);
                   
                }

            }
        })
        .catch(function (error) {
            loader.hide();
            btn.fadeIn(500);
            if (error.response) {
                if(error.response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                $(window).scrollTop(0);
                var errors =  error.response.data.errors;
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                var checkFirstEle = 0;
                jQuery.each(errors, function(i, _msg) {
                    var el = frm.find("[name="+i+"]");
                    if(checkFirstEle == 0){
                        el.focus();
                        checkFirstEle++;
                        }
                    el.parents('.form-group').addClass('error');
                    el.parents('.form-group').find('.help-block').html(_msg[0]);
                });
            }
        });
    return false;
};

var formLogin = function(_form){
    
    var frm = jQuery(_form);
    var btn = frm.find(".saveBtn");
    var loader = frm.find("#ajaxloader");
    var msg = frm.find("#msg");
    
    axios({
        method: 'post',
        url: frm.attr('action'),
        data:frm.serialize(),
        onUploadProgress: function (progressEvent) {
            msg.hide();
            btn.hide();
            loader.fadeIn(500);
        }
    })
        .then(function (response){
            if(response.data){
                $(window).scrollTop(0);
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                if(response.data.success) {
                        frm[0].reset();
                        msg.removeClass('alert-danger');
                        msg.addClass('alert-success');
                        msg.show();
                        msg.html(response.data.message);
                        //toastr.success(response.data.message);
                        loader.hide();
                        btn.fadeIn(500);
                        setTimeout(function(){
                            window.history.replaceState({
                                isBackPage: false,
                                "html": 'jscv',
                                "pageTitle": 'bsckj'
                            }, "", response.data.redirect);
                            window.location.href=response.data.redirect;             
                           },1000);
                           setTimeout(function(){
                            msg.fadeOut(500);                   
                           },3000);
                }else{
                    msg.removeClass('alert-success');
                    msg.addClass('alert-danger');
                    msg.show();
                    msg.html(response.data.message);
                    loader.hide();
                    btn.fadeIn(500);
                    setTimeout(function(){
                        msg.fadeOut(500);                   
                       },3000);
                }

            }
        })
        .catch(function (error) {
            loader.hide();
            btn.fadeIn(500);
            if (error.response) {
                if(error.response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                $(window).scrollTop(0);
                var errors =  error.response.data.errors;
                frm.find('.form-group').removeClass('error');
                frm.find('.help-block').html('');
                var checkFirstEle = 0;
                jQuery.each(errors, function(i, _msg) {
                    var el = frm.find("[name="+i+"]");
                    if(checkFirstEle == 0){
                        el.focus();
                        checkFirstEle++;
                        }
                    el.parents('.form-group').addClass('error');
                    el.parents('.form-group').find('.help-block').html(_msg[0]);
                });
            }
        });
    return false;
};



