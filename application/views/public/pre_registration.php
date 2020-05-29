<?php

/**
 * @Author: Gian
 * @Date:   2019-04-29 09:07:44
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-05-03 16:54:46
 */
?>
<html lang="en">
<head>
  <title>ACLC</title>
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
  <script>
  	$(function(){
  		$(document).on('change','.stud-type',function(e){
			stat = $('input[name="status"]:checked').val();
  			if($(this).val() == "college"){
  				$('.sh_form').addClass('hidden');
				$('.college_form').removeClass('hidden');
  				if( ["New","Old","Returnee"].includes(stat) ){
  					$('.transferee_college').addClass('hidden');
  				}else{
  					$('.new_college').addClass('hidden');
  				}
  			}else{
  				$('.sh_form').removeClass('hidden');
  				$('.college_form').addClass('hidden');
  			}

  		})
  		$(document).on('change','.stud-stat',function(e){
  			if(["New","Old","Returnee"].includes($(this).val()) && $('.stud-type').val() == "college"){
  				$('.transferee_college').addClass('hidden');
  				$('.new_college').removeClass('hidden');
  			}else if($(this).val() == 'Transferee' &&  $('.stud-type').val() == "college"){
  				$('.transferee_college').removeClass('hidden');
  				$('.new_college').addClass('hidden');
  			}
  		})
  	})
  </script>
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
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-24 pr-0" style="margin-top: 10px;">
								<div class="activity-sched bg-white ptb-15">
									<div class="calendar-activity oh mb-30">
										<div class="head oh bb pb-10">
											<div class="col-md-24">
												<h4 class="normal c-gray f-20 mb-10 pull-left">Payment Attachment</h4>
											</div>
										</div>
									</div>
									<div class="row">
										<p style="color: red;">To proceed please prepare and Entrance Fee of 3,200.00. Pay to nearest PALAWAN, LHUILLIER, or CEBUANA LHUILLIER in your area and sent to JOVANIE P. ECLEO Cellphone# 0909-613-3719</p>
										<h5 style="color: red;">Please take a clear picture of the MONEY TRANSFER RECEIPT and upload it here. </h5>
										<div class="reg_form-parts" >
											<input type="file" form="reg_form" name="pay_attach" value="Upload Requirements" class="pull-left" required>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-24 pr-0" style="margin-top: 10px;">
								<div class="activity-sched bg-white ptb-15">
									<div class="calendar-activity oh mb-30">
										<div class="head oh bb pb-10">
											<div class="col-md-24">
												<h4 style="font-weight:normal;">Admission Requirements</h4>
											</div>
										</div>
									</div>
									<div class="row">
										<p style="color: red; ">Check if present and upload image</p>
										<div class="new_college college_form">
											<div class="row">
												<div class="col-md-offset-2 col-md-32">
													<input type="checkbox" name="seniorhighcard" form="reg_form"> Senior High School Card (Form 138-A)
												</div>
											</div>
											<div class="row">
												<div class="col-md-offset-2 col-md-32">
													<input type="checkbox" name="brown_enve" form="reg_form"> 1 Long Brown Envelope
												</div>
											</div>
										</div>
										<div class="transferee_college college_form hidden">
											<div class="row">
												<div class="col-md-offset-2 col-md-32">
													<input type="checkbox" name="tor" form="reg_form"> Transcript of Records
												</div>
											</div>
											<div class="row">
												<div class="col-md-offset-2 col-md-32">
													<input type="checkbox" name="honorable_dismissal" form="reg_form"> Honorable Dismissal
												</div>
											</div>
										</div>
										<div class="sh_form hidden">
											<div class="row">
												<div class="col-md-offset-2 col-md-32">
													<input type="checkbox" name="juniorhighcard" form="reg_form"> Junior High School Card(Form 138)
												</div>
											</div>
											<div class="row">
												<div class="col-md-offset-2 col-md-32">
													<input type="checkbox" name="ncae" form="reg_form"> NCAE Result
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-offset-2 col-md-32">
												<input type="checkbox" name="gmc" form="reg_form"> Good Moral Character Certificate
											</div>
										</div>
										<div class="row">
											<div class="col-md-offset-2 col-md-32">
												<input type="checkbox" name="birthcert" form="reg_form"> 2 Photocopies of NSO Birth Certificate
											</div>
										</div>

										<div class="row">
											<input type="file" multiple="multiple" form="reg_form" name="admission_req[]" value="Upload Requirements" class="pull-left">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-20 pr-0" style="margin-top: 10px">
						<div class="activity-sched bg-white ptb-15">
							<div class="calendar-activity oh mb-30">
								<div class="head oh bb pb-10">
									<div class="col-md-24">
										<h3 class="normal c-gray f-20 mb-10 pull-left">Pre - Registration</h3>
									</div>
									<div class="col-md-16">
									   	<div class="col-md-12">
									   	 	<select name="type" form="reg_form" class="form-control stud-type" style="border-radius:0px">
												<option value="college">College &nbsp;&nbsp;&nbsp;&nbsp;</option>
												<option value="seniorhigh">Senior High &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
											</select>
									   	</div>
									   	<div class="col-md-12">
									   		<input type="radio" form="reg_form" name="status" class="stud-stat" value="New" style="width:30px;" checked>New
									   		<input type="radio" form="reg_form" name="status" class="stud-stat" value="Transferee">Transferee
									   		<input type="radio" form="reg_form" name="status" class="stud-stat" value="Old">Old
									   		<input type="radio" form="reg_form" name="status" class="stud-stat" value="Returnee">Returnee
									   	</div>
									</div>
								</div>
							</div>
							<div class="row">
								<form action="<?= base_url('index.php/public/pre_registration/register');?>" id="reg_form" class="form-horizontal" data-toggle="validator" method="post" enctype="multipart/form-data" accept-charset="utf-8">
									
									<div class="col-md-24">
										<div class="form-group">
										    <label for="course" class="c-gray" style="font-weight:normal;">Course</label>
										    <select name="course" class="form-control" id="course" style="margin-top:-6px;">
										    	<option class="college_form" disabled>--------4 Year Degree Course--------</option>
										    	<option class="college_form" value="BSBA - FM">BSBA - Financial Management</option>
										    	<option class="college_form" value="BSBA - MM">BSBA - Marketing Management</option>
										    	<option class="college_form" value="BSCS">BS Computer Science</option>
										    	<option class="college_form" value="BSIT">BS Information Technology</option>
										    	<option class="college_form" disabled>--------3 Year Diploma Program--------</option>
										    	<option class="college_form" value="3YD-CT">3 Year Diploma Progam in Computer Technology</option>
										    	<option class="college_form" value="3YD-ICT">3 Year Diploma Progam in Information and Communication Technology</option>
										    	<option class="college_form" value="3YD-SADT">3 Year Diploma Progam in Software Application & Development Technology</option>
										    	<option class="college_form" value="3YD-TCST">3 Year Diploma Progam in Telecommunications & Computer Servicing Technology</option>
										    	<option class="sh_form hidden" value="STEM">STEM</option>
										    	<option class="sh_form hidden" value="GAS">GAS</option>
										    	<option class="sh_form hidden" value="ABM">ABM</option>
										    	<option class="sh_form hidden" value="TVL - ICT CSS">TVL - ICT CSS</option>
										    </select>
										</div>
									</div>
									<h5 class="c-gray" style="font-weight: bold;margin-left:15px;margin-top:-10px;">Personal Information</h5>
								
									<div class="row">
										<div class="col-md-7">
											<div class="form-group">
											    <label for="first_name" class="c-gray" style="font-weight:normal;">First Name</label>
											    <input type="text" class="form-control" id="first_name" name="first_name" style="margin-top:-6px;" required>
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
											    <label for="middle_name" class="c-gray" style="font-weight:normal;">Middle Name</label>
											    <input type="text" class="form-control" id="middle_name" name="middle_name" style="margin-top:-6px;">
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
											    <label for="last_name" class="c-gray" style="font-weight:normal;">Last Name</label>
											    <input type="text" class="form-control" id="last_name" name="last_name" style="margin-top:-6px;" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											    <label for="suffix" class="c-gray" style="font-weight:normal;">Suffix</label>
											    <input type="text" class="form-control" id="suffix" name="suffix" style="margin-top:-6px;">
											</div>
										</div>
									</div>
									<div class="row">
										<ul style="display:flex !important;align-items: center;margin-top:-10px;width:100%;">
											<li class="c-gray col-md-24" style="font-weight: bold;margin-left:10px; margin-right:10px;">
												Biographical History
											</li>
										</ul>
										<hr>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="date_of_birth" class="c-gray" style="font-weight:normal;">Birth Date</label>
											    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" style="margin-top:-6px;" required>
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="gender" class="c-gray" style="font-weight:normal;">Gender</label>
											    <select name="gender" class="form-control" id="gender" style="margin-top:-6px;">
											    	<option value="male">Male</option>
											    	<option value="female">Female</option>
											    </select>
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="marital_status" class="c-gray" style="font-weight:normal;">Marital Status</label>
											    <select name="marital_status" class="form-control" id="marital_status" style="margin-top:-6px;">
											    	<option value="Single">Single</option>
											    	<option value="Married">Married</option>
											    	<option value="Legally Separated">Legally Separated</option>
											    </select>
											</div>
										</div>
										<div class="col-md-16">
											<div class="form-group">
											    <label for="last_school_attended" class="c-gray" style="font-weight:normal;">Last School Attended</label>
											    <input type="text" class="form-control" id="last_school_attended" name="last_school_attended" style="margin-top:-6px;" required>
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="last_school_attended_year" class="c-gray" style="font-weight:normal;">Last School Attended Year</label>
											    <input type="text" class="form-control" id="last_school_attended_year" name="last_school_attended_year" style="margin-top:-6px;" required>
											</div>
										</div>
									</div>
									<div class="row">
										<hr>
										<ul style="display:flex !important;align-items: center;margin-top:-10px;width: 100%;">
											<li class="c-gray col-md-24" style="font-weight: bold;margin-left:10px; margin-right:10px;">
												Contact Information
											</li>
										</ul>
										<hr>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="street_purok" class="c-gray" style="font-weight:normal;">Street/Purok</label>
											    <input type="text" class="form-control" id="street_purok" name="street_purok" style="margin-top:-6px;">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="barangay" class="c-gray" style="font-weight:normal;">Barangay</label>
											    <input type="text" class="form-control" id="barangay" name="barangay" style="margin-top:-6px;">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
											    <label for="municipality" class="c-gray" style="font-weight:normal;">Municipality</label>
											    <input type="text" class="form-control" id="municipality" name="municipality" style="margin-top:-6px;">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-10">
											<div class="form-group">
											    <label for="city" class="c-gray" style="font-weight:normal;">City</label>
											    <input type="text" class="form-control" id="city" name="city" style="margin-top:-6px;">
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
											    <label for="province" class="c-gray" style="font-weight:normal;">Province</label>
											    <input type="text" class="form-control" id="province" name="province" style="margin-top:-6px;">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="postalcode" class="c-gray" style="font-weight:normal;">Postal Code</label>
											    <input type="text" class="form-control" id="postalcode" name="postalcode" style="margin-top:-6px;">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											    <label for="phone" class="c-gray" style="font-weight:normal;">Phone Number</label>
											    <input type="text" class="form-control" id="phone" name="phone" style="margin-top:-6px;" required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											    <label for="email" class="c-gray" style="font-weight:normal;">Email Address</label>
											    <input type="text" class="form-control" id="email" name="email" style="margin-top:-6px;" required>
											</div>
										</div>
									</div>
									<div class="row">
										<!-- <button class="btn btn-danger pull-right" style="margin-right:5px;">Cancel</button> -->
										<!-- <button class="btn btn-warning pull-right" style="margin-right:5px;">Save &amp; Queue</button> -->
										<!-- <button class="btn btn-success pull-right" style="margin-right:5px;">Register</button> -->
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<div class="row">

					<div class="col-md-24 pr-0" style="margin-top: 10px;">
						<div class="activity-sched bg-white ptb-15">
							<!-- <div class="calendar-activity oh mb-30"> -->
								<div class="head oh ">
									<div class="col-md-24">
										<button form="reg_form" class="btn btn-success pull-right" style="margin-right:5px;">Register</button>
									</div>
								<!-- </div> -->
							<!-- </div> -->
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