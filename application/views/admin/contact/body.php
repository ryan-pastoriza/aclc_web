<?php

/**
 * @Author: Gian
 * @Date:   2018-07-24 14:43:58
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-31 14:38:41
 */
$this->load->view('admin/contact/jscripts');
?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li class="active"><a href="<?= base_url()?>index.php/admin/contact_us/contact">Contact Us</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/contact_us/message">Message</a><i class="fa fa-play"></i></li>
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Contact Us</h3>
				<?php echo form_open_multipart('admin/contact_us/contact/save_contact_info',array('id'=>'form-cu' , 'data-toggle' => "validator", 'method' => "post")) ?>
					<div class="row">
						<div class="col-md-10">
							<input type="hidden" name="contact_id" id="contact_id" value="<?= $info->cont_info_id != '' ? $info->cont_info_id: ''?>">
							<div class="form-group">
								<label for="acivity-name" style="font-weight: normal;" class="c-gray">Location</label>
								<input type="text" name="location" id="location" class="form-control" value="<?= ($info->location != '' ? $info->location:''); ?>" style="border-radius:0;" required>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="date" style="font-weight: normal;" class="c-gray">Telephone No.</label>
										<input type="text" name="tel_no" id="tel_no" class="form-control" value="<?= ($info->tel_no != '' ? $info->tel_no:''); ?>" style="border-radius:0;" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="time" style="font-weight: normal;" class="c-gray">Fax No</label>
										<input type="text" name="fax_no" id="fax_no" class="form-control" value="<?= ($info->fax_no != '' ? $info->fax_no:''); ?>" style="border-radius:0;" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group">
									<label for="type" style="font-weight: normal;" class="c-gray">Email Address</label>
									<input type="email" name="email" id="email" class="form-control" value="<?= ($info->email_add != '' ? $info->email_add:''); ?>" style="border-radius:0;" required>
								</div>
							</div>	
							<div class="form-group">
								<label for="location" style="font-weight: normal;" class="c-gray">Detail</label>
								<textarea id="detail" name="detail" class="form-control" style="border-radius:0;resize:none;height:150px;" required><?= ($info->detail != '' ? $info->detail:''); ?></textarea>
							</div>
						</div>
						<div class="col-md-14">
							<div class="form-group">
								<label for="location" style="font-weight: normal;" class="c-gray">Embed Map Url</label>
								<textarea id="embed" name="map_url" class="form-control" style="border-radius:0;resize:none;height:372px;" required><?= ($info->map_url != '' ? $info->map_url:''); ?></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label for="type" style="font-weight: normal;" class="c-gray">MAP Preview</label>
							<iframe id="embed_map_preview" 
							src="<?= ($info->map_url != '' ? $info->map_url:''); ?>"
							style="width:100%;height:300px;border:1px solid #CCC;"
							frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</form>
			</div>
		</div>