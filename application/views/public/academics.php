<?php 
	$jan=""; $feb=""; $mar=""; $apr=""; $may="";$jun="";$jul="";$aug="";$sept="";$oct="";$nov="";$dec = "";
	$bjan=""; $bfeb=""; $bmar=""; $bapr=""; $bmay="";$bjun="";$bjul="";$baug="";$bsept="";$boct="";$bnov="";$bdec = "";
	$gjan=""; $gfeb=""; $gmar=""; $gapr=""; $gmay="";$gjun="";$gjul="";$gaug="";$gsept="";$goct="";$gnov="";$gdec = "";
 ?>
<?php foreach($ac as $key => $value): ?>
	<?php 
		$month = date("F",strtotime($value['start'])); 
		if($value['department'] == "Computer Education Department"){
			switch ($month) {
				case 'January':
					$jan .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'February':
					$feb .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'March':
					$mar .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'April':
					$apr .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'May':
					$may .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'June':
					$jun .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'July':
					$jul .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'August':
					$aug .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'September':
					$sept .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'October':
					$oct .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'November':
					$nov .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'December':
					$dec .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				default:
					# code...
					break;
			}
		}
		if($value['department'] == "Business Administration Department"){
			switch ($month) {
				case 'January':
					$bjan .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'February':
					$bfeb .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'March':
					$bmar .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'April':
					$bapr .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'May':
					$bmay .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'June':
					$bjun .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'July':
					$bjul .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'August':
					$baug .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'September':
					$bsept .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'October':
					$boct .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'November':
					$bnov .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'December':
					$bdec .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				default:
					# code...
					break;
			}
		}
		if($value['department'] == "General Edacation Department"){
			switch ($month) {
				case 'January':
					$gjan .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'February':
					$gfeb .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'March':
					$gmar .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'April':
					$gapr .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'May':
					$gmay .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'June':
					$gjun .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'July':
					$gjul .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'August':
					$gaug .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'September':
					$gsept .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'October':
					$goct .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'November':
					$gnov .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				case 'December':
					$gdec .= "<tr>
								<td>".ucfirst($value['title'])."</td>
								<td>".date("d - l",strtotime($value['start']))."</td>
								<td>".date("H:i A",strtotime($value['start']))." - <br />".date("H:i A",strtotime($value['end']))."</td>
								<td>".$value['location']."</td>
								<td>".$value['detail']."</td>
							</tr>";
					break;
				default:
					# code...
					break;
			}
		}
	?>
<?php endforeach; ?>

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
		<div class="container">
			
			<div class="admission-main mb-30">
				<div class="row">
					<div class="col-md-5 pr-0">
						<div class="admission-leftpane bg-white">
							<div class="head-blue ptb-10 bg-blue"></div>
							<ul>
								<li class="active"><a href="<?= base_url()?>index.php/public/academic">Academic Calendar</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/academic/programs">Programs</a><i class="fa fa-play"></i></li>
								<li><a href="<?= base_url()?>index.php/public/academic/scholarships">Scholarships</a><i class="fa fa-play"></i></li>
							</ul>
						</div>
					</div>
					<div class="col-md-19 pr-0">
						<div class="activity-sched bg-white ptb-15">
							<div class="calendar-activity oh mb-30">
								<div class="head oh bb">
									<h3 class="normal c-gray f-20 mb-10 pull-left">Computer Education Department</h3>
									<span class="f-12 c-gray pull-right pt-5 pr-5">Academic Year: <?= date("Y") ?>-<?= date('Y',strtotime(" + 365 day")) ?></span>
								</div>
								<ul>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">January</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $jan == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $jan; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">February</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $feb == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $feb; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">March</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $mar == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $mar; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">April</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $apr == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $apr; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">May</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $may == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $may; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">June</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $jun == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $jun; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">July</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $jul == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $jul; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">August</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $aug == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $aug; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">September</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $sept == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $sept; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">October</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $oct == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $oct; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">November</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $nov == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $nov; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">December</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $dec == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $dec; ?>
												</tbody>
											</table>
										</div>
									</li>

								</ul>
							</div>

							<div class="calendar-activity oh">
								<div class="head oh bb">
									<h3 class="normal c-gray f-20 mb-10 pull-left">Business Administration Department</h3>
									<span class="f-12 c-gray pull-right pt-5 pr-5">Academic Year: <?= date("Y") ?>-<?= date('Y',strtotime(" + 365 day")) ?></span>
								</div>
								<ul>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">January</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bjan == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bjan; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">February</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bfeb == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bfeb; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">March</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bmar == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bmar; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">April</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bapr == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bapr; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">May</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bmay== "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bmay; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">June</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bjun == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bjun; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">July</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bjul == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bjul; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">August</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $baug == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $baug; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">September</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bsept == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bsept; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">October</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $boct == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $boct; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">November</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bnov == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bnov; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">December</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bdec == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bdec; ?>
												</tbody>
											</table>
										</div>
									</li>

								</ul>
							</div>

							<div class="calendar-activity oh">
								<div class="head oh bb">
									<h3 class="normal c-gray f-20 mb-10 pull-left">General Education Department</h3>
									<span class="f-12 c-gray pull-right pt-5 pr-5">Academic Year: <?= date("Y") ?>-<?= date('Y',strtotime(" + 365 day")) ?></span>
								</div>
								<ul>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">January</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bjan == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bjan; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">February</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bfeb == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bfeb; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">March</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bmar == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bmar; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">April</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bapr == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bapr; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">May</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bmay== "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bmay; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">June</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bjun == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bjun; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">July</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bjul == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bjul; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">August</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $baug == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $baug; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">September</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bsept == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bsept; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">October</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $boct == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $boct; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">November</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bnov == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bnov; ?>
												</tbody>
											</table>
										</div>
									</li>
									<li>
										<div class="calendar pt-10">
											<h5 class="c-gray">December</h5>
											<table class="table table-bordered">
												<thead>
													<th class="col-xs-5">Activity</th>
													<th class="col-xs-4">Date</th>
													<th class="col-xs-4">Time</th>
													<th class="col-xs-4">Location</th>
													<th class="col-xs-7">Details</th>
												</thead>
												<tbody>
													<?= $bdec == "" ? "<td colspan='5'><center>No Academic Activities</center></td>": $bdec; ?>
												</tbody>
											</table>
										</div>
									</li>

								</ul>
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
		
	</script>
</body>
</html>