<?php

/**
 * @Author: Gian
 * @Date:   2019-06-17 11:45:31
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-06-19 14:20:48
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACLC - Class Schedules</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url()?>plugins/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/css/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/css/styles.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
  <script src="<?= base_url()?>plugins/js/jquery.min.js"></script>
  <script src="<?= base_url()?>plugins/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/owl.carousel.js"></script>
  
</head>
<body>	
	<nav class="navbar box-edge no-margin">
	  <div class="container-fluid">
	  		<div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="fa fa-bars c-white f-30"></span>
		        <!-- <span class="icon-bar"></span>
		        <span class="icon-bar"></span>    -->                     
		      </button>
		      <a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url()?>plugins/images/logo.png" alt=""></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right pr-20">
		        <li><a href="<?= base_url()?>index.php/public/pre_registration" class="c-white f-12">Pre-Registration</a></li>
		        <li><a href="#" class="c-white f-12">Queueing</a></li>
		        <li><a href="#" class="c-white f-12">Careers</a></li>
		        <li><a href="#" class="c-white f-12">SIS</a></li>
		        <li><a href="#" class="c-white f-12">Alumni</a></li>
		        <li><a href="#" class="c-white f-12">Employee</a></li>
		        <li class="visible-xs">
		        	<ul class="nav navbar-nav pl-5">
		        		<li ><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
						<li ><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
						<li class="active"><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
						<li><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
						<li><a href="<?= base_url()?>index.php/public/research">Research</a></li>
						<li><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
						<li><a href="<?= base_url()?>index.php/public/contact_us">Contact Us</a></li>
		        	</ul>
		        </li>
		      </ul>	      
		    </div>
	  </div>
	</nav>
	<nav class="main-nav hidden-xs mb-10">
		<div class="container">
			<ul class="center-text inline-block">
				<li ><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
				<li ><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
				<li class="active"><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
				<li><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
				<li><a href="<?= base_url()?>index.php/public/research">Research</a></li>
				<li><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
				<li><a href="<?= base_url()?>index.php/public/contact_us">Contact Us</a></li>
			</ul>
		</div>
	</nav>	


	<div class="main-content">
		<div class="container-fluid" style="width:90%;">
			
			<div class="admission-main mb-30">
				<div class="row">
					<div class="col-md-4 pr-0">
						<div class="admission-leftpane bg-white">
							<div class="head-blue ptb-10 bg-blue"></div>
							<ul>
								<li><a href="<?= base_url()?>index.php/public/sis/personal_profile">Personal Profile</a></i></li>
								<li class="active"><a href="<?= base_url()?>index.php/public/sis/transcript_of_records">Transcript of Records</a></i></li>
								<li><a href="<?= base_url()?>index.php/public/sis/class_schedules">Class Schedules</a></i></li>
								<li><a href="<?= base_url()?>index.php/public/sis/ledgers">Ledgers</a></i></li>
								<li><a href="<?= base_url()?>index.php/public/sis/grades">Grades</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/sis/clearance">Clearance</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/sis/prospectus">Prospectus</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/sis/school_calendar">School Calendar</a><i class="fa fa-play"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-20 pr-0">
						<div class="activity-sched bg-white ptb-15">
							<div class="calendar-activity oh mb-30">
								<div class="head oh bb pb-10">
									<h3 class="normal c-gray f-20 mb-10 pull-left">Details</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-24">
									<?php $arr = [
													"First Year - First Semester",
													"First Year - Second Semester",
													"Second Year - First Semester",
													"Second Year - Second Semester",
													"Third Year - First Semester",
													"Third Year - Second Semester",
													"Fourth Year - First Semester",
													"Fourth Year - Second Semester",
												]; 
									?>
									<div class="panel-group">
										<div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        Academic Year : 2014-2015 &nbsp;&nbsp;&nbsp; Semester: 1st <a data-toggle="collapse" href="#collapse1" class="pull-right"><span class="glyphicon glyphicon-chevron-down"></span></a>
										      </h4>
										    </div>
										    <div id="collapse1" class="panel-collapse collapse in">
										      <div class="panel-body">
										      	<table style="width:100%;" class="table table-bordered">
										      		<thead>
										      			<tr>
										      				<th style="text-align:center;background-color:#f0f0e1;width:100px;">Subject Code</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Subject</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Type</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Room</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Day</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Time</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Instructor</th>
										      			</tr>
										      		</thead>
										      		<tbody >
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      		</tbody>
										      	</table>
										      </div>
										    </div>
										</div>
									</div>
									<div class="panel-group">
										<div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        Academic Year : 2013-2014 &nbsp;&nbsp;&nbsp; Semester: 2nd <a data-toggle="collapse" href="#collapse2" class="pull-right"><span class="glyphicon glyphicon-chevron-down"></span></a>
										      </h4>
										    </div>
										    <div id="collapse2" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<table style="width:100%;" class="table table-bordered">
										      		<thead>
										      			<tr>
										      				<th style="text-align:center;background-color:#f0f0e1;width:100px;">Subject Code</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Subject</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Type</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Room</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Day</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Time</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Instructor</th>
										      			</tr>
										      		</thead>
										      		<tbody >
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      		</tbody>
										      	</table>
										      </div>
										    </div>
										</div>
									</div>
									<div class="panel-group">
										<div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        Academic Year : 2013-2014 &nbsp;&nbsp;&nbsp; Semester: 1st <a data-toggle="collapse" href="#collapse3" class="pull-right"><span class="glyphicon glyphicon-chevron-down"></span></a>
										      </h4>
										    </div>
										    <div id="collapse3" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<table style="width:100%;" class="table table-bordered">
										      		<thead>
										      			<tr>
										      				<th style="text-align:center;background-color:#f0f0e1;width:100px;">Subject Code</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Subject</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Type</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Room</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Day</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Time</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Instructor</th>
										      			</tr>
										      		</thead>
										      		<tbody >
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      		</tbody>
										      	</table>
										      </div>
										    </div>
										</div>
									</div>
									<div class="panel-group">
										<div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        Academic Year : 2012-2013 &nbsp;&nbsp;&nbsp; Semester: 2nd <a data-toggle="collapse" href="#collapse4" class="pull-right"><span class="glyphicon glyphicon-chevron-down"></span></a>
										      </h4>
										    </div>
										    <div id="collapse4" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<table style="width:100%;" class="table table-bordered">
										      		<thead>
										      			<tr>
										      				<th style="text-align:center;background-color:#f0f0e1;width:100px;">Subject Code</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Subject</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Type</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Room</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Day</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Time</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Instructor</th>
										      			</tr>
										      		</thead>
										      		<tbody >
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      		</tbody>
										      	</table>
										      </div>
										    </div>
										</div>
									</div>
									<div class="panel-group">
										<div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        Academic Year : 2012-2013 &nbsp;&nbsp;&nbsp; Semester: 1st <a data-toggle="collapse" href="#collapse5" class="pull-right"><span class="glyphicon glyphicon-chevron-down"></span></a>
										      </h4>
										    </div>
										    <div id="collapse5" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<table style="width:100%;" class="table table-bordered">
										      		<thead>
										      			<tr>
										      				<th style="text-align:center;background-color:#f0f0e1;width:100px;">Subject Code</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Subject</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Type</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Room</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Day</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Time</th>
										      				<th style="text-align:center;background-color:#f0f0e1;">Instructor</th>
										      			</tr>
										      		</thead>
										      		<tbody >
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      			<tr>
										      				<td>GE0210</td>
										      				<td>Filipino 1</td>
										      				<td>Lecture</td>
										      				<td>RM101</td>
										      				<td>MWF</td>
										      				<td>09:00AM - 10:00AM</td>
										      				<td>Prof Juan B. Dela Cruz</td>
										      			</tr>
										      		</tbody>
										      	</table>
										      </div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			<footer>
				<div class="links bbw pb-15 mb-15">
					<div class="row">
						<div class="col-md-4">
							<h4>ACADEMICS</h4>
							<ul>
								<li><a href="">Academic Calendar</a></li>
								<li><a href="">Programs</a></li>
								<li><a href="">The Registrar</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>Offices & Resources</h4>
							<ul>
								<li><a href="">Academics</a></li>
								<li><a href="">Administration</a></li>
								<li><a href="">OSAS</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>RESEARCH</h4>
							<ul>
								<li><a href="">Capstone</a></li>
								<li><a href="">Thesis</a></li>
								<li><a href="">Institutional</a></li>
							</ul>
						</div>
						<div class="col-md-5">
							<h4>Tuition & Financial Aid</h4>
							<ul>
								<li><a href="">Payment Guidelines</a></li>
								<li><a href="">Payment Centers</a></li>
								<li><a href="">Refund</a></li>
								<li><a href="">Family Discount</a></li>
								<li><a href="">Scholarship and Financial Aid</a></li>
								<li><a href="">Scholarship Application Process</a></li>
								<li><a href="">Student Assistantship</a></li>
								<li><a href="">Student Loan</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>News & Publications</h4>
							<ul>
								<li><a href="">Latest News</a></li>
								<li><a href="">The Gold Panicles</a></li>
								<li><a href="">Annual Accomplishment Reports</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h4>LINKAGES</h4>
							<ul>
								<li><a href="">CHED-Caraga</a></li>
								<li><a href="">CCARRD</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer oh">
					<div class="pull-left left">
						<p class='f-10 c-lgray mb-10'>© 2014 EngTech Global Solutions Inc. All Rights Reserved. Terms of Use</p>
						<ul class="inline-block f-11">
							<li><a href="">Privacy</a></li>
							<li><a href="">Governance</a></li>
							<li><a href="">Employee</a></li>
							<li><a href="">Login</a></li>
							<li><a href="">Site Map</a></li>
						</ul>
					</div>
					<div class="pull-right right">
						<ul class="inline-block">
							<li><a href="" class="fa fa-cloud"></a></li>
							<li><a href="" class="fa fa-html5"></a></li>
							<li><a href="" class="fa fa-dropbox"></a></li>
							<li><a href="" class="fa fa-facebook-f"></a></li>
							<li><a href="" class="fa fa-wordpress"></a></li>
							<li><a href="" class="fa fa-linkedin"></a></li>
							<li><a href="" class="fa fa-twitter"></a></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>