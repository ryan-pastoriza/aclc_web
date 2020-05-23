<?php

/**
 * @Author: Gian
 * @Date:   2018-02-21 11:03:12
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-11 21:31:05
 */

?>
<script>
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
	   $('#form-text-p').ajaxForm(options);


	});
</script>