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
		        		<li class="active"><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
						<li><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
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
				<li class="active"><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
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
				              <img src="<?= base_url($value->path)?>" class="img-responsive" alt="">
				            </div>
						<?php endforeach;?>
					<?php else:?>
						<div class="item">
			              <img src="<?= base_url()?>plugins/images/no-image.jpg" class="img-responsive" alt="" style="height:500px">
			            </div>
					<?php endif;?>
		         </div>
		         <div>
		         	<span class="left-nav fa fa-angle-left"></span>
		         	<span class="right-nav fa fa-angle-right"></span>
		         </div>
			</div>

			<div class="history-aclc bg-white ptb-20 shadow mb-10">
				<h3 class="normal c-dgray f-20 mb-15 bb pb-10">History</h3>
				<?php if(!empty($his)):?>
					<?= $his->content; ?>
				<?php else:?>
					No Content
				<?php endif;?>
			</div>


			<div class="aclc-more mb-10">
				<div class="row">
					<div class="col-md-12 pr-5">
						<div class="mvc bg-white ptb-20 shadow mb-10">
							<div class="mission mb-30">
								<h3 class="normal c-dgray f-20 mb-5 bb pb-5">Mission</h3>
								<?php if(!empty($mis)):?>
									<?= $mis->content; ?>
								<?php else:?>	
									No Content
								<?php endif;?>

							</div>
							<div class="vision mb-30">
								<h3 class="normal c-dgray f-20 mb-5 bb pb-5">Vision</h3>
								<?php if(!empty($vis)): ?>
									<?= $vis->content; ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</div>
							<div class="core">
								<h3 class="normal c-dgray f-20 mb-5 bb pb-5">Core Values</h3>
								<?php if(!empty($core)): ?>
									<?= $core->content ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</div>
							
						</div>
						<div class="accreditation  bg-white ptb-20 shadow mb-10">
							<h3 class="normal c-dgray f-20 mb-5 bb pb-5">Accreditation</h3>
							
							<ul class="inline-block prb-10 mb-3">
								<?php if(!empty($accre)): ?>
									<?php foreach($accre as $key => $value):?>
										<li><img src="<?= base_url($value->path)?>" alt=""></li>
									<?php endforeach;?>
								<?php else:?>
									<li><img src="<?= base_url()?>plugins/images/no-image.jpg" style="height:500px;" alt=""></li>
								<?php endif;?>
							</ul>

						</div>
					</div>

					<div class="col-md-12 pl-5">
						<div class="mvc">
							<div class="hymn mb-10 bg-white ptb-20 shadow">
								<h3 class="normal c-dgray f-20 mb-5 bb pb-5">Hymn</h3>
								<?php if(!empty($hymn)):?>
									<?= $hymn->content; ?>
								<?php else:?>
									No Content
								<?php endif;?>
							</div>
							<div class="school-map mb-30 bg-white ptb-20 shadow">
								<h3 class="normal c-dgray f-20 mb-5 bb pb-5">School Map</h3>
								<iframe 
									src="<?= $location->embedmap?>"
									style="width:100%;height:500px;"
									frameborder="0" style="border:0" allowfullscreen></iframe>
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

        function myMap() {
			var mapProp= {
			    center:new google.maps.LatLng(8.940366299999999, 125.51579170000002),
			    zoom:15,
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxXg0aQhrnee_xVc80byQSbtJ2hElwoEA&callback=myMap"></script>
</body>
</html>