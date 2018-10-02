<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Admin</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Custom fonts for this template -->
		<link href="<?php echo base_url();?>assets/plugins/themify/css/themify.css" rel="stylesheet" type="text/css">

		<!-- Angular Tooltip Css -->
		<link href="<?php echo base_url();?>assets/plugins/angular-tooltip/angular-tooltips.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="<?php echo base_url();?>assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url();?>assets/dist/css/glovia.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/dist/css/glovia-responsive.css" rel="stylesheet">
		
		<!-- Custom styles for Color -->
		<link id="jssDefault" rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/default.css">
	</head>

	<body>
	
		<div class="container-fluid">
			<div class="row">
				<div class="hidden-xs hidden-sm col-lg-6 col-md-6 gredient-bg">
					<div class="clearfix">
						<div class="logo-title-container text-center">
							<h3 class="cl-white text-upper">Welcome To</h3>
							<img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/logo.png" alt="Logo Icon">
							 <div class="copy animated fadeIn">
								<p class="cl-white">World first & best dashboard with multi features<br> based on Js & Css.</p>
							</div>
						</div> <!-- .logo-title-container -->
					</div>
				</div>

				<div class="col-12 col-sm-12 col-md-6 col-lg-6 login-sidebar animated fadeInRightBig">

					<div class="login-container animated fadeInRightBig">

						<h2 class="text-center text-upper">Login To Glovia Dashboard</h2>
						<?php echo $this->session->flashdata('response');?>
						<?php echo form_open('admin', array('class' => 'form-horizontal')); ?>
						
						<div class="form-group">
							<?php echo form_input(array('name'=>'username','class'=>'form-control','id'=>'username','placeholder'=>'Email or Username','type'=>'email')); ?>
							<i class="fa fa-user"></i>
						</div>
						
						<div class="form-group">
							<?php echo form_input(array('name'=>'password','class'=>'form-control','id'=>'password','placeholder'=>'Enter Password','type'=>'password')); ?>
							<i class="fa fa-lock"></i>
						</div>
						
						<div class="form-group">
							<div class="flexbox align-items-center">
								<?php echo form_button(array('type'=>'submit','class'=>'btn gredient-bg','content'=>'log in'));?>
								<p>If You Are a New User <a href="signup.html" data-toggle="tooltip" class="gredient-cl" data-original-title="Sign Up">Signup Here.</a></p>
							</div>
						</div>
						
						<?php echo form_close(); ?>
					</div> 
					<!-- .login-container -->
					
				</div> <!-- .login-sidebar -->
			</div> <!-- .row -->
		</div>
		

		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Core plugin JavaScript-->
		<script src="<?php echo base_url();?>assets/plugins/jquery-easing/jquery.easing.min.js"></script>
		
		 <!-- Slick Slider Js -->
		<script src="<?php echo base_url();?>assets/plugins/slick-slider/slick.js"></script>
		
		<!-- Slim Scroll -->
		<script src="<?php echo base_url();?>assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom scripts for all pages-->
		<script src="<?php echo base_url();?>assets/dist/js/glovia.js"></script>
	  
	</body>
</html>
