<?php

/**
 * @Author: Gian
 * @Date:   2018-02-26 13:44:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 11:10:37
 */
$this->load->view("admin/research/institutional/jscripts");
?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li ><a href="<?= base_url()?>index.php/admin/research/capstone">Capstone</a><i class="fa fa-play"></i></li>
		            <li ><a href="<?= base_url()?>index.php/admin/research/thesis">Thesis</a></li>
		            <li><a href="<?= base_url()?>index.php/admin/research/case_studies">Case Studies</a><i class="fa fa-play"></i></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/research/institutional">Institutional</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/research/science_investigatory">Science Investigatory Project</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Institutional</h3>
				<div class="row">
					<div class="col-md-10">
						<?php echo form_open_multipart('admin/research/institutional/save_text',array('id'=>'form-text-ins' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
						  	<input type="text" name="ins_id" id="ins_id" hidden>
							<div class="form-group">
								<label for="title" style="font-weight: normal;" class="c-gray">Title</label>
								<input type="text" name="title" id="title" class="form-control" style="border-radius:0;" required>
							</div>
							<div class="form-group">
								<label for="title" style="font-weight: normal;" class="c-gray">Upload PDF</label>
								<input type="file" name="file" id="pdf" class="form-control" style="border-radius:0;" accept="application/pdf,application/vnd.ms-excel">
							</div>
							<div class="form-group">
								<label for="content" style="font-weight: normal;" class="c-gray">Content</label>
								<textarea name="content" id="cont"></textarea>
							</div>
							<div class="form-group">
								<label for="title" style="font-weight: normal;" class="c-gray">Date Published</label>
								<input type="date" name="date_published" id="date_published" class="form-control" style="border-radius:0;" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</form>
					</div>
					<div class="col-md-14">
						<div class="col-md-24">
							<div class="row">
								<h4>Institutional Title List</h4>
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
																			<h3><?= ucwords($value->title)?></h3>
																			<div style="height:90px;" class="ellip">
																				<?= $value->summary; ?>
																			</div>
																			<a href="#" class="pull-right edit" style="margin-right:10px;" attr="<?= $value->ins_id ?>">modify</a>
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