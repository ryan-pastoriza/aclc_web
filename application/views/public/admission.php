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
		        <li><a href="#" class="c-white f-12">Pre-Registration</a></li>
		        <li><a href="#" class="c-white f-12">Queueing</a></li>
		        <li><a href="#" class="c-white f-12">Careers</a></li>
		        <li><a href="#" class="c-white f-12">SIS</a></li>
		        <li><a href="#" class="c-white f-12">Alumni</a></li>
		        <li><a href="#" class="c-white f-12">Employee</a></li>
		        <li class="visible-xs">
		        	<ul class="nav navbar-nav pl-5">
		        		<li ><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
						<li class="active"><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
						<li><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
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
				<li class="active"><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
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
			
			<div class="admission-main mb-30">
				<div class="row">
					<div class="col-md-5 pr-0">
						<div class="admission-leftpane bg-white">
							<div class="head-blue ptb-10 bg-blue"></div>
							<ul>
								<li class="active"><a href="#ef">Enrollment Flow</a><i class="fa fa-play"></i></li>
								<li><a href="#aa">About Admission</a><i class="fa fa-play"></i></li>
								<li><a href="#edr">Enrollment Documentary Requirements</a><i class="fa fa-play"></i></li>
								<li><a href="#sa">Student Admission</a><i class="fa fa-play"></i></li>
								<li><a href="#eee">Entrance Exam Schedules</a><i class="fa fa-play"></i></li>
								<li><a href="#cu">Contact Us</a><i class="fa fa-play"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-13 pr-0" id="ef">
						<div class="mid-content ptb-15 bg-white oh">
							<h3 class="normal c-gray f-20 mb-15 bb pb-10">Enrollment Flow</h3>
							<div class="row mb-30">
								<?php if(!empty($en_flow)):?>
									<?= $en_flow->content ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</div>
							<a href="#" class="btn btn-primary pull-right">Download PDF</a>
							
							<div class="about-admission pt-60" id="aa">
								<h3 class="normal c-gray f-20 mb-15 bb pb-10">About Admission</h3>
								<?php if(!empty($ad)):?>
									<?= $ad->content ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</div>

							<div class="about-admission pt-60" id="sa">
								<h3 class="normal c-gray f-20 mb-15 bb pb-10">Student Admission</h3>
								<?php if(!empty($sa)):?>
									<?= $sa->content; ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</div>
	
							<div class="about-admission pt-60" id="eee">
								<h3 class="normal c-gray f-20 mb-15 bb pb-10">Entrance Exam Schedules</h3>
								<?= $ee->content; ?>
								
							</div>

							<div class="about-admission pt-60" id="cu">
								<h3 class="normal c-gray f-20 mb-15 bb pb-10">Contact Us</h3>
								<div>
									<ul class="c-gray">
										<li class="mb-10"><i class="mr-10 fa fa-fw fa-phone"></i><span>Tel. no.: 342-5053 / 825-2545</span></li>
										<li class="mb-10"><i class="mr-10 fa fa-fw fa-fax"></i><span>Fax no.:854-5242</span></li>
										<li class="mb-10"><i class="mr-10 fa fa-fw fa-envelope"></i><span>aclcbutuanadmission@gmail.com</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" id="edr">
						<div class="ptb-15 bg-white">
							<h3 class="normal c-gray f-16 mb-15 bb pb-10">Enrollment Document Requirements</h3>
							<div class="mb-20">
								<?= $rd->content; ?>
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
		

	<script src="<?= base_url()?>plugins/js/jquery.min.js"></script>
	<script src="<?= base_url()?>plugins/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/owl.carousel.js"></script>

	<script>
		$(function(){
			$("a[href^='#']").click(function(e) {
				e.preventDefault();
				
				var position = $($(this).attr("href")).offset().top;

				$("body, html").animate({
					scrollTop: position
				} /* speed */ );
			});
		})
	</script>
</body>
</html>