<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACLC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url()?>plugins/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/css/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/css/styles.css">
  <script src="<?= base_url()?>plugins/js/jquery.min.js"></script>
	<script src="<?= base_url()?>plugins/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
	<script src="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/owl.carousel.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/DataTables/datatables.css">
  <script type="text/javascript" src="<?= base_url() ?>plugins/plugins/DataTables/datatables.js"></script>
    <script src="<?= base_url() ?>plugins/js/jquery.autoellipsis.min.js"></script>
  <script type="text/javascript">
  	$(function(){
  		var tbl = $("#organization-table").dataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 5
		});
		$('.ellip').ellipsis({
		  lines: 2,             // force ellipsis after a certain number of lines. Default is 'auto'
		  ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
		  responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
		});
		$(document).on('click','.more',function(e){
			// alert($(this).attr("attr"));
			$.ajax({
				url: '<?= base_url()?>index.php/public/campus_life/club_org_details',
				type: 'POST',
				dataType: 'JSON',
				data: {id: $(this).attr("attr")},
			})
			.done(function(data) {
				$.each(data, function(key, val) {
					$('.modal-title').html(val.orgname)
					$('.modal-body').html(val.details)
					$('.detail').modal('show')
				});
			})
			
			e.preventDefault();
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
		        <li><a href="#" class="c-white f-12">Pre-Registration</a></li>
		        <li><a href="#" class="c-white f-12">Queueing</a></li>
		        <li><a href="#" class="c-white f-12">Careers</a></li>
		        <li><a href="#" class="c-white f-12">SIS</a></li>
		        <li><a href="#" class="c-white f-12">Alumni</a></li>
		        <li><a href="#" class="c-white f-12">Employee</a></li>
		        <li class="visible-xs">
		        	<ul class="nav navbar-nav pl-5">
		        		<li ><a href="<?= base_url()?>index.php/public/about_us">About Us</a></li>
						<li ><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
						<li><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
						<li><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
						<li><a href="<?= base_url()?>index.php/public/research">Research</a></li>
						<li class="active"><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
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
				<li><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
				<li><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
				<li><a href="<?= base_url()?>index.php/public/research">Research</a></li>
				<li class="active"><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
				<li><a href="<?= base_url()?>index.php/public/contact_us">Contact Us</a></li>
			</ul>
		</div>
	</nav>	


	<div class="main-content">
		<div class="container">
			
			<div class="admission-main mb-30">
				<div class="row" style="padding-bottom: 30px;">
					<div class="col-md-5 pr-0">
						<div class="admission-leftpane bg-white">
							<div class="head-blue ptb-10 bg-blue"></div>
							<ul>
								<li ><a href="<?= base_url()?>index.php/public/campus_life">School Activities</a><i class="fa fa-play"></i></li>
								<li class="active"><a href="<?= base_url()?>index.php/public/campus_life/club_organization">Organizations / Clubs</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/campus_life/excel">Excel</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/campus_life/ssg">SSG</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/campus_life/news">News</a><i class="fa fa-play"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-13 pr-0">
						<div class="activity-sched bg-white ptb-15">
							<h3 class="normal c-gray f-18 mb-15 bb pb-10">Organizations / Clubs</h3>
							<div class="row">
								<div class="table-responsive" style="scroll:none;">
									<table id="organization-table" style="table-layout:fixed;width:100%;">
										<thead hidden><tr><th style="width: 100%;">asd</th></tr></thead>
										<tbody>
											<?php foreach($org as $key => $value):?>
												<tr>
													<td>
														<div class="col-md-24">
															<div style="border-bottom:1px dashed #000;padding-bottom:10px;margin-top:10px;">
																<div class="row" style="margin-left:20px;">
																	<div class="col-md-24" style="padding-left:10px;word-wrap:break-word;">
																		<h3 style="padding-bottom:10px;"><img src="<?= base_url()?>plugins/images/organization_club/<?= $value->img ?>" style="width:100px;height:100px;border-radius: 100%;"/> <?= ucwords($value->orgname)?></h3>
																		<div style="height:90px;white-space: nowrap; text-overflow: ellipsis; overflow: hidden;" class="ellip">
																			<h5>Details:</h5>
																			<?= $value->details; ?>
																		</div>
																		<a href="#" class="pull-right more" style="margin-right:10px;" attr="<?= $value->org_id ?>">more...</a>
																	</div>
																</div>
															</div>
														</div>
													</td>
												</tr>
											<?php endforeach;?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="modal fade detail" tabindex="-1" role="dialog">
							<div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							      	<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        	<center><h4 class="modal-title">Modal title</h4></center>
							      	</div>
							      	<div class="modal-body">
							        	
							      	</div>
							    </div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="ptb-15 bg-white">
							<h3 class="normal c-gray f-16 mb-15 bb pb-10">Latest Activities</h3>
							<div class="mb-30">
								<ul class="latest-activity-list">
									<?php foreach($latest as $key => $value): ?>
										<li class="relative active"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30"><?= $value->act_title; ?></span></a></li>
									<?php endforeach;?>
								</ul>
							</div>
							<h3 class="normal c-gray f-16 mb-15 bb pb-10">Events</h3>
							<div class="mb-30" style="height:600px;overflow: auto;">
								<ul class="or-events-list" >
									<?php foreach($news as $key => $value):?>
										<?php if($value->image != ""):?>										
											<li>
												<img src="<?= base_url($value->image)?>" class="img img-responsive" alt="">
												<div>
													<h5 class="normal f-18"><?= $value->title?></h5>
													<p class="pull-right f-12">posted: <?= date("F d, Y") ?></p>
												</div>
											</li>
										<?php endif;?>
									<?php endforeach;?>
								</ul>
							</div>
							<!-- <h3 class="normal c-gray f-16 mb-15 bb pb-10">Updates</h3>
							<div class="mb-30">
								<ul class="latest-activity-list">
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">Lorem ipsum dolor set amet</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">consectetur adipisicing elit</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">Quibusdam ullam tenetur</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">minima dolores vel distinctio</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">dolore atque quod harum</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">repellat sed deleniti</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">Architecto culpa numquam</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">perferendis adipisci facere</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">quasi atque perferendis</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">culpa numquam exercitationem</span></a></li>
									<li class="relative"><a href=""><i class="fa fa-circle f-7 bullet"></i><span class="pl-30">atque perferendis adipisci</span></a></li>
								</ul> -->
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