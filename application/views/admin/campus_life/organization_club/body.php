<?php

/**
 * @Author: Gian
 * @Date:   2018-02-26 13:44:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-07 08:47:20
 */

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
</style>
<script type="text/javascript">
	$(function() {

	  // We can attach the `fileselect` event to all file inputs on the page
	  $(document).on('change', '#file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');


	    // input.trigger('fileselect', [numFiles, label]);
	    $('#btn-file').html(label)

	  });
	});
	function readURL(input) {
	    if (input.files && input.files[0]) {
	      var reader = new FileReader();
	      
	      reader.onloadend = function () { // set image data as background of div
	          $('.img-prev').attr('src', this.result);
	      }
	      
	      reader.readAsDataURL(input.files[0]);
	    }
	  }
	  
	  $(document).on('change','#fileupload',function(){
	    readURL(this);
	  });
</script>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li><a href="<?= base_url()?>index.php/admin/campus_life/school_activities">School Activities</a></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/campus_life/organization_club">Organizations / Clubs </a><i class="fa fa-play"></i></li>
		            <li ><a href="<?= base_url()?>index.php/admin/campus_life/excel">Excel</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/campus_life/supreme_student_government">Supreme Student Government</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/campus_life/news">News</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Organizations / Clubs</h3>
				<div class="row">
					<div class="col-md-10">
						<?php echo form_open_multipart('admin/campus_life/organization_club/save_text',array('id'=>'form-text-og' ,'data-toggle' => "validator", 'method' => "post")) ?>
							<div class="form-group">
		                        <center>
		                          <img class="img-prev" src="<?= base_url('plugins/images/profile.png')?>" style="width:180px;height:180px;border:1px solid #CCC"><br/><br />
		                        </center>
			                </div>
			                <div class="form-group">
			                    <input type="file" class="btn btn-block btn-primary" name="file" id="fileupload" accept="image/*">
			                </div>
							<div class="form-group">
								<label for="title" style="font-weight: normal;" class="c-gray">Organization Name</label>
								<input type="text" name="org_name" id="title" class="form-control" style="border-radius:0;">
								<input type="text" name="org_id" id="org_id" hidden>
							</div>
							<div class="form-group">
								<label for="content" style="font-weight: normal;" class="c-gray">Details</label>
								<textarea name="content" id="cont"></textarea>
							</div>
							<div class="form-group">
								<label class="btn btn-primary pull-right" id="btn-file">
					                Upload PDF File <input type="file" style="display: none;" name="files_data" accept="application/pdf">
					            </label>
								<button type="submit" class="btn  btn-primary pull-right" style="background-color:#0085b2;border-radius: 2px;padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</form>
					</div>
					<div class="col-md-14">
						<div class="col-md-24">
							<div class="row">
								<h4>List Of Organization</h4>
							</div>
							<div class="row" style="border:1px solid #CCC;">
								<div class="table-responsive" style="scroll:none;">
									<table id="otd-table" style="table-layout:fixed;width:100%;">
										<thead hidden><tr><th style="width: 100%;">asd</th></tr></thead>
										<tbody>
											<?php if(!empty($info)):?>
												<?php foreach($info as $key => $value):?>
													<tr>
														<td>
															<div class="col-md-24">
																<div style="border-bottom:1px solid #dfdfd0;padding-bottom:10px;margin-top:10px;">
																	<div class="row" style="border-left:20px solid #dfdfd0;margin-left:20px;">
																		<div class="col-md-24" style="padding-left:10px;word-wrap:break-word;">
																			<h3><?= ucwords($value->orgname)?></h3>
																			<div style="height:90px;white-space: nowrap; text-overflow: ellipsis; overflow: hidden;" class="ellip">
																				<?= $value->details; ?>
																			</div>
																			<a href="#" class="pull-right edit" style="margin-right:10px;" attr="<?= $value->org_id ?>">modify</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												<?php endforeach;?>
											<?php else: ?>	
												<tr>
													<td>
														<div class="col-md-24">
															<div style="border-bottom:1px solid #dfdfd0;padding-bottom:10px;margin-top:10px;">
																<div class="row" style="margin-left:20px;">
																	<div class="col-md-24" style="padding-left:10px;word-wrap:break-word;">
																		<center><h3>No Item Available</h3></center>
																	</div>
																</div>
															</div>
														</div>
													</td>
												</tr>
											<?php endif;?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
<?php $this->load->view("admin/campus_life/organization_club/jscripts"); ?>