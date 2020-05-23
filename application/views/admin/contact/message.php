<?php

/**
 * @Author: Gian
 * @Date:   2018-07-30 11:19:41
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-30 11:53:00
 */
$this->load->view('admin/contact/jscripts');
?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li ><a href="<?= base_url()?>index.php/admin/contact_us/contact">Contact Us</a><i class="fa fa-play"></i></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/contact_us/message">Message</a><i class="fa fa-play"></i></li>
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Academic Calendar</h3>
				<?php echo form_open_multipart('admin/contact_us/contact/save_contact_info',array('id'=>'form-cu' , 'data-toggle' => "validator", 'method' => "post")) ?>
					<div class="row">
						<div class="col-md-10">
							<input type="hidden" name="contact_id" id="contact_id">
							<div class="form-group">
								<label for="location" style="font-weight: normal;" class="c-gray">Reply</label>
								<textarea id="detail" name="detail" class="form-control" style="border-radius:0;resize:none;height:150px;" required></textarea>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="date" style="font-weight: normal;" class="c-gray">Reply will send to</label>
										<input type="text" name="tel_no" id="tel_no" class="form-control" style="border-radius:0;" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="date" style="font-weight: normal;" class="c-gray">&nbsp;</label>
										<input type="email" name="email" id="email" class="form-control" style="border-radius:0;" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Send</button>
							</div>							
						</div>
						<div class="col-md-14">
							<div class="form-group">
								<label for="location" style="font-weight: normal;" class="c-gray">Message Receive</label>
								<div class="row">
									<div class="table-responsive">
										<table id="otd-msg" class="table table-bordered" style="width:100%;">
											<thead>
												<tr>
													<td style="text-align:center;width:60%;">Message</td>	
													<td style="text-align:center;">Email</td>	
													<td style="text-align:center;width:10%:">Action</td>	
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
