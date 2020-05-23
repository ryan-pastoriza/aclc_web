<?php

/**
 * @Author: Gian
 * @Date:   2018-02-21 11:02:59
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-07 08:04:35
 */

?>
<?php $this->load->view("admin/academic/programs/jscripts"); ?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li ><a href="<?= base_url()?>index.php/admin/academics/academic_calendar">Academic Calendar</a><i class="fa fa-play"></i></li>
		            <li class="active"><a href="<?= base_url()?>index.php/admin/academics/programs">Programs</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/academics/scholarships">Scholarship</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Programs</h3>
				<div class="row">
					<div class="col-md-24">
						<?php echo form_open_multipart('admin/academics/programs/save_text',array('id'=>'form-text-p' , 'class' => 'form-horizontal', 'data-toggle' => "validator", 'method' => "post")) ?>
			              	<input type="text" name="prog_id" hidden value="<?= !empty($info->prog_id) ? $info->prog_id : '' ?> ">
			              	<textarea name="content"><?= !empty($info->detail) ? $info->detail : ''?></textarea>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>