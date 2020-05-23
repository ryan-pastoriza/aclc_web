<?php

/**
 * @Author: Gian
 * @Date:   2018-07-31 09:35:17
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-01 11:19:54
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
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/toastr/toastr.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url()?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
  <script type="text/javascript" src="<?= base_url() ?>plugins/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/DataTables/datatables.css">
  <script type="text/javascript" src="<?= base_url() ?>plugins/plugins/DataTables/datatables.js"></script>
  <script src="<?= base_url()?>plugins/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>plugins/js/jqueryForm.min.js"></script>
  <script src="<?= base_url() ?>plugins/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
  	$(function(){
		var optionss = {
	   		beforeSubmit: function(){
	   			$('#btn-save').attr("disabled","disabled")
	   			$('#btn-save').html("Sending....")
	   		},
	   		success:function(data){
	   			console.log(data)
	   			// console.log(data.success)
	   			// $.each(data, function(index, val) {
	   			// 	console.log(val)
	   			// });
	   			if(data.success == true){
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success(data.msg);
		            });
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Send");
					$("#form-cu")[0].reset();
	   			}else{
	   				setTimeout(function() {
		                toastr.options = {
		                    closeButton: true,
		                    progressBar: true,
		                    showMethod: 'slideDown',
		                    timeOut: 4000
		                };
		                toastr.success(data.msg);
		            });
		            $("#btn-save").removeAttr("disabled");
					$("#btn-save").html("Send");
	   			}

	   		},
	   		dataType:"JSON"
	   }
	   $('#form-cu').ajaxForm(optionss);
	   
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
						<li ><a href="<?= base_url()?>index.php/public/admission">Admission</a></li>
						<li><a href="<?= base_url()?>index.php/public/academic">Academics</a></li>
						<li ><a href="<?= base_url()?>index.php/public/office_resource">Offices &amp; Resources</a></li>
						<li ><a href="<?= base_url()?>index.php/public/research">Research</a></li>
						<li><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
						<li class="active"><a href="<?= base_url()?>index.php/public/contact_us">Contact Us</a></li>
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
				<li><a href="<?= base_url()?>index.php/public/research">Research</a></li>
				<li><a href="<?= base_url()?>index.php/public/campus_life">Campus Life</a></li>
				<li  class="active"><a href="<?= base_url()?>index.php/public/contact_us">Contact Us</a></li>
			</ul>
		</div>
	</nav>	


	<div class="main-content">
		<div class="container">
			
			<div class="admission-main mb-30">
				<div class="row" style="padding-bottom: 30px;">
					<div class="col-md-18 pr-0">
						<div class="activity-sched bg-white ptb-15">
							<h3 class="normal c-gray f-18 mb-15 bb pb-10">Contact Us</h3>
							<div class="row" style="width:100%;background-color:#07498a;color:#FFF;">
								<p style="padding:10px;">Address : <span id="address"><?= $info->location !='' ? $info->location:'' ?></span>
									<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="email" class="glyphicon glyphicon-envelope"> <?= $info->email_add !='' ? $info->email_add:'' ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="contact_no" class="glyphicon glyphicon-earphone"> <?= $info->tel_no !='' ? $info->tel_no:'' ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="fax_no" class="glyphicon glyphicon-phone-alt"> <?= $info->fax_no !='' ? $info->fax_no:'' ?></span>
								</p>
							</div>
							<div class="row">
								<h3 class="normal c-gray f-18 mb-15 pb-10 pt-10">Leave Message</h3>
								<div class="row">
									<div class="col-md-24">
										<?php echo form_open_multipart('public/contact_us/send_message',array('id'=>'form-cu' , 'data-toggle' => "validator", 'method' => "post")) ?>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" name="full_name" id="full_name" placeholder="Name" class="form-control" style="border-radius:0;" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="email" name="email_add" id="email_add" placeholder="Email" class="form-control" style="border-radius:0;" required="">
													</div>
												</div>
											</div>
											<div class="form-group">
												<textarea id="message" name="message" class="form-control" placeholder="Message" style="border-radius:0;resize:none;height:150px;" required></textarea>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary pull-right" style="padding-top:5px;margin-bottom: 5px;margin-top:10px;" id="btn-save">Send</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-24">
									<h3 class="normal c-gray f-18 mb-15 pb-10 pt-10">Our Location</h3>
									<iframe id="embed_map_preview" 
										src="<?= ($info->map_url != '' ? $info->map_url:''); ?>"
										style="width:100%;height:500px;border:1px solid #CCC;"
										frameborder="0" style="border:0" allowfullscreen></iframe>
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