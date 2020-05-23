<?php

/**
 * @Author: Gian
 * @Date:   2018-07-12 13:44:49
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-30 10:10:14
 */
$this->load->view('admin/campus_life/news/jscripts');
?>
<style type="text/css">
	div.dataTables_wrapper div.dataTables_filter{
		margin:5px 10px;

	}
	div.dataTables_wrapper div.dataTables_filter input{
		border-radius: 0px;
	}
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
</style>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li ><a href="<?= base_url()?>index.php/admin/campus_life/school_activities">School Activities</a><i class="fa fa-play"></i></li>
		            <li ><a href="<?= base_url()?>index.php/admin/campus_life/organization_club">Organizations / Clubs</a></li>
		            <li ><a href="<?= base_url()?>index.php/admin/campus_life/excel">Excel</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/campus_life/supreme_student_government">Supreme Student Government</a><i class="fa fa-play"></i></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/campus_life/news">News</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">News</h3>
				<div class="row">
					<div class="col-md-10">
						<?php echo form_open_multipart('admin/campus_life/news/save',array('id'=>'form-text-news' ,'data-toggle' => "validator", 'method' => "post")) ?>
							<div class="form-group">
								<label for="title" style="font-weight: normal;" class="c-gray">News Title</label>
								<input type="text" name="title" id="title" class="form-control" style="border-radius:0;">
								<input type="text" name="news_id" id="news_id" hidden>
							</div>
							<div class="form-group">
								<label for="content" style="font-weight: normal;" class="c-gray">Content</label>
								<textarea name="content" id="cont"></textarea>
							</div>
							<div class="form-group">
								<label class="btn btn-primary pull-right" id="btn-file">
					                Upload Image <input type="file" style="display: none;" name="file">
					            </label>
								<button type="submit" class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</form>
					</div>
					<div class="col-md-14">
						<div class="row">
							<h4>News List</h4>
						</div>
						<div class="row">
							<div class="table-responsive">
								<table id="otd-news" class="table table-bordered" style="width:100%;">
									<thead>
										<tr>
											<td style="text-align:center;">Title</td>	
											<td style="text-align:center;">Image</td>	
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