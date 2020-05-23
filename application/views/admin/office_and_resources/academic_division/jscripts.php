<?php

/**
 * @Author: Gian
 * @Date:   2018-04-13 14:04:44
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-05-10 10:08:50
 */

?>
<script>
$(function(){

		var tbl = $('#otd-table').DataTable({
			"searching": false,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 5,
			// "ajax":"<?= base_url()?>index.php/admin/office_and_resources/office_of_the_school_director/load_list"
		});
		$('.ellip').ellipsis({
		  lines: 2,             // force ellipsis after a certain number of lines. Default is 'auto'
		  ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
		  responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
		});
      	
      	var options = {
	   		beforeSubmit: function(){
	   			$('#btn-save').attr("disabled","disabled")
	   			$('#btn-save').html("Updating..")
	   		},
	   		success:function(data){
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
		            // tbl.ajax.reload()
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Update");
					 setTimeout(function() {
		            	window.location.reload()
		           	},2000);
	   			}
	   			if(data.successMsg == "warning"){
	   				toastr.warning(data.msg);
	   				$("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Update");
	   			}
	   		},
	   		dataType:"JSON"
	   }

	   	$(document).on('click','.edit',function(e){
	   		// alert("under construction!");
	   		$.ajax({
	   			url: '<?= base_url()?>index.php/admin/office_and_resources/academic_division/retrieve_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id :$(this).attr("attr")},
	   		})
	   		.done(function(data) {
	   			$.each(data, function(key, val) {
		   			$('#sd_id').val(val.ad_id)
	   				$('#title').val(val.title)
		   			tinymce.get('cont').setContent(val.content);
	   			});
	   		})
	   		e.preventDefault();
	   });



	   $('#form-text-ad').ajaxForm(options);
	});
</script>
<style type="text/css">
	div.dataTables_wrapper div.dataTables_paginate{
		margin:0 8px;
	}
</style>