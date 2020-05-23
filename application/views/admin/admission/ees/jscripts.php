<?php

/**
 * @Author: Gian
 * @Date:   2018-04-10 01:01:08
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-05-04 15:06:22
 */
?>
<script type="text/javascript">
	$(function(){
		var option = {
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
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
	   			}
	   		},
	   		dataType:"JSON"
	   }
	   $('#form-ees').ajaxForm(option);
	})
</script>