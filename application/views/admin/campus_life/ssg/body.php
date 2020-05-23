<?php

/**
 * @Author: Gian
 * @Date:   2018-04-08 15:47:16
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-30 10:12:21
 */
$this->load->view('admin/campus_life/ssg/jscripts');
?>
<style type="text/css">
	#btn-file {
    /*position: relative;*/
    /*overflow: hidden;*/
	margin-top:10px !important;
	margin-left: 5px;
	height: 29px;
	background-color:#008c8c;
	padding-top:5px;
	border-radius: 2px;
	}

	.btn-file input[type=file] {
	    position: absolute;
	    top: 0;
	    right: 0;
	    min-width: 100%;
	    min-height: 100%;
	    font-size: 100px;
	    text-align: right;
	    filter: alpha(opacity=0);
	    opacity: 0;
	    outline: none;
	    background: white;
	    cursor: inherit;
	    display: block;
	}
	.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
	    margin: 0;
	    padding: 0;
	    border: none;
	    box-shadow: none;
	    text-align: center;
	}
	.kv-avatar {
	    display: inline-block;
	}
	.kv-avatar .file-input {
	    display: table-cell;
	    width: 213px;
	}
	.kv-reqd {
	    color: red;
	    font-family: monospace;
	    font-weight: normal;
	}
	div.dataTables_wrapper div.dataTables_filter{
		margin-right:5px;
		margin-top:5px;
	}
</style>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li><a href="<?= base_url()?>index.php/admin/campus_life/school_activities">School Activities</a><i class="fa fa-play"></i></li>
		            <li ><a href="<?= base_url()?>index.php/admin/campus_life/organization_club">Organizations / Clubs</a></li>
		            <li ><a href="<?= base_url()?>index.php/admin/campus_life/excel">Excel</a><i class="fa fa-play"></i></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/campus_life/supreme_student_government">Supreme Student Government</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/campus_life/news">News</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Supreme Student Government</h3>
				<div class="row">
					<div class="col-md-10">
						<?php echo form_open_multipart('admin/campus_life/supreme_student_government/save_ssg',array('id'=>'form-text-ssg', 'data-toggle' => "validator", 'method' => "post")) ?>
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
				                        	<label class="btn btn-primary" id="btn-file" style="margin-top:-0px !important;width: 100%;margin-left:-1px;">
								                Upload Image <input type="file" style="display: none;" name="file"  id="fileupload">
								            </label>
				                        </center>
									</div>
								</div>
								<div class="row" style="line-height: 1px;">
									<div class="form-group">
										<label for="title" style="font-weight: normal;font-size:12px;" class="c-gray">Detail</label>
										<textarea name="detail" id="detail" class="form-control" style="border-radius:0; resize:none;height: 200px"></textarea>
									</div>
								</div>
								<div class="form-group">
									<button class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-14">
						<div class="row">
							<h4>Officer List</h4>
						</div>
						<div class="row">
							<div class="table-responsive">
								<table id="otd-ssg" class="table table-bordered" style="width:100%;">
									<thead>
										<tr>
											<td style="text-align:center;">Fullname</td>	
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
				<div class="row">
					<?php echo form_open_multipart('admin/campus_life/supreme_student_government/save_detail',array('id'=>'form-text-detail' ,'data-toggle' => "validator", 'method' => "post")) ?>
						<div class="row" style="line-height: 1px;">
							<div class="form-group">
								<h3 for="title" style="font-weight: normal;font-size:12px;" class="c-gray">Detail</h3>
								<input type="text" value="<?= $autoload->ssgi_id != "" ? $autoload->ssgi_id : '' ?>" hidden name="ssgi_id"> 
								<textarea name="content" id="cont"><?= $autoload->detail ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-saved">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>