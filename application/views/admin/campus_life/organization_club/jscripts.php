<?php

/**
 * @Author: Gian
 * @Date:   2018-03-29 09:57:20
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-08 09:59:56
 */
?>
<script type="text/javascript">
	$(function(){
		var tbl = $("#otd-table").dataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 5
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
	   			// console.log(data);
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
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
					$("#form-text-og")[0].reset();
	   			}
	   			if(data.successMsg == "failed"){
					toastr.warning(data.msg);
					$("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
	   			}

	   		},
	   		dataType:"JSON"
	   }
	   $('#form-text-og').ajaxForm(options);
	   $(document).on('click','.edit',function(e){
	   		// alert("under construction!")
	   		$.ajax({
	   			url: '<?= base_url()?>index.php/admin/campus_life/organization_club/retrieve_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id :$(this).attr("attr")},
	   		})
	   		.done(function(data) {

	   			$.each(data, function(key, val) {
	   				$('#title').val(val.orgname)
		   			$('#org_id').val(val.org_id)
		   			tinymce.get('cont').setContent(val.details);
		   			$('.img-prev').attr('src','<?=base_url()?>plugins/images/organization_club/'+val.img);
	   			});
	   		})

	   		e.preventDefault();
	   });
	   
	});
</script>
<style type="text/css">
	div.dataTables_wrapper div.dataTables_paginate{
		margin:0 8px;
	}
</style>