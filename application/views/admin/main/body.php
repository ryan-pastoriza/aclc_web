<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 10:16:30
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-28 09:31:50
 */
$this->load->view('admin/main/scripts');
?>
<div class="container-fluid">
    <div class="row">
    	<div class="col-md-24">
			<div class="mid-content ptb-10 bg-white oh">
				<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">Main Header Carousel Settings</h3>
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
								<form id="my-awesome-dropzone" class="dropzone" action="<?= base_url() ?>index.php/admin/main/main_page/upload_slide">
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
						<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">The ACLC Butuan</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-24">
					<div class="mid-content ptb-10 bg-white oh">
						<?php echo form_open_multipart('admin/main/main_page/save_about',array('id'=>'form-text-about' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
							<input type="text" value="<?= (!empty($load_about->mac_id) ? $load_about->mac_id : ""); ?>" name="mac_id" hidden> 
							<textarea name="content" id="cont"><?= (!empty($load_about->content) ? $load_about->content : "") ?></textarea>
							<button class="btn btn-primary pull-right btn-about" style="margin-top:5px;">Save</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
