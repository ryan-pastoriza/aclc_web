<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 10:16:30
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-28 09:31:50
 */
?>
<div class="container-fluid">
    <div class="row">
    	<div class="col-md-24">
			<div class="mid-content ptb-10 bg-white oh">
				<h3 class="normal c-gray f-20 bb" style="border-bottom:none;padding-top:10px;">Pre-Registration Dashboard</h3>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-24">
			<div class="row">
				<!-- <div class="col-md-6">
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
				</div> -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-24">
							<div class="mid-content ptb-10 bg-white oh c-gray normal bb">
								<h5>Enrollees Per Sem</h5>
							</div>
						</div>
					</div>
					<div class="row" >
						<div class="col-md-24" >
							<div class="mid-content ptb-10  oh c-gray normal bb bg-white">
								<canvas id="myChart" width="500" height="200"></canvas>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
