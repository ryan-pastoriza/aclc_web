<?php

/**
 * @Author: Gian
 * @Date:   2018-04-08 14:32:48
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-30 10:22:19
 */
$this->load->view("admin/campus_life/excel/jscripts");
?>

<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li><a href="<?= base_url()?>index.php/admin/campus_life/school_activities">School Activities</a><i class="fa fa-play"></i></li>
		            <li ><a href="<?= base_url()?>index.php/admin/campus_life/organization_club">Organizations / Clubs</a></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/campus_life/excel">Excel</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/campus_life/supreme_student_government">Supreme Student Government</a><i class="fa fa-play"></i></li><li><a href="<?= base_url()?>index.php/admin/campus_life/news">News</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Excel</h3>
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#excel_info">Excel Info</a></li>
				    <li><a data-toggle="tab" href="#publish_">Publish</a></li>
				</ul>
				<div class="tab-content">
					<div id="excel_info" class="tab-pane fade in active">
						<div class="row" style="padding-top:20px;">
							<div class="col-md-10">
								<div class="col-md-24">
									<?php echo form_open_multipart('admin/campus_life/excel/save_info',array('id'=>'form-text-exc', 'data-toggle' => "validator", 'method' => "post")) ?>
										<div class="col-md-24">
											<div class="row">
												<div class="col-md-16">
													<div class="row" style="line-height: 1px;">
														<div class="form-group">
															<label for="fullname" style="font-weight: normal;font-size:12px;" class="c-gray">Fullname</label>
															<input type="text" name="fullname" id="fullname" class="form-control" style="border-radius:0;">
														</div>
													</div>
													<div class="row" style="line-height: 1px;">
														<div class="form-group">
															<label for="designation" style="font-weight: normal;font-size:12px;" class="c-gray">Designation</label>
															<input type="text" name="designation" id="designation" class="form-control" style="border-radius:0;">
														</div>
													</div>
													<div class="row" style="line-height: 1px;">
														<div class="form-group">
															<label for="acad_year" style="font-weight: normal;font-size:12px;" class="c-gray">Academic Year</label>
															<input type="text" name="acad_year" id="acad_year" class="form-control" style="border-radius:0;">
														</div>
													</div>
												</div>
												<div class="col-md-8">
													<center>
								                        <img class="img-prev" src="<?= base_url('plugins/images/profile.png')?>" style="width:100%;height:190px;border:1px solid #CCC">
							                        	<label class="btn btn-primary" id="btn-file" style="margin-top:-0px !important;width: 100%;">
											                Upload Image <input type="file" style="display: none;" name="file"  id="fileupload">
											            </label>
							                        </center>
												</div>
											</div>
											<div class="row" style="line-height: 1px;">
												<div class="form-group">
													<label for="title" style="font-weight: normal;font-size:12px;" class="c-gray">Detail</label>
													<textarea name="per-details" id="detail" class="form-control" style="border-radius:0; resize:none;height: 200px"></textarea>
												</div>
											</div>
											<div class="form-group">
												<button class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
											</div>
										</div>
									</form>
									<div class="row">
										<div class="col-md-24">
											<?php echo form_open_multipart('admin/campus_life/excel/save_detail',array('id'=>'form-text-de' ,'data-toggle' => "validator", 'method' => "post")) ?>
												<div class="row" style="line-height: 1px;">
													<div class="form-group">
														<input type="text" value="<?= !empty($autoload->ex_id) ?  $autoload->ex_id :'' ?>" name="ex_id" class="hidden"/>
														<label for="title" style="font-weight: normal;font-size:12px;" class="c-gray">Detail</label>
														<textarea name="content" id="cont"><?= !empty($autoload->detail) ? $autoload->detail:'' ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<button type="submit" class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-de">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-14">
								<div class="row">
									<h4>Officer List</h4>
								</div>
								<div class="row">
									<div class="table-responsive">
										<table id="otd-table" class="table table-bordered">
											<thead>
												<tr>
													<td style="text-align:center;">Name</td>	
													<td style="text-align:center;">Designation</td>	
													<td style="text-align:center;">Academic Year</td>	
													<td style="text-align:center;">Action</td>	
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="publish_" class="tab-pane fade">
						<div class="row" style="padding-top:20px;">
							<div class="col-md-10">
								<div class="col-md-24">
									<div class="row">
										<div class="col-md-24">
											<?php echo form_open_multipart('admin/campus_life/excel/save_cover',array('id'=>'form-text-ep' ,'data-toggle' => "validator", 'method' => "post")) ?>
												<div class="col-md-24">
													<div class="row" style="line-height: 1px;">
														<div class="form-group">
															<label for="acad_year" style="font-weight: normal;font-size:12px;" class="c-gray">Academic Year</label>
															<input type="text" class="hidden" id="ep_id" name="ep_id">
															<input type="text" class="form-control" name="acad_year"  id="acad_year" style="border-radius:0px;">
														</div>
													</div>
												</div>
												<div class="col-md-24">
													<div class="row" style="line-height: 1px;">
														<div class="form-group">
															<label for="semester" style="font-weight: normal;font-size:12px;" class="c-gray">Semester</label>
															<input type="text" class="form-control" name="semester" id="semester" style="border-radius:0px;">
														</div>
													</div>
												</div>
												<div class="col-md-24">
													<div class="row" style="line-height: 1px;">
														<div class="form-group">
															<label for="cover" style="font-weight: normal;font-size:12px;" class="c-gray">Cover</label>
															<textarea class="form-control" name="cover" id="cover" style="border-radius:0px;resize: none;height:100px;"></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-24">
													<div class="row" style="line-height: 1px;">
														<div class="form-group" style="margin-top:12px;">
															<button type="submit" class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-ep">Save</button>
															<div class="upload-btn-wrapper pull-right" style="margin-top:10px;">
														  		<button class="btn-upload">Upload a PDF</button>
															  	<input type="file" name="pdf" />
															</div>
															<div class="upload-btn-wrapper pull-right" style="margin-top:10px;">
														  		<button class="btn-upload">Upload a PDF Image Cover</button>
															  	<input type="file" name="image_pdf" />
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-14">
								<div class="row">
									<h4>Publish List</h4>
								</div>
								<div class="row">
									<div class="table-responsive">
										<table id="otd-published" class="table table-bordered" style="width:100%;">
											<thead>
												<tr>
													<td style="text-align:center;">Academic Year</td>	
													<td style="text-align:center;">Semester</td>	
													<td style="text-align:center;">Cover</td>	
													<td style="text-align:center;">C.P</td>	
													<td style="text-align:center;">Action</td>	
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>