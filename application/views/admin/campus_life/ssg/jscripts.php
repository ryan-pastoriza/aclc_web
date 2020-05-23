<?php

/**
 * @Author: Gian
 * @Date:   2018-04-08 15:50:48
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-12 08:57:23
 */

?>
<script type="text/javascript">
	$(function(){
		var tbl = $("#otd-ssg").DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 5,
			"ajax":"<?= base_url('index.php/admin/campus_life/supreme_student_government/autoload_ssg_person')?>"
		});
		$(document).on('click','.delete-per',function(e){
			tbl.ajax.reload();
			$.ajax({
				url: '<?= base_url()?>index.php/admin/campus_life/supreme_student_government/delete_pers_info',
				type: 'POST',
				dataType: 'JSON',
				data: {id: $(this).attr('attr')},
			})
			.done(function(data) {
				setTimeout(function() {
	                toastr.options = {
	                    closeButton: true,
	                    progressBar: true,
	                    showMethod: 'slideDown',
	                    timeOut: 4000
	                };
	                toastr.success("successfully delete.");
	                tbl.ajax.reload();
	            });
			})
			

			e.preventDefault();
		});

		var options = {
	   		beforeSubmit: function(){
	   			$('#btn-save').attr("disabled","disabled")
	   			$('#btn-save').html("Saving..")
	   		},
	   		success:function(data){
	   			if(data == "success"){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success("saved...");
		                tbl.ajax.reload();
		            });
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
					$("#form-text-ssg")[0].reset();
	   			}

	   		},
	   		// dataType:"JSON"
	   }
	   $('#form-text-ssg').ajaxForm(options);
	   var optionss = {
	   		beforeSubmit: function(){
	   			$('#btn-saved').attr("disabled","disabled")
	   			$('#btn-saved').html("Saving..")
	   		},
	   		success:function(data){
	   			console.log(data)
	   			if(data == "success"){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success("Saved...");
		            });
		            setTimeout(function() {
		            	window.location.reload();
		            },2000)
		            $("#btn-saved").removeAttr("disabled");
					$("#btn-saved").html("Save");
					$("#form-text-detail")[0].reset();
	   			}

	   		},
	   		// dataType:"JSON"
	   }
	   $('#form-text-detail').ajaxForm(optionss);
	   



	   // We can attach the `fileselect` event to all file inputs on the page
		  $(document).on('change', '#file', function() {
		    var input = $(this),
		        numFiles = input.get(0).files ? input.get(0).files.length : 1,
		        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');


		    // input.trigger('fileselect', [numFiles, label]);
		    // $('#btn-file').html(label)

		  });
	});
	function readURL(input) {
	    if (input.files && input.files[0]) {
	      var reader = new FileReader();
	      
	      reader.onloadend = function () { // set image data as background of div
	          $('.img-prev').attr('src', this.result);
	      }
	      
	      reader.readAsDataURL(input.files[0]);
	    }
	  }
	  
	  $(document).on('change','#fileupload',function(){
	    readURL(this);
	  });
</script>