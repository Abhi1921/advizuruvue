/* upload image */

var initDropforUpdate = function(id, width, height){
    $(".upload_image"+id).dropzone({
        paramName: "image",
        maxFilesize: 200,
        url: uploadUrl,
        uploadMultiple: false,
        acceptedFiles: 'image/*',
        previewTemplate: '<i class="hidden preview-image"></i>',
        parallelUploads: 1,
        success: function(file, data) {
            //$(".upload_image"+id).parent('.form-group').find('#image-progress').html('');
            $(".upload_image"+id).parent('.form-group').find('img').attr('src',data.thumb_image);
            if($('#user_id').val() == 'false')
            $(".nav-user").find('img').attr('src',data.thumb_image);
        },
        uploadprogress: function(file, progress, bytesent) {
            //var elm = $(this)[0].element;
            var _prt = $(".upload_image"+id).parent('.form-group');
            //_prt.find('#image-progress').html(parseInt(progress) + '%');
        },
        sending: function(file, xhr, formData) {
            var elm = $(this)[0].element;
            formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
            formData.append("width", width);
            formData.append("height", height);
            formData.append("id", $('#user_id').val());
            //formData.append("oldimage", $("#image"+id).val());
        },
        error: function(file,data) {
            var elm = $(this)[0].element;
            var _prt = $(".upload_image"+id).parent('.form-group');
            //_prt.find('#image-progress').html('');
            _prt.find('.help-block').html('Image should be JPEG, PNG or JPG');
            jQuery.each(data.errors, function(i, _msg) {
                //_prt.find('#image-progress').html('');
                //toastr.error(_msg[0]);
                _prt.addClass('error');
                _prt.find('.help-block').html(_msg[0]);
            });

        }
    });
}

var initDocDropforUpdate = function(id, width, height){
    $(".upload_image"+id).dropzone({
        paramName: "image",
        maxFilesize: 200,
        url: uploadDocUrl,
        uploadMultiple: false,
        acceptedFiles: 'image/*,application/pdf',
        previewTemplate: '<i class="hidden preview-image"></i>',
        parallelUploads: 1,
        success: function(file, data) {
            //$(".upload_image"+id).parent('.form-group').find('#image-progress').html('');
            if((data.thumb_image).substr( ((data.thumb_image).lastIndexOf('.') +1) ) == 'pdf')
            $(".upload_image"+id).parent('.form-group').find('img').attr('src',(data.thumb_image).replace(data.image, "pdf_thumbnail.png"));
            else
            $(".upload_image"+id).parent('.form-group').find('img').attr('src',data.thumb_image);
            if($('#user_id').val() == 'false')
            $(".nav-user").find('img').attr('src',data.thumb_image);
        },
        uploadprogress: function(file, progress, bytesent) {
            //var elm = $(this)[0].element;
            var _prt = $(".upload_image"+id).parent('.form-group');
            //_prt.find('#image-progress').html(parseInt(progress) + '%');
        },
        sending: function(file, xhr, formData) {
            var elm = $(this)[0].element;
            formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
            formData.append("width", width);
            formData.append("height", height);
            formData.append("id", $('#user_id').val());
            formData.append("img_type", $(".upload_image"+id).parent('.form-group').find('#img_type').val());
            //formData.append("oldimage", $("#image"+id).val());
        },
        error: function(file,data) {
            //var elm = $(this)[0].element;
            var _prt = $(".upload_image"+id).parent('.form-group');
            //_prt.find('#image-progress').html('');
            _prt.find('.help-block').html('File should be JPEG, PNG, JPG or PDF');
            jQuery.each(data.errors, function(i, _msg) {
                //toastr.error(_msg[0]);
                _prt.addClass('error');
                _prt.find('.help-block').html(_msg[0]);
            });

        }
    });
}


/*remove image*/
var removeImage = function(form, elm, id1){
    var res = confirm('Are you sure, You want to remove this!');
    if(res){
      var id = $(form).find('#id').val();
      var image = $('#image'+id1).val();
      axios({
            method: 'post',
            url: removeUrl,
            data:"id="+id+"&image="+image
          })
          .then(function (response){           
              if(response.data){
                $(elm).parent().closest('.dropzone-button-controll').find("#dropzone_change_button").hide();
                $(elm).parent().closest('.dropzone-button-controll').find("#dropzone_remove_button").hide();
                $(elm).parent().closest('.dropzone-button-controll').find("#dropzone_select_button").show();
                $(elm).parent().closest('.controls').find(".thumbnail").find('img').attr('src',placeholder);

                  $('#image'+id).val('');
                //$("#image-progress").html('');
                setTimeout(function(){             
                  toastr.success(response.data.message);  
                },1000);
              }
            })
            .catch(function (error) { 
              if (error.response) {
                 var message =  error.response.data.message;                                  
                  toastr.error(message);
              }  
            }); 
         return false; 
       }
     
   
   };
