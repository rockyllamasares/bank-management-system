<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html> 
<html lang="en">
<head>
	<title>Login - One Bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/bank.png'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('assets/images/bg.jpg'); ?>">


		<form action="<?php echo site_url('Login/auth'); ?>" method="POST">

		<center>
  				<h2>Welcome to OneBank</h2>
  				<p class="lead" style="color: #ffffff;"></p><br><br>
  		

  			<div class="card border-dark mb-3" style="width: 100%; height: 530px;">
  				<div class="card-header" style="color: skyblue;"><img style="height: 80px; width: 85px;" src="<?php echo base_url('assets/images/user.png'); ?>"></div>
  				<div class="card-body">
  					<div class="form-group">
  						<br>
      					<label ><h5 >Username</h5></label>
      					<center>
      					<input style="height: 45px; width: 90%; font-size: 15px;" type="username" class="form-control"  name="username" placeholder="Enter Username">
      				
    				</div>

    			
    				<div class="form-group">
      					<label ><h5>Password</h5></label>
      					<input style="height: 45px; width: 90%; font-size: 15px" type="password" class="form-control" name="password" placeholder="Password">
    				</div><br><br>
    			
    				<button style="height: 45px; width: 100px;font-size: 15px" type="submit" class="btn btn-primary">Log In</button>

    				
  			</div>

		</div><br><br><br>

		<p class="lead" style="color: #ffffff;">Don't have an account?<a  href="<?php echo site_url('New_rec/index'); ?>">Sign Up</a></p>
		</form>

	</div>
	
</body>
</html>