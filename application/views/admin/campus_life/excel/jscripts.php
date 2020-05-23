<?php

/**
 * @Author: Gian
 * @Date:   2018-04-08 14:33:57
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-12 16:02:59
 */
?>
<style>
	div.dataTables_wrapper div.dataTables_filter{
		margin-right:5px;
		margin-top:5px;
	}
	div.dataTables_wrapper div.dataTables_paginate{
		margin:0 8px;
	}
	.upload-btn-wrapper {
	  position: relative;
	  overflow: hidden;
	  display: inline-block;
	}

	.btn-upload {
	  border: none;
	  color: #FFF;
	  background-color: #4c96ae;
	  padding: 14px;
	  margin-right:10px;
	  border-radius: 2px;
	}

	.upload-btn-wrapper input[name=pdf],input[name=image_pdf],input[name=file] {
	  font-size: 100px;
	  position: absolute;
	  left: 0;
	  top: 0;
	  opacity: 0;
	}
</style>
<script type="text/javascript">
	function readURL(input) {
	    if (input.files && input.files[0]) {
	      	var reader = new FileReader();
	      
	      	reader.onloadend = function () { // set image data as background of div
	          	$('.img-prev').attr('src', this.result);
	      	}
	      
	      	reader.readAsDataURL(input.files[0]);
	    }
	}
	$(function(){
		$(document).on('change','#fileupload',function(e){
			readURL(this);
			e.preventDefault();
		})
		var tbl = $("#otd-table").DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 5,
			"ajax": '<?= base_url()?>index.php/admin/campus_life/excel/autoload_excel_person'
		});
		var tbl_published = $('#otd-published').DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 50,
			"ajax": '<?= base_url()?>index.php/admin/campus_life/excel/load_pdf_table'
		});
		var options = {
	   		beforeSubmit: function(){
	   			$('#btn-save').attr("disabled","disabled")
	   			$('#btn-save').html("Saving..")
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
		                toastr.success("saved...");
		                tbl.ajax.reload();
		            });
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
					$("#form-text-exc")[0].reset();
	   			}

	   		},
	   		// dataType:"JSON"
	   }
	   $('#form-text-exc').ajaxForm(options);
	   	var optionss = {
	   		beforeSubmit: function(){
	   			$('#btn-ep').attr("disabled","disabled")
	   			$('#btn-ep').html("Saving..")
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
		                toastr.success("saved...");
		                tbl_published.ajax.reload();
		            });
		            $("#btn-ep").removeAttr("disabled");
					$("#btn-ep").html("Save");
					$("#form-text-ep")[0].reset();
	   			}

	   		},
	   		// dataType:"JSON"
	   	}
	   	$('#form-text-ep').ajaxForm(optionss);

	   	var optionsss = {
	   		beforeSubmit: function(){
	   			$('#btn-de').attr("disabled","disabled")
	   			$('#btn-de').html("Saving..")
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
		                toastr.success("saved...");
		            });
		            setTimeout(function(){
		            	window.location.reload()
		            },2000)
		            $("#btn-de").removeAttr("disabled");
					$("#btn-de").html("Save");
	   			}

	   		},
	   		// dataType:"JSON"
	   	}
	   	$('#form-text-de').ajaxForm(optionsss);

	   $(document).on('click','.delete-per',function(e){
	   	$.ajax({
	   		url: '<?= base_url()?>index.php/admin/campus_life/excel/delete_per',
	   		type: 'POSt',
	   		dataType: 'JSON',
	   		data: {id: $(this).attr('attr')},
	   	})
	   	.done(function(data) {
	   		console.log(data)
	   		if(data == "success"){
	   			setTimeout(function() {
	                toastr.options = {
	                    closeButton: true,
	                    progressBar: true,
	                    showMethod: 'slideDown',
	                    timeOut: 4000
	                };
	                toastr.success("deleted...");
	                tbl.ajax.reload();
	            });
	   		}
	   	})
	   	
	   	e.preventDefault();
	   })

	   $(document).on('click','.edit-ep',function(e){
	   	$.ajax({
	   		url: '<?= base_url("index.php/admin/campus_life/excel/edit_ep")?>',
	   		type: 'POST',
	   		dataType:"JSON",
	   		data: {ep_id:$(this).attr('attr')}
	   	})
	   	.done(function(data) {
	   		$.each(data, function(key, val) {
				$('#acad_year').val(val.acad_year)
	   			$('#semester').val(val.semester)
	   			$('#cover').val(val.cover)
	   			$('#ep_id').val(val.ep_id)
			});
	   	})
	   	
	   	e.preventDefault();
	   })
	   $(document).on('click','.delete-ep',function(e){
	   	$.ajax({
	   		url: '<?= base_url("index.php/admin/campus_life/excel/delete_ep")?>',
	   		type: 'POST',
	   		dataType:"JSON",
	   		data: {ep_id:$(this).attr('attr')}
	   	})
	   	.done(function(data) {
	   		if(data == "success"){
		   		setTimeout(function() {
	                toastr.options = {
	                    closeButton: true,
	                    progressBar: true,
	                    showMethod: 'slideDown',
	                    timeOut: 4000
	                };
	                toastr.success("successfully deleted...");
	            });
	            tbl_published.ajax.reload();
	   		}
	   	})
	   	
	   	e.preventDefault();
	   })
	});
</script>

