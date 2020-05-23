<?php

/**
 * @Author: JEEan
 * @Date:   2018-01-25 10:43:43
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-07 07:56:48
 */
$this->load->view("admin/admission/enrollment_flow/jscripts");
?>
		<div class="container-fluid">
		    <div class="row">
		      	<div class="col-md-4 pr-0">
		        	<div class="admission-leftpane bg-white">
		          		<div class="head-blue ptb-10 bg-blue"></div>
	          			<ul>
	            			<li class="active"><a href="<?= base_url()?>index.php/admin/admission/enrollment_flow">Enrollment Flow</a><i class="fa fa-play"></i></li>
				            <li><a href="<?= base_url()?>index.php/admin/admission/about_admission">About Admission</a><i class="fa fa-play"></i></li>
				            <li><a href="<?= base_url()?>index.php/admin/admission/enrollment_documentary_requirements">Enrollment Documentary Requirements</a><i class="fa fa-play"></i></li>
				            <li><a href="<?= base_url()?>index.php/admin/admission/student_admission">Student Admission</a><i class="fa fa-play"></i></li>
				            <li><a href="<?= base_url()?>index.php/admin/admission/entrance_exam_schedule">Entrance Exam Schedules</a><i class="fa fa-play"></i></li>
				            <li><a href="<?= base_url()?>index.php/admin/admission/contact_us">Contact Us</a><i class="fa fa-play"></i></li>
	          			</ul>
		        	</div>
		    	</div>
	
				<div class="col-md-20">
					<div class="mid-content ptb-15 bg-white oh">
						<h3 class="normal c-gray f-20 mb-15 bb pb-10">Enrollment Flow <span class="pull-right"><a href="#" id="btn-txt">Text</a> <a href="#" id="btn-img">Image</a></span></h3>
						<?php echo form_open_multipart('admin/admission/enrollment_flow/save_text',array('id'=>'form-text-ef' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
							<input type="text" name="en_id" hidden value="<?= !empty($info->en_id) ? $info->en_id : '' ?> ">
							<textarea id="content" name="content"><?= !empty($info->content) ? $info->content : ''?></textarea>
							<button type="submit" class="btn btn-primary pull-right" id='btn-submit-text' style="padding-top:5px;margin-bottom: 5px;margin-top:10px;">Save</button>
						</form>
						<?php echo form_open_multipart('admin/admission/enrollment_flow/save_img',array('id'=>'form-img-ef' , 'class' => 'hidden', 'data-toggle' => "validator", 'method' => "post")) ?>
							<div class="col-md-24" style="border:1px solid #CCC;height:580px;">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="btn btn-primary" style="margin-top:5px;margin-left:10px;padding:20px;font-size:19px;background-color:#b3b3b3;border-radius:8px;">
						                		Upload Image<input type="file" name="file" style="display: none;" id="fileupload">
						            		</label>
										</div>
									</div>
									<div class="col-md-20">
										<div class="form-group">
			            					<div class="col-md-24">
			            						<div class="col-md-4"></div>
			            						<div class="col-md-16" >
			            							<center >
							            				<img class="img-prev" style="border-radius:10px;width:520px !important;border:3px dashed #b3b3b3;height: 550px;margin-top:20px;" />
							            			</center>
			            						</div>
			            						<div class="col-md-4"></div>
			            					</div>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-submit-img">Save</button>
						</form>
					</div>
				</div>
		</div>
	</div>

</body>
</html>