<?php

/**
 * @Author: JEEan
 * @Date:   2018-01-25 15:47:58
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-09 22:41:25
 */
?>
<script type="text/javascript">
	function readURL(input) {
	    if (input.files && input.files[0]) {
	      var reader = new FileReader();
	      
	      reader.onloadend = function () { // set image data as background of div
	          $('.img-prev').attr('src', this.result);
	      }
	      
	      reader.readAsDataURL(input.files[0]);
	    }
	    // alert(input)
	}
	$(function(){
		$('#btn-txt').css({"text-decoration":"underline"});
		$(document).on("click","#btn-txt",function(e){
			$(this).css({"text-decoration":"underline"});
			$('#btn-img').css({"text-decoration":"none"});
			$('#form-img-ef').addClass("hidden");
	    	$('#form-text-ef').removeClass('hidden');
			e.preventDefault();
		});

	    $(document).on("click","#btn-img",function(e){
	    	$(this).css({"text-decoration":"underline"});
	    	$('#btn-txt').css({"text-decoration":"none"});
	    	$('#form-img-ef').removeClass("hidden");
	    	$('#form-text-ef').addClass('hidden');
	    	e.preventDefault();
	    });

	   var option = {
	   		beforeSubmit: function(){
	   			$('#btn-submit-text').attr("disabled","disabled")
	   			$('#btn-submit-text').html("Saving..")
	   		},
	   		success:function(data){
	   			console.log(data);
	   			if(data.successMsg == "success"){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success(data.msg);
		            });
		            $("#btn-submit-text").removeAttr("disabled");
					$("#btn-submit-text").html("Save");
	   			}
	   		},
	   		dataType:"JSON"
	   }
	   $('#form-text-ef').ajaxForm(option);

	   var image_upload = {
	   		beforeSubmit: function(){
	   			$('#btn-submit-img').attr("disabled","disabled")
	   			$('#btn-submit-img').html("Saving..")
	   		},
	   		success:function(data){
	   			// console.log(data);
	   			if(data == "success"){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success(data+"...");
		            });
		            $("#btn-submit-img").removeAttr("disabled");
					$("#btn-submit-img").html("Save");
	   			}
	   		},
	   		// dataType:"JSON"
	   }
	   $('#form-img-ef').ajaxForm(image_upload);

	    $(document).on('change','#fileupload',function(){
    		readURL(this);
  		});
	});
	
  
  	
</script>