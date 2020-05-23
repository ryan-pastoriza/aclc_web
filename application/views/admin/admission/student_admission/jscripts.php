<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 10:12:05
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-10 00:26:18
 */

?>
<script type="text/javascript">
	$(function(){
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
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
	   			}
	   		},
	   		dataType:"JSON"
	   }
	   $('#form-student-admission').ajaxForm(options);
	});
</script>