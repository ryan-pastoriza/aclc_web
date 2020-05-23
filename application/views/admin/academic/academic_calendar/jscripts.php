<?php

/**
 * @Author: Gian
 * @Date:   2018-02-14 08:58:11
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-11 10:25:40
 */
?>

<script type="text/javascript">
	$(function(){
		var tbl;
		$('#calendar').fullCalendar({
	      	eventLimit: true, // allow "more" link when too many events
	      	// events: {url:'<?= base_url()?>index.php/admin/academics/academic_calendar/',},
	      	events: '<?= base_url()?>index.php/admin/academics/academic_calendar/load_events',
	      	locale: 'en',
	      	eventClick: function(event) {
	      		var id = event.act_id;
	      		// alert(id);
	      		$.ajax({
	      			url: '<?= base_url()?>index.php/admin/academics/academic_calendar/activity_details',
	      			type: 'POST',
	      			dataType: "JSON",
	      			data: {id:id},
	      		})
	      		.done(function(data) {
	      			$('#act_title').html(data.title)
	      			$('#event-detail').html(data.details);
	      			$('#btn-edit').attr('attr',data.id)
	      			$('#infoModal').modal('show');
	      		})
	      		
				
			},
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
		            $("#calendar").fullCalendar('refetchEvents')
		            $('#form-ac')[0].reset();
	   			}else if(data.successMsg == "failed"){

	   			}
	   			$("#btn-save").removeAttr("disabled");
				$("#btn-save").html("Save");
	   		},
	   		dataType:"JSON"
	   }
	   $('#form-ac').ajaxForm(options);
	   	$(document).on('click','#btn-edit',function(e){
	   		$.ajax({
	   			url: '<?= base_url()?>index.php/admin/academics/academic_calendar/edit_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id: $(this).attr('attr')},
	   		})
	   		.done(function(data) {
				$('[name=act_name]').val(data.act_name)
				$('[name=sdate]').val(data.sdate)
				$('[name=stime]').val(data.stime)
				$('[name=edate]').val(data.edate)
				$('[name=etime]').val(data.etime)
				tinymce.get('cont').setContent(data.content);
				$('[name=location]').val(data.location)
				$('[name=department]').val(data.department)
				$('[name=name]').val(data.type)
				$('[name=accal_id]').val(data.accal_id)
	   		})
	   		$('#infoModal').modal('hide');
	   		e.preventDefault();
	   	})
	})
</script>


<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="act_title">Activity Info</h4>
      </div>
      <div class="modal-body">
        <h4>Details:</h4>
        <div id="event-detail"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px ;font-size:13px;">Close</button>
        <button type="button" class="btn btn-primary" id="btn-edit">Edit</button>
      </div>
    </div>
  </div>
</div>