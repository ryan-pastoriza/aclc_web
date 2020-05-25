<!DOCTYPE html>
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
		      <a class="navbar-brand" href="<?= base_url()?>""><img src="<?= base_url()?>plugins/images/logo.png" alt=""></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right pr-20">
        		<li><a href="<?= base_url()?>index.php/public/pre_registration">Pre-Registration</a></li>
		        <!-- <li><a href="" class="c-white f-12">Pre-Registration</a></li> -->
		        <li><a href="#" class="c-white f-12">Queueing</a></li>
		        <li><a href="#" class="c-white f-12">Careers</a></li>
		        <li><a href="#" class="c-white f-12">SIS</a></li>
		        <li><a href="#" class="c-white f-12">Alumni</a></li>
		        <li><a href="#" class="c-white f-12">Employee</a></li>
		        <li class="visible-xs">
		        	<ul class="nav navbar-nav pl-5">
		        		<li><a href="#">About Us</a></li>
						<li><a href="#">Admission</a></li>
						<li><a href="#">Academics</a></li>
						<li><a href="#">Offices & Resources</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Campus Life</a></li>
						<li><a href="#">Contact Us</a></li>
		        	</ul>
		        </li>
		      </ul>	      
		    </div>
	  </div>
	</nav>
	<nav class="main-nav hidden-xs mb-10">
		<div class="container">
			<ul class="center-text inline-block">
				<li><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
				<li><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
				<li><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
				<li><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
				<li><a href="<?= base_url()?>index.php/public/research">Research</a></li>
				<li><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
				<li><a href="<?= base_url()?>index.php/public/contact_us">Contact Us</a></li>
			</ul>
		</div>
	</nav>	


	<div class="main-content">
		<div class="container">
			<div class="main-carousel relative mb-10">
				<div class="owl-carousel owl-theme">
					<?php if(!empty($slide)):?>
						<?php foreach($slide as $key => $value):?>
							<div class="item">
				              <img src="<?= base_url($value->path)?>" class="img-responsive" alt="" style="height:500px;">
				            </div>
						<?php endforeach; ?>
					<?php else:?>
						<div class="item">
			              <img src="<?= base_url()?>plugins/images/no-image.jpg" class="img-responsive" alt="" style="height:500px;">
			            </div>
					<?php endif;?>
		         </div>
		         <div>
		         	<span class="left-nav fa fa-angle-left"></span>
		         	<span class="right-nav fa fa-angle-right"></span>
		         </div>
			</div>
			<div class="main-offers bg-white ptb-15 shadow mb-10">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="offer">
							<h3 class="normal c-ddgray f-20 mb-15">Testing & Admission</h3>
							<div class="oh">
								<img src="<?= base_url()?>plugins/images/offers/1.png" class="pull-left mr-15" alt="">
								<ul class="oh ml-10 c-gray bullets">
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('index.php/public/academic')?>">Programs Offered</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('public/admission')?>">Student Admission</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('public/admission')?>">Entrance Requirement</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('public/admission')?>">Admission Test(NSAF)</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('public/admission')?>">Requirements</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('public/admission')?>">Registration Exam Schedule</a></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="offer">
							<h3 class="normal c-ddgray f-20 mb-15">Courses Offered</h3>
							<div class="oh">
								<img src="<?= base_url()?>plugins/images/offers/2.png" class="pull-left mr-15" alt="">
								<ul class="oh ml-10 c-gray bullets">
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('index.php/public/academic')?>">Bachelor of Science in Business Administration</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('index.php/public/academic')?>">Bachelor of Science in Computer Science</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('index.php/public/academic')?>">Bachelor of Science in Information Technology</a></span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left"><a href="<?= base_url('index.php/public/academic')?>">Associate in Computer Science</a></span>
									</li>									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="offer">
							<h3 class="normal c-ddgray f-20 mb-15">Scholarships & Programs</h3>
							<div class="oh">
								<img src="<?= base_url()?>plugins/images/offers/3.png" class="pull-left mr-15" alt="">
								<ul class="oh ml-10 c-gray bullets">
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">CHED Scholarship Program</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">Barangay Scholarship Program</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">City Scholarship Program</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">Sports Scholarship</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">Deanslist Scholarship Program</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">Student Assistant Program</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="offer">
							<h3 class="normal c-ddgray f-20 mb-15">Careers</h3>
							<div class="oh">
								<img src="<?= base_url()?>plugins/images/offers/4.png" class="pull-left mr-15" alt="">
								<ul class="oh ml-10 c-gray bullets">
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">I.T Instructors</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">Business Instructors</span>
									</li>
									<li>
										<i class="fa fa-circle pull-left"></i><span class="pull-left">Admin Staff</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- ----- END OFFER ---- -->

			<div class="about-aclc bg-white ptb-15 shadow mb-10">
				<div class="row">
					<div class="col-md-24">
						<h3 class="c-gray normal">The ACLC Butuan</h3>
						<?php if(!empty($his)): ?>
							<?= $his->content ?>
						<?php else:?>
							No Content
						<?php endif;?>
					</div>
					<!-- <div class="col-md-10">
						<ul class="a-list inline-block">
							<li class="mr-5">
								<img src="<?= base_url()?>plugins/images/aclc_about/1.png" alt="">
								<label>Computer Laboratory</label>
							</li>
							<li>
								<img src="<?= base_url()?>plugins/images/aclc_about/2.png" alt="">
								<label>Data Center</label>
							</li>
							<li class="mr-5">
								<img src="<?= base_url()?>plugins/images/aclc_about/3.png" alt="">
								<label>Room</label>
							</li>
							<li>
								<img src="<?= base_url()?>plugins/images/aclc_about/4.png" alt="">
								<label>Library</label>
							</li>
						</ul>
					</div> -->
				</div>
			</div> <!-- ----- END ABOUT ---- -->

			<div class="news-calendar mb-10">
				<div class="row">
					<div class="col-md-12" style="padding-right:2px;">
						<div class="news bg-white ptb-15 shadow">
							<h3 class="c-gray normal">News</h3>
							<ul class="news-list inline-block pb-17">
								<?php if(!empty($news)):?>
									<?php foreach($news as $key => $value):?>
										<?php if($value->image != ""): ?>
											<li class="mr-5">
												<img src="<?= base_url($value->image)?>" alt="" class="img img-responsive" style="height:120px;">
												<label><center><?= ucwords($value->title) ?></center></label>
											</li>
										<?php endif;?>
									<?php endforeach;?>
								<?php else:?>
									<li class="mr-5">
										<img src="<?= base_url()?>plugins/images/no-image.jpg" alt="" class="img img-responsive" style="height:120px;">
									</li>
								<?php endif;?>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<div class="calendar bg-white ptb-15 shadow oh">
							<h3 class="c-gray normal bb pb-5">Calendar</h3>
							<div class="pull-right">
								<i class="fa fa-calendar-check-o mr-5 c-blue f-20"></i><span class="c-blue f-12">ACLC Events List</span>
							</div>
							<ul class="calendar-list mt-40" style="height:600px;overflow-y: auto;">
								<?php if(!empty($sch)):?>
									<?php foreach($sch as $key => $value): ?>
										<li class="bb">
											<h6><?= date("F d, Y",strtotime($value->date))?></h6>
											<h3><a href=""><?= ucwords($value->act_title) ?></a></h3>
											<?= $value->details; ?>
										</li>
									<?php endforeach; ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div> <!--  END NEWS/CALENDAR -->

			<div class="directory relative bg-white ptb-15 shadow pt-5 mb-30">
				<div class="head"></div>
				<div class="row">
					<div class="col-md-4">
						<h4>DIRECTORY</h4>
						<p>Faculty, Staff, Lecturer, Colleges, Schools, Offices, e-Libraries, Services</p>
					</div>
					<div class="col-md-4">
						<h4>ADMISSIONS</h4>
						<p class="mb-0">admissions@g.aclc.edu.ph</p>
						<p>+63 (063) 223 8641</p>
					</div>
					<div class="col-md-5">
						<h4>SERVICES</h4>
						<p class="mb-0">My.ACLC, Online Clearance, Leave Management, Travel Order, Jobs, Invitations to Bid</p>
					</div>
					<div class="col-md-4">
						<h4>REGISTRAR</h4>
						<p class="mb-0">registrar@g.aclc.edu.ph</p>
						<p class="mb-0">+63 (063) 223 3794</p>
						<p>OSAS</p>
					</div>
					<div class="col-md-7">
						<h4>OFFICE OF STUDENT AFFAIRS AND SERVICES</h4>
						<p class="mb-0">guidance@g.aclc.edu.ph</p>
						<p>+63 (063) 225 4634 / 221 4050</p>
					</div>
				</div>
			</div> <!-- ----- END DIRECTORY ---- -->


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
								<li><a href="">Excel News</a></li>
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
		

	<script src="<?= base_url()?>plugins/js/jquery.min.js"></script>
	<script src="<?= base_url()?>plugins/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/owl.carousel.js"></script>

	<script>
		$(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            margin: 0,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
            }
          })
        });

        $(".main-carousel .left-nav").click(function(){
        	let prev = document.getElementsByClassName("owl-prev")[0];
        	prev.click();
        });
         $(".main-carousel .right-nav").click(function(){
        	let next = document.getElementsByClassName("owl-next")[0];
        	next.click();
        });
	</script>
</body>
</html>