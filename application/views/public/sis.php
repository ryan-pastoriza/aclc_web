<?php

/**
 * @Author: Gian
 * @Date:   2019-05-06 09:35:38
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-05-20 10:26:32
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACLC - Personal Information</title>
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
  			
  			if($(this).val() == "college"){
  				$('#sh-form').addClass('hidden');
  				$('#college-form').removeClass('hidden');
  			}else{
  				$('#sh-form').removeClass('hidden');
  				$('#college-form').addClass('hidden');
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
					<div class="col-md-4 pr-0">
						<div class="admission-leftpane bg-white">
							<div class="head-blue ptb-10 bg-blue"></div>
							<ul>
								<li  class="active"><a href="<?= base_url()?>index.php/public/personal_information">Personal Profile</a></i></li>
								<li ><a href="<?= base_url()?>index.php/public/research/rmrj">Transcript of Records</a></i></li>
								<li ><a href="<?= base_url()?>index.php/public/research/research_excel_news">Class Records</a></i></li>
								<li ><a href="<?= base_url()?>index.php/public/research">Ledgers</a></i></li>
								<li><a href="<?= base_url()?>index.php/public/thesis">Grades</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/research_case_study">Clearance</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/research_institutional">Prospectus</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/research/science_investigatory">School Calendar</a><i class="fa fa-play"></i></li>
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
							<div class="row" style="padding-bottom:25px;">
								<div class="col-md-24">
									<div class="col-md-4">
										<img src="<?= base_url()?>plugins/images/school_director/10.jpg" alt="" style="width:200px;height:200px;">
									</div>
									<div class="col-md-20">
										<div class="row">
											<h4>Alan L. Atega</h4>
											<span>Bachelor of Science in Computer Science</span>
											<p>
												Student ID No:<span> 12-33-01-0012</span> &nbsp;&nbsp; Year : <span>4th Year</span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<form>
								<div class="row personal-info">
									<h5 style="font-weight: italic;">Personal Information</h5>
									<hr style="margin-top:-5px;" />
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
											    <label for="">Gender</label>
											    <span class="form-control" style="border:none;">Male</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Birth Date</label>
											    <span class="form-control" style="border:none;">September 10, 1993</span>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group">
											    <label for="">Age</label>
											    <span class="form-control" style="border:none;">19</span>
											</div>
										</div>
										<div class="col-md-13">
											<div class="form-group">
												<label for="">Birth Place</label>
												<span class="form-control" style="border:none;">MJ Santos Hospital, Montilla Blvd., Butuan City, Agusan Del Norte</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Nationality</label>
											    <span class="form-control" style="border:none;">Filipino</span>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
											    <label for="">Marital Status</label>
											    <span class="form-control" style="border:none;">Divorce</span>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
											    <label for="">Mobile #</label>
											    <span class="form-control" style="border:none;">09123456789</span>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label for="">Telephone #</label>
												<span class="form-control" style="border:none;">815-5299</span>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label for="">Email</label>
												<span class="form-control" style="border:none;">dondelrosario@gmail.com</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label for="">Religion</label>
												<span class="form-control" style="border:none;">Roman Catholic</span>
											</div>
										</div>
										<div class="col-md-19">
											<div class="form-group">
												<label for="">Language</label>
												<span class="form-control" style="border:none;">Portuguese, Tagalog, English, French, Bahasa, Mandarin, Nijongo, Cantonese, Hindi</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-24">
											<div class="form-group">
												<label for="">Present Address</label>
												<span class="form-control" style="border:none;">Blk 24, 22 St. Libertad Butuan City, Agusan Del Norte</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-24">
											<div class="form-group">
												<label for="">Permanent Address</label>
												<span class="form-control" style="border:none;">Blk 24, 22 St. Libertad Butuan City, Agusan Del Norte</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row family">
									<h5 style="font-weight: italic;">Family</h5>
									<hr style="margin-top:-5px;" />
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Father</label>
											    <span class="form-control" style="border:none;">Liam J. Del Rosario</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Mobile No.</label>
											    <span class="form-control" style="border:none;">0910452235421</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Telephone No.</label>
											    <span class="form-control" style="border:none;">342 - 2245 / 825 - 2321</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											    <label for="">Address</label>
											    <span class="form-control" style="border:none;">Blk 24, 22 St. Lbibertad Butuan City, Agusan Del Norte</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Occupation</label>
											    <span class="form-control" style="border:none;">Google Company</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Designation</label>
											    <span class="form-control" style="border:none;">Chef Operating Officer</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Company Address</label>
											    <span class="form-control" style="border:none;">San Diego California, United States of America</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											    <label for="">Office Telephone No</label>
											    <span class="form-control" style="border:none;">825 - 2321</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Mother</label>
											    <span class="form-control" style="border:none;">Angelina B. Julie</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Mobile No.</label>
											    <span class="form-control" style="border:none;">0910452235421</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Telephone No.</label>
											    <span class="form-control" style="border:none;">342 - 2245 / 825 - 2321</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											    <label for="">Address</label>
											    <span class="form-control" style="border:none;">Blk 24, 22 St. Lbibertad Butuan City, Agusan Del Norte</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Occupation</label>
											    <span class="form-control" style="border:none;">Google Company</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Designation</label>
											    <span class="form-control" style="border:none;">Chef Operating Officer</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Company Address</label>
											    <span class="form-control" style="border:none;">San Diego California, United States of America</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											    <label for="">Office Telephone No</label>
											    <span class="form-control" style="border:none;">825 - 2321</span>
											</div>
										</div>
									</div>
								</div>

								<div class="row education">
									<h5 style="font-weight: italic;">Education </h5>
									<hr style="margin-top:-5px;" />
									<div class="row">
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">Elementary</label>
											    <span class="form-control" style="border:none;">Infant Cheri Elementary School</span>
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">Address</label>
											    <span class="form-control" style="border:none;">Doongan, Butuan City, Philippines</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Honor</label>
											    <span class="form-control" style="border:none;">1ST</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">High School</label>
											    <span class="form-control" style="border:none;">Timber City Academy</span>
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">Address</label>
											    <span class="form-control" style="border:none;">Montilla Blvd., Butuan City Philippines</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Honor</label>
											    <span class="form-control" style="border:none;">Valedictorian</span>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">College</label>
											    <span class="form-control" style="border:none;">
											    	AMA Computer Learning Center College of Butuan
													<p><a>Bachelor of Science in Computer Science</a></p>
											    </span>
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">Address</label>
											    <span class="form-control" style="border:none;">HDS Building J.C Aquino Avenue, Butuan City</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Honor</label>
											    <span class="form-control" style="border:none;">Comlaude</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">Masters</label>
											    <span class="form-control" style="border:none;">
											    	AMA Computer Learning Center College of Butuan
											    	<p><a>Masters Of Science in Computer Science</a></p>
											    </span>

											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
											    <label for="">Address</label>
											    <span class="form-control" style="border:none;">
											    	HDS Building J.C Aquino Avenue, Butuan City
											    </span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label for="">Honor</label>
											    <span class="form-control" style="border:none;">1ST</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row eligibility">
									<h5 style="font-weight: italic;">Eligibility </h5>
									<hr style="margin-top:-5px;" />
									<div class="row">
										<div class="col-md-24">
											<table class="table table-condense">
												<thead>
													<tr>
														<th>Eligibilities</th>
														<th>Rank</th>
														<th>Upload Certificate</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Civil Service Passer</td>
														<td>1ST</td>
														<td><a href="#">Preview</a></td>
													</tr>
													<tr>
														<td>Electronic Data Processing Specialist (EDPS)</td>
														<td>1ST</td>
														<td><a href="#">Preview</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row eligibility">
									<h5 style="font-weight: italic;">Work Experience </h5>
									<hr style="margin-top:-5px;" />
									<div class="row">
										<div class="col-md-24">
											<table class="table table-condense">
												<thead>
													<tr>
														<th>Company</th>
														<th>Designation</th>
														<th>Location</th>
														<th>Years Duration</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Enterprise Bank Incorporate</td>
														<td>Senior Programmer</td>
														<td>J.C Aquino Ave., Butuan City, Philippines</td>
														<td>2007 - 2010</td>
													</tr>
													<tr>
														<td>Macintosh Software Development Company</td>
														<td>Senior Programmer</td>
														<td>San Andreas, California USA</td>
														<td>2005 - 2006</td>
													</tr>
													<tr>
														<td>Accenture Venture</td>
														<td>Software Engineer</td>
														<td>Makati City, Philippines</td>
														<td>2004 - 2005</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</form>
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