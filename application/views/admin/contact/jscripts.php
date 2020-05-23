<?php

/**
 * @Author: Gian
 * @Date:   2018-07-26 16:45:51
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-31 00:36:54
 */
?>

<script type="text/javascript">
	$(function(){
		$(document).on('keyup','#embed',function(e){
			$('#embed_map_preview').attr('src',$(this).val())
			e.preventDefault();
		})

		var optionss = {
	   		beforeSubmit: function(){
	   			$('#btn-save').attr("disabled","disabled")
	   			$('#btn-save').html("Saving..")
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
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
					$("#form-text-detail")[0].reset();
	   			}

	   		},
	   		// dataType:"JSON"
	   }
	   $('#form-cu').ajaxForm(optionss);
	   var tbl = $("#otd-msg").DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 10,
			"ajax":"<?= base_url('index.php/admin/contact_us/message/load_message')?>"
		});

	})
</script>