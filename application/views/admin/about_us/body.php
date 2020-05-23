<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 19:15:37
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-21 10:55:51
 */
$this->load->view("admin/about_us/jscripts");
?>
<div class="container-fluid">
    <div class="row">
    	<div class="col-md-24">
			<div class="mid-content ptb-10 bg-white oh">
				<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">About Header Carousel Settings</h3>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-24">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-24">
							<div class="mid-content ptb-10 bg-white oh c-gray normal bb">
								<h5>Upload Images</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-24">
							<div class="mid-content ptb-10 bg-white oh c-gray normal">
								<form id="my-awesome-dropzone" class="dropzone" action="<?= base_url() ?>index.php/admin/about_us/about/upload_slide">
			                        <div class="dropzone-previews"></div>
			                        <button type="submit" class="btn btn-primary pull-right">Upload Picture!</button>
			                    </form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-24">
							<div class="mid-content ptb-10 bg-white oh c-gray normal bb">
								<h5>Sequence Selected Images to Show</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-24">
							<div class="mid-content ptb-10 bg-white oh c-gray normal">
								<div class="table-reponsive">
									<table id="tbl-show-image-slide" class="table table-hover">
										<thead>
											<tr>
												<th style="text-align: center">Image</th>
												<th style="text-align: center">Position</th>
												<th style="text-align: center">Show</th>
												<th style="text-align: center">Action</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-24">
							<div class="mid-content ptb-10 bg-white oh c-gray normal bb">
								<h5>Carousel Preview</h5>
							</div>
						</div>
					</div>
					<div class="row" >
						<div class="col-md-24" >
							<div class="mid-content ptb-10  oh c-gray normal bb bg-white">
								<div class="main-carousel relative mb-10" style="height:512px;">
									<div class="owl-carousel owl-theme" style="margin-top:50px;">
							            <?php if (!empty($slide_view)): ?>
								            <?php foreach($slide_view as $key => $value):?>
								            	<div class="item">
									              <img src="<?= base_url($value->path)?>" class="img-responsive" style="height:500px;" alt="">
									            </div>
								            <?php endforeach;?>
								        <?php else: ?>
								        	<div class="item">
								              <center style="padding-top:200px:"><h1>No Image Available</h1></center>
								            </div>
								        <?php endif;?>
							        </div>
							        <div>
							         	<span class="left-nav fa fa-angle-left"></span>
							         	<span class="right-nav fa fa-angle-right"></span>
							        </div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="row" style="margin-top:10px;">
		<div class="col-md-24">
			<div class="row">
				<div class="col-md-24">
					<div class="mid-content ptb-10 bg-white oh">
						<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">History</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-24">
					<div class="mid-content ptb-10 bg-white oh">
						<?php echo form_open_multipart('admin/about_us/about/save_history',array('id'=>'form-text-history' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
							<input type="text" value="<?= (!empty($his->hist_id) ? $his->hist_id : ""); ?>" name="hist_id" hidden> 
							<textarea class="testMCE" name="content" id="cont"><?= (!empty($his->content) ? $his->content : "") ?></textarea>
							<input name="image" type="file" id="upload" class="hidden" onchange="">
							<button class="btn btn-primary pull-right btn-history" style="margin-top:5px;">Save</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-24">
			<div class="row">
				<div class="col-md-12">
					<div class="row" style="margin-top:10px;">
						<div class="col-md-24">
							<div class="row">
								<div class="col-md-24">
									<div class="mid-content ptb-10 bg-white oh">
										<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">Mission, Vision, Core Values</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-24">
									<div class="mid-content ptb-10 bg-white oh">
										<ul class="nav nav-tabs">
										    <li class="active"><a data-toggle="tab" href="#mission">Mission</a></li>
										    <li><a data-toggle="tab" href="#vision">Vision</a></li>
										    <li><a data-toggle="tab" href="#corevalues">Core Values</a></li>
										</ul>
										<div class="tab-content">
											<div id="mission" class="tab-pane fade in active">
												<?php echo form_open_multipart('admin/about_us/about/save_mission',array('id'=>'form-text-mission' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
													<input type="text" value="<?= !empty($mission->mis_id) ? $mission->mis_id : ''; ?>" name="mis_id" hidden>
													<textarea name="content" id="cont"><p><?= !empty($mission->content) ?  $mission->content : ''; ?></p></textarea>
													<button class="btn btn-primary pull-right btn-mission" style="margin-top:5px;">Save</button>
												</form>	
											</div>
											<div id="vision" class="tab-pane fade">
												<?php echo form_open_multipart('admin/about_us/about/save_vision',array('id'=>'form-text-vision' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
													<input type="text" value="<?= !empty($vis->vis_id) ? $vis->vis_id : ''; ?>" name="vis_id" hidden> 
													<textarea name="content" id="cont"><p><?= !empty($vis->content) ? $vis->content:''; ?></p></textarea>
													<button class="btn btn-primary pull-right btn-vision" style="margin-top:5px;">Save</button>
												</form>	
											</div>
											<div id="corevalues" class="tab-pane fade">
												<?php echo form_open_multipart('admin/about_us/about/save_core',array('id'=>'form-text-core' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
													<input type="text" value="<?= !empty($cv->cv_id) ? $cv->cv_id:'' ?>" name="cv_id" hidden> 
													<textarea name="content" id="cont"><p><?= !empty($cv->content) ? $cv->content:''; ?></p></textarea>
													<button class="btn btn-primary pull-right btn-core" style="margin-top:5px;">Save</button>
												</form>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row" style="margin-top:10px;">
						<div class="col-md-24">
							<div class="row">
								<div class="col-md-24">
									<div class="mid-content ptb-10 bg-white oh">
										<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">Hymn</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-24">
									<div class="mid-content ptb-10 bg-white oh">
										<?php echo form_open_multipart('admin/about_us/about/save_hymn',array('id'=>'form-text-hymn' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
											<input type="text" name="hymn_id" value="<?= !empty($hymn->hymn_id) ? $hymn->hymn_id:''; ?>" hidden/> 
											<textarea name="content" id="cont"><?= !empty($hymn->content) ? $hymn->content:'';?></textarea>
											<button class="btn btn-primary pull-right btn-hymn" style="margin-top:5px;">Save</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-24">
			<div class="row">
				<div class="col-md-24">
					<div class="mid-content ptb-10 bg-white oh">
						<?php echo form_open_multipart('admin/about_us/about/save_accreditation',array('id'=>'form-text-accre' , 'class' => 'form-horizontal bb', 'data-toggle' => "validator", 'method' => "post")) ?>
							<button class="btn btn-primary pull-right btn-accre">Save</button>
							<div class="upload-btn-wrapper pull-right">
							  	<button class="btn-upload">Upload a file</button>
							  	<input type="file" name="file" />
							</div>
							<h3 class="normal c-gray f-20 " style="padding-top:10px;">Accredential Logo</h3>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-24" style="">
					<div class="bg-white oh" style="padding-bottom:20px;">
						<div class="responsive" style="padding-left:20px;">
							<?php if(!empty($accreditation)):?>
								<?php foreach ($accreditation as $key => $value):?> 
									<div>
										<img src="<?= base_url($value->path)?>"  style="width:200px" disabled/> 
								    </div>
								<?php endforeach; ?>
							<?php else: ?>
								<div>
									<center>
										<h1>No Image Available</h1>
									</center>
								</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-24">
			<?php echo form_open_multipart('admin/about_us/about/save_sch_location',array('id'=>'form-text-sc-location' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
				<input type="text" name="cl_id" value="<?= $location->cl_id ?>" hidden>
				<div class="row">
					<div class="col-md-24">
						<div class="mid-content ptb-10 bg-white oh">
								<div class="row bb">
									<div class="col-md-3">
										<h3 class="normal c-gray f-20 " style="padding-top:10px;">School Location</h3>
									</div>
									<div class="col-md-21">
										<div class="form-group">
											<div class="input-group">
										      	<div class="input-group-addon">Embed Map Url:</div>
										      	<input type="text" class="form-control" name="embedmap" value="<?= $location->embedmap ?>">
										    </div>
										</div>
									</div>
								</div>	
							</form>
						</div>
					</div>
					<div class="col-md-24">
						<div class="mid-content ptb-10 bg-white oh c-gray">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="contact_num">Contact Number</label>
								    <input type="text" name="contact_num" value="<?= !empty($location->contact_num) ? $location->contact_num:'' ?>" class="form-control" id="contact_num">
								</div>
								<div class="form-group">
								    <label for="fax_num">Fax Number</label>
								    <input type="text" name="fax_num" value="<?= !empty($location->fax_num) ? $location->fax_num:'' ?>" class="form-control" id="fax_num">
								</div>
								<div class="form-group">
								    <label for="location">Location</label>
								    <input type="text" name="location" value="<?= !empty($location->location) ? $location->location:'' ?>" class="form-control" id="location">
								</div>
								<button class="btn btn-primary pull-right btn-location">Save</button>
							</div>
							<div class="col-md-18">
								<iframe 
									src="<?= !empty($location->embedmap) ? $location->embedmap : '' ?>"
									style="width:100%;height:300px;"
									frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>