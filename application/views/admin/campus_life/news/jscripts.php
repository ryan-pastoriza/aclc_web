<?php

/**
 * @Author: Gian
 * @Date:   2018-07-12 13:45:11
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-12 14:37:52
 */
?>
<script type="text/javascript">
	$(function(){
		var tbl_news = $('#otd-news').DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 50,
			"ajax": '<?= base_url()?>index.php/admin/campus_life/news/tbl_news'
		});
		var options = {
	   		beforeSubmit: function(){
	   			$('#btn-save').attr("disabled","disabled")
	   			$('#btn-save').html("Saving..")
	   		},
	   		success:function(data){
	   			console.log(data);
	   			if(data == "success"){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success("saved...");
		                tbl_news.ajax.reload();
		            });
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
					$("#form-text-news")[0].reset();
	   			}

	   		},
	   		// dataType:"JSON"
	   }
	   $('#form-text-news').ajaxForm(options);

	   $(document).on('click','.delete',function(e){
	   	$.ajax({
	   		url: '<?= base_url()?>index.php/admin/campus_life/news/delete_news',
	   		type: 'POST',
	   		// dataType: 'JSON',
	   		data: {id: $(this).attr('attr')},
	   	})
	   	.done(function(data) {
	   		// console.log(data);
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
	   			tbl_news.ajax.reload();
	   		}
	   	})
	   	
	   	e.preventDefault();
	   })
	   $(document).on('click','.edit',function(e){
	   	$.ajax({
	   		url: '<?= base_url()?>index.php/admin/campus_life/news/edit_news',
	   		type: 'POST',
	   		dataType: 'JSON',
	   		data: {id: $(this).attr('attr')},
	   	})
	   	.done(function(data) {
	   		$.each(data, function(index, val) {
	   			$('#news_id').val(val.news_id);
	   			$('#title').val(val.title)
	   			tinymce.get('cont').setContent(val.content);
	   		});
	   	})
	   	e.preventDefault();
	   })
	})
</script>