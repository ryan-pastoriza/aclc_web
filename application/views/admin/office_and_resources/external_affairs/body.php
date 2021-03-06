<?php

/**
 * @Author: Gian
 * @Date:   2018-02-26 13:44:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-07 13:56:14
 */
$this->load->view("admin/office_and_resources/external_affairs/jscripts");
?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li><a href="<?= base_url()?>index.php/admin/office_and_resources/office_of_the_school_director">Office of the School Director</a></li>
		            <li><a href="<?= base_url()?>index.php/admin/office_and_resources/academic_division">Academic Division</a></li>
		            <li><a href="<?= base_url()?>index.php/admin/office_and_resources/student_service_division">Student Service Division</a></li>
		            <li ><a href="<?= base_url()?>index.php/admin/office_and_resources/office_of_administration_division">Office of Administration Division</a></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/office_and_resources/external_affairs">External Affairs &amp; Special Projects Division</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">External Affairs &amp; Special Project Division</h3>
				<div class="row">
					<div class="col-md-10">
						<?php echo form_open_multipart('admin/office_and_resources/external_affairs/save_text',array('id'=>'form-text-easp' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
						  	<input type="text" name="easp_id" id="easp_id" hidden>
							<div class="form-group">
								<label for="title" style="font-weight: normal;" class="c-gray">Title</label>
								<input type="text" name="title" id="title" class="form-control" style="border-radius:0;" required>
							</div>
							<div class="form-group">
								<label for="content" style="font-weight: normal;" class="c-gray">Content</label>
								<textarea name="content" id="cont"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</form>
					</div>
					<div class="col-md-14">
						<div class="col-md-24">
							<div class="row">
								<h4>Field List</h4>
							</div>
							<div class="row" style="border:1px solid #CCC;">
								<div class="col-md-24">
									<?php foreach($info as $key => $value): ?>
										<div style="border-bottom:1px solid #dfdfd0;padding-bottom:10px;margin-top:10px;">
											<div class="row" style="border-left:20px solid #dfdfd0;margin-left:20px;">
												<div class="col-md-24" style="padding-left:10px;word-wrap:break-word;">
													<h3><?= ucwords($value->title)?></h3>
													<div style="height:90px;" class="ellip">
														<?= $value->content; ?>
													</div>
													<a href="#" class="pull-right edit" style="margin-right:10px;" attr="<?= $value->easp_id ?>">modify</a>
												</div>
											</div>
										</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>