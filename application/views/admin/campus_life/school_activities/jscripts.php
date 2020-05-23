
<script>
	$(function(){
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
	   			//console.log(data);
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
					$("#form-text-sa")[0].reset();
	   			}
	   			if(data.successMsg == "failed"){
					toastr.warning(data.msg);
					$("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Save");
	   			}

	   		},
	   		dataType:"JSON"
	   }
	   $(document).on('click','.edit',function(e){
	   		// alert("under construction!")
	   		$.ajax({
	   			url: '<?= base_url()?>index.php/admin/campus_life/school_activities/retrieve_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id :$(this).attr("attr")},
	   		})
	   		.done(function(data) {

	   			$.each(data, function(key, val) {
	   				$('#title').val(val.act_title)
		   			$('#sc_id').val(val.sc_id)
		   			$('#activity-date').val(val.date)
		   			$('#activity-time').val(val.time)
		   			$('#activity-department').val(val.department)
		   			tinymce.get('cont').setContent(val.details);
	   			});
	   		})

	   		e.preventDefault();
	   });
	   $('#form-text-sa').ajaxForm(options);

	   var tbl = $('#otd-table').DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 5,
			// "ajax":"<?= base_url()?>index.php/admin/office_and_resources/office_of_the_school_director/load_list"
		});
	});
</script>