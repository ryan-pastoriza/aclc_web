<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 10:12:00
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-07 07:59:50
 */
$this->load->view("admin/admission/student_admission/jscripts");
?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li><a href="<?= base_url()?>index.php/admin/admission/enrollment_flow">Enrollment Flow</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/admission/about_admission">About Admission</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/admission/enrollment_documentary_requirements">Enrollment Documentary Requirements</a><i class="fa fa-play"></i></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/admission/student_admission">Student Admission</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/admission/entrance_exam_schedule">Entrance Exam Schedules</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/admission/contact_us">Contact Us</a><i class="fa fa-play"></i></li>
      			</ul>
        	</div>
    	</div>
    	<div class="col-md-20">
	        <div class="mid-content ptb-15 bg-white oh">
	          	<h3 class="normal c-gray f-20 mb-15 bb pb-10">Student Admission</h3>
	              	<?php echo form_open_multipart('admin/admission/student_admission/save_text',array('id'=>'form-student-admission' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
	             	<input type="text" name="sa_id" hidden value="<?= !empty($info->sa_id) ? $info->sa_id : '' ?> ">
	              	<textarea name="content"><?= !empty($info->content) != "" ? $info->content : ''?></textarea>
	              	<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
	            </form>
	        </div>
      	</div>
    </div>
</div>