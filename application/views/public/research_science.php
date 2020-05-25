<?php

/**
 * @Author: Gian
 * @Date:   2018-06-08 08:35:00
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 14:33:59
 */
?>
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
  <script type="text/javascript" src="<?= base_url() ?>plugins/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/DataTables/datatables.css">
  <script type="text/javascript" src="<?= base_url() ?>plugins/plugins/DataTables/datatables.js"></script>
  <script src="<?= base_url()?>plugins/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	$(function(){
  		var tbl = $("#research-table").DataTable({
			"searching": true,
			"bLengthChange": false,
			"bInfo" : false,
			"pageLength": 40
		});
		$(document).on('click','.view-research',function(e){
	   		// alert("under construction!");
	   		$.ajax({
	   			url: '<?= base_url()?>index.php/public/research/science_retrieve_data',
	   			type: 'POST',
	   			dataType: 'JSON',
	   			data: {id :$(this).attr("attr")},
	   		})
	   		.done(function(data) {
	   			$.each(data, function(key, val) {
	   				$('#title').html(val.title)
		   			$('#summary').html(val.summary)
	   			});
	   		})

	   		e.preventDefault();
	   });
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
						<li ><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
						<li class="active"><a href="<?= base_url()?>index.php/public/research">Research</a></li>
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
				<li><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
				<li ><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
				<li class="active"><a href="<?= base_url()?>index.php/public/research">Research</a></li>
				<li><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
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
								<li ><a href="<?= base_url()?>index.php/public/research/ried">Ried Multidisciplinary Research Journal</a></i></li>
								<li ><a href="<?= base_url()?>index.php/public/research/rmrj">RMRJ Book and Abstract</a></i></li>
								<li ><a href="<?= base_url()?>index.php/public/research/research_excel_news">Excel News</a></i></li>
								<li ><a href="<?= base_url()?>index.php/public/research">Capstone</a></i></li>
								<li><a href="<?= base_url()?>index.php/public/thesis">Thesis</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/research_case_study">Case Studies</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/research_institutional">Institutional</a><i class="fa fa-play"></i></li>
								<li class="active"><a href="<?= base_url()?>index.php/public/research/science_investigatory">Science Investigatory Project</a><i class="fa fa-play"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-13 pr-0">
						<div class="activity-sched bg-white ptb-15">
							<h3 class="normal c-gray f-18 mb-15 bb pb-10">Science Investigatory Project</h3>
							<table class="research-table table" id="research-table">
								<thead>
									<th class="col-xs-18" style="padding-left: 0">Research Title</th>
									<th class="col-xs-6" style="text-align: center">Year Published</th>
									<th class="col-xs-6" style="text-align: center">Download</th>

								</thead>
								<tbody>

									<?php foreach($research as $key => $value):?>
										<tr>
											<td><a href="#" class="view-research" attr='<?= $value->sci_id ?>' style="text-decoration: none;"><?= $value->sci_id.". ". $value->title ?></a></td>
											<td style="text-align: center"><center><?= date("Y",strtotime($value->date_published))?></center></td>
											<td style="text-align: center"><center><a href="<?= base_url('plugins/images/research/science_investigatory/'.$value->img_path)?>" target="_blank" download><?= $value->img_path !='' ? 'Download pdf':''?></a></center></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="ptb-15 bg-white">
							<h3 class="normal c-gray f-16 mb-15 bb pb-10">Overview</h3>
							<div class="mb-25">
								<h5 class="f-14 c-dgray mb-3">Title: </h5>
								<h4 class="f-16 c-gray normal" id="title">Title</h4>
							</div>
							<div class="mb-25">
								<h5 class="f-14 c-dgray mb-3">Summary: </h5>
								<div id="summary" class="c-gray normal">Summary</div>
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