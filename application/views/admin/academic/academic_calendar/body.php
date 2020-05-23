<?php $this->load->view("admin/academic/academic_calendar/jscripts"); ?>
<div class="container-fluid">
    <div class="row">
      	<div class="col-md-4 pr-0">
        	<div class="admission-leftpane bg-white">
          		<div class="head-blue ptb-10 bg-blue"></div>
      			<ul>
        			<li class="active"><a href="<?= base_url()?>index.php/admin/academics/academic_calendar">Academic Calendar</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/academics/programs">Programs</a><i class="fa fa-play"></i></li>
		            <li><a href="<?= base_url()?>index.php/admin/academics/scholarships">Scholarship</a><i class="fa fa-play"></i></li>
		            
      			</ul>
        	</div>
    	</div>

    	<div class="col-md-20">
			<div class="mid-content ptb-15 bg-white oh">
				<h3 class="normal c-gray f-20 mb-15 bb pb-10">Academic Calendar</h3>
				<div class="row">
					<div class="col-md-10">
						<?php echo form_open_multipart('admin/academics/academic_calendar/save_calendar',array('id'=>'form-ac' , 'data-toggle' => "validator", 'method' => "post")) ?>
							<input type="hidden" name="accal_id" id="accal_id">
							<div class="form-group">
								<label for="acivity-name" style="font-weight: normal;" class="c-gray">Activity Name</label>
								<input type="text" name="act_name" id="acivity-name" class="form-control" style="border-radius:0;" required>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="date" style="font-weight: normal;" class="c-gray">Start Date</label>
										<input type="date" name="sdate" id="date" class="form-control" style="border-radius:0;" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="time" style="font-weight: normal;" class="c-gray">Start Time</label>
										<input type="time" name="stime" id="time" class="form-control" style="border-radius:0;" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="date" style="font-weight: normal;" class="c-gray">End Date</label>
										<input type="date" name="edate" id="date" class="form-control" style="border-radius:0;" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="time" style="font-weight: normal;" class="c-gray">End Time</label>
										<input type="time" name="etime" id="time" class="form-control" style="border-radius:0;" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group">
									<label for="type" style="font-weight: normal;" class="c-gray">Department</label>
									<select name="department" class="form-control" select="selected">
										<option value="Computer Education Department">Computer Education Department</option>
										<option value="Business Administration Department">Business Administration Department</option>
										<option value="General Education Department">General Education Department</option>
									</select>
								</div>
							</div>	
							<div class="form-group">
								<label for="location" style="font-weight: normal;" class="c-gray">Location</label>
								<input type="text" name="location" id="location" class="form-control" style="border-radius:0;" required>
							</div>
							<div class="form-group">
								<label for="type" style="font-weight: normal;" class="c-gray">Type</label>
								<select name="type" class="form-control" select="selected">
									<option value="">Select</option>
									<option value="one day">1 day</option>
									<option value="more than">More than 1 day</option>
								</select>
							</div>
							<div class="form-group">
								<label style="font-weight: normal;" class="c-gray">Detail</label>
								<textarea name="content" id="cont"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Save</button>
							</div>
						</form>
					</div>
					<div class="col-md-14">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
		</div>