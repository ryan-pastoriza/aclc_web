<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:08:28
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-07 14:01:45
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
	   			url: '<?= base_url()?>index.php/admin/office_and_resources/external_affairs/retrieve_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id :$(this).attr("attr")},
	   		})
	   		.done(function(data) {
	   			
	   			$.each(data, function(key, val) {
	   				$('#title').val(val.title)
		   			$('#easp_id').val(val.easp_id)
		   			tinymce.get('cont').setContent(val.content);
		   			// alert(val.content)
	   			});
	   		})

	   		e.preventDefault();
	   });

	   $('#form-text-easp').ajaxForm(options);
	});
</script>
<style type="text/css">
	div.dataTables_wrapper div.dataTables_paginate{
		margin:0 8px;
	}
</style>