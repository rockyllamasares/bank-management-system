<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up -One Bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>"/>
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
		<div class="jumbotron" style="width: 50%;">

<form method="POST" action="save">
	<center><h2>Registration Form</h2>
	<table>
		
	<tr class="form-group">
		<td>
      		<label for="exampleInputEmail1">First Name</label>
      		<input type="text" class="form-control"  name="fname"  required="">
  	    </td>
        <td>
        	<label for="exampleInputEmail1">Middle Name</label>
      		<input type="text" class="form-control"  name="mname"  required="">
  		</td>
        <td>
        	<label for="exampleInputEmail1">Last Name</label>
      		<input type="text" class="form-control"  name="lname"  required="">
        </td>
      </tr>

      <tr class="form-group">
      <td>
        <br>
          <label for="exampleInputEmail1">User Name</label>
          <input class="form-control"  name="username"  required="">
      </td>
    </tr><br>


    <tr class="form-group">
    	<td colspan="3">
    		<br>
      		<label for="exampleInputEmail1">Email Address</label>
      		<input  class="form-control"  name="email" required="">
  		</td>
      
    </tr>

    <tr class="form-group">
    	<td>
    		<br>
      		<label for="exampleInputEmail1">Phone Number</label>
      		<input class="form-control"  name="number"  required="">
  		</td>
      <td colspan="3">
        <br>
          <label for="exampleInputEmail1">Address</label>
          <input  class="form-control"  name="address" required="">
      </td>
    </tr><br>

    <tr class="form-group">
    	<td>
    		<br>
      		<label for="exampleInputPassword1">Password</label>
      		<input type="password" class="form-control" name="password"  required="">
  		</td>

    <tr >
    	<td>
    		<br>
    		<input type="submit" class="btn btn-success" value="Sign In">
    	<td>
    </tr>
</table>

  </form>
		</div>

	</div>
</div>
	


</body>
</html>