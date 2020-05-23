<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:49:04
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-11-22 15:39:24
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
	   			$('#btn-save').html("Saving..")
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
		            setTimeout(function() {
		            	window.location.reload()
		           	},2000);
		            // tbl.ajax.reload()
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
	   			}
	   		},
	   		dataType:"JSON"
	   }

	   var options1 = {
	   		beforeSubmit: function(){
	   			$('#btn-saved').attr("disabled","disabled")
	   			$('#btn-saved').html("Saving..")
	   		},
	   		success:function(data){
	   			// console.log(data)
	   			if(data.success == "success"){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success(data.successMsg);
		            });
		            setTimeout(function() {
		            	window.location.reload()
		           	},2000);
		            $("#btn-saved").removeAttr("disabled");
					$("#btn-saved").html("Save");
	   			}
	   		},
	   		dataType:"JSON"
	   }
	   $('#form-text-about-thesis').ajaxForm(options1);

	   $(document).on('click','.edit',function(e){
	   		// alert("under construction!");
	   		$.ajax({
	   			url: '<?= base_url()?>index.php/admin/research/thesis/retrieve_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id :$(this).attr("attr")},
	   		})
	   		.done(function(data) {
	   			$.each(data, function(key, val) {
	   				$('#title').val(val.title)
		   			$('#thesis_id').val(val.thesis_id)
		   			$('#date_published').val(val.date_published)
		   			tinymce.get('cont').setContent(val.summary);
	   			});
	   		})

	   		e.preventDefault();
	   });
	   $('#form-text-thesis').ajaxForm(options);
	});
</script>
<style type="text/css">
	div.dataTables_wrapper div.dataTables_paginate{
		margin:0 8px;
	}
</style>