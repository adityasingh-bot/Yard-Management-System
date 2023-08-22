<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<title>Cirrus YMS</title>
</head>
<style>

html,
body {
  background: #efefef;
  padding: 10px;
  font-family: 'Varela Round';
}
/*=== 2. Anchor Link ===*/
a {
  color: #aaaaaa;
  transition: all ease-in-out 200ms;
}
a:hover {
  color: #333333;
  text-decoration: none;
}
/*=== 3. Text Outside the Box ===*/
.etc-login-form {
  color: #919191;
  padding: 10px 20px;
}
.etc-login-form p {
  margin-bottom: 5px;
}
/*=== 4. Main Form ===*/
.login-form-1 {
  max-width: 300px;
  border-radius: 5px;
  display: inline-block;
}
.main-login-form {
  position: relative;
}
.login-form-1 .form-control {
  border: 0;
  box-shadow: 0 0 0;
  border-radius: 0;
  background: transparent;
  color: #555555;
  padding: 7px 0;
  font-weight: bold;
  height:auto;
}
.login-form-1 .form-control::-webkit-input-placeholder {
  color: #999999;
}
.login-form-1 .form-control:-moz-placeholder,
.login-form-1 .form-control::-moz-placeholder,
.login-form-1 .form-control:-ms-input-placeholder {
  color: #999999;
}
.login-form-1 .form-group {
  margin-bottom: 0;
  border-bottom: 2px solid #efefef;
  padding-right: 20px;
  position: relative;
}
.login-form-1 .form-group:last-child {
  border-bottom: 0;
}
.login-group {
  background: #ffffff;
  color: #999999;
  border-radius: 8px;
  padding: 10px 20px;
}
.login-group-checkbox {
  padding: 5px 0;
}
/*=== 5. Login Button ===*/
.login-form-1 .login-button {
  position: absolute;
  right: -25px;
  top: 50%;
  background: #ffffff;
  color: #999999;
  padding: 11px 0;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  border: 5px solid #efefef;
  border-radius: 50%;
  transition: all ease-in-out 500ms;
}
.login-form-1 .login-button:hover {
  color: #555555;
  transform: rotate(450deg);
}
.login-form-1 .login-button.clicked {
  color: #555555;
}
.login-form-1 .login-button.clicked:hover {
  transform: none;
}
.login-form-1 .login-button.clicked.success {
  color: #2ecc71;
}
.login-form-1 .login-button.clicked.error {
  color: #e74c3c;
}
/*=== 6. Form Invalid ===*/
label.form-invalid {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 5;
  display: block;
  margin-top: -25px;
  padding: 7px 9px;
  background: #777777;
  color: #ffffff;
  border-radius: 5px;
  font-weight: bold;
  font-size: 11px;
}
label.form-invalid:after {
  top: 100%;
  right: 10px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: transparent;
  border-top-color: #777777;
  border-width: 6px;
}
/*=== 7. Form - Main Message ===*/
.login-form-main-message {
  background: #ffffff;
  color: #999999;
  border-left: 3px solid transparent;
  border-radius: 3px;
  margin-bottom: 8px;
  font-weight: bold;
  height: 0;
  padding: 0 20px 0 17px;
  opacity: 0;
  transition: all ease-in-out 200ms;
}
.login-form-main-message.show {
  height: auto;
  opacity: 1;
  padding: 10px 20px 10px 17px;
}
.login-form-main-message.success {
  border-left-color: #2ecc71;
}
.login-form-main-message.error {
  border-left-color: #e74c3c;
}
/*=== 8. Custom Checkbox & Radio ===*/
/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked,
[type="radio"]:not(:checked),
[type="radio"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label,
[type="radio"]:not(:checked) + label,
[type="radio"]:checked + label {
  position: relative;
  padding-left: 25px;
  padding-top: 1px;
  cursor: pointer;
}
/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="radio"]:not(:checked) + label:before,
[type="radio"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0;
  top: 2px;
  width: 17px;
  height: 17px;
  border: 0px solid #aaa;
  background: #f0f0f0;
  border-radius: 3px;
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after,
[type="radio"]:not(:checked) + label:after,
[type="radio"]:checked + label:after {
  position: absolute;
  color: #555555;
  transition: all .2s;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after,
[type="radio"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after,
[type="radio"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before,
[type="radio"]:disabled:not(:checked) + label:before,
[type="radio"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #8c8c8c;
  background-color: #878787;
}
[type="checkbox"]:disabled:checked + label:after,
[type="radio"]:disabled:checked + label:after {
  color: #555555;
}
[type="checkbox"]:disabled + label,
[type="radio"]:disabled + label {
  color: #8c8c8c;
}
/* accessibility */
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before,
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before {
  border: 1px dotted #f6f6f6;
}
/* hover style just for information */
label:hover:before {
  border: 1px solid #f6f6f6 !important;
}
/*=== Customization ===*/
/* radio aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  border-radius: 3px;
}
[type="radio"]:not(:checked) + label:before,
[type="radio"]:checked + label:before {
  border-radius: 35px;
}
/* selected mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  top: 0;
  left: 2px;
  font-size: 14px;
}
[type="radio"]:not(:checked) + label:after,
[type="radio"]:checked + label:after {
  content: '\2022';
  top: 0;
  left: 3px;
  font-size: 30px;
  line-height: 25px;
}
/*=== 9. Misc ===*/
.logo {
  padding: 15px 0;
  font-size: 25px;
  color: #aaaaaa;
  font-weight: bold;
}
</style>



<style>
.box{
  width:100px;
  height:100px;
  border-top:2px solid #fff;
  border-radius:50%;
  margin:10px auto 50px;
  background-color:#EEEEEE;
  background: linear-gradient(#EDEAE1,#CDC8B5);
  text-align:center;
  box-shadow:
    0 5px 2px 3px rgba(158, 158, 158, 0.4), 
    0 3px 5px #B7B6B6, 
    0 0 0 2px #BBB7AE, 
    inset 0 -3px 1px 2px rgba(186, 178, 165, 0.5),
    inset 0 3px 1px 2px rgba(246, 245, 241, 0.3);
  cursor:pointer;
  position:relative;
}
.box:active{
  width:100px;
  height:100px;
	border-radius:50%;
  border-top:none;
  border:2px solid #BAB7AE;
	background-color:#EEEEEE;
	text-align:center;
	position:relative;
	color:#BAB7AE;
	font-size:64px;
	line-height:100px;
	text-shadow:
    0 1px 1px white,
    0 1px 1px #BAB7AE;
  
  box-shadow:  0 0 0 0 #BBB7AE;
}
.box:before{
	content:" ";
	display:block;
	position:absolute;
	z-index:-90;
	width:135px;
	height:135px;
	border-radius:50%;
	border-top:2px solid #CCC8BF;
  border-bottom: 1px solid #F4F3F1;
  box-shadow: inset 0 -2px 0 2px #F7F6F2, inset 0 2px 1px 1px #CCC8BF;
	left:-17.5px; 
	top:-20px;
	background:-moz-linear-gradient(#DAD6CB,#F1EDEA);
	box-shadow: inset 1px 0 1px 0px #D9D9D9; 
}
.box span{
  display:inline-block;
  box-shadow: 
    inset 0 1px 1px 1px #7E7E7E, 
    0 1px 1px white;
  height:15px; 
  width:15px;
  border-radius:50%;
  background: linear-gradient(#AEADAA,#BAB7AE);
  margin:42px auto;
}
</style>



<!-- button style-->

<body>


<div class="header">
<div class="row">

<div class="col-md-4">
<img src="logo.png" alt="logo" />
</div>

<div class="col-md-4">
	<div class="logo">A 30 DAYS	FREE DEMO VERSION</div>
<div class="text-center col-md-3" style="padding:50px 0" >
</div>


<div>
<h2>Cirrus Cloud YMS</h2>
</div>


</div>


</div>

<?php 
if(isset($_GET['error'])){
/*echo " <div class=col-lg-12>
    <div class='alert alert-success fade in'>
    <a href='index.php' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><font style='font-size:30px;'> Logout Successfully!!! </font></center></strong></div></div> ";*/
	echo"<script>
	swal('Success', 'You are Now Logout!!', 'success')</script>";
}
if(isset($_GET['session_time_error'])){
/*echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='index.php' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><font style='font-size:30px;'>You are not User Please Login!!! </font></center></strong></div></div> ";*/
		echo"<script>
	swal('Warning!','You are not User Please Login!!', 'warning')</script>";


}
if(isset($_GET['session_error'])){
/*echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='index.php' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><font style='font-size:30px;'>!!You are not User Please Login!! </font></center></strong></div></div> ";*/
	echo"<script>
	swal('Warning!','You are not User Please Login!!', 'warning')</script>";


}
if(isset($_GET['singuperror'])){

/* echo "<div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='index.php' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2>OOPs....User Alreay Exists Please Try Another One!!!</h2></center></strong></div></div> ";*/

echo"<script>
	swal('Warning!','OOPs...User Alreay Exists Please Try Another One!!', 'warning')</script>";
}
if(isset($_GET['singupdone'])){
echo"<script>
	swal('Done', 'Thanks for Waying With Us Please Login!!', 'success')</script>";
}
if(isset($_GET['wrong'])){
	echo"<script>
	swal('Warning!','Wrong Email or Password!!', 'warning')</script>";


}

?>

<div class="container col-md-4"  id="loginbtn" >
<div class="row">
<div class="text-center" style="padding:50px 0" >
	<div class="logo">LogIn</div>
<div class="box" onclick="login()"> <span></span> </div></div>
</div>
</div>


<div class="container col-md-4"  id="demobtn" style="display:none;">
<div class="row">
<div class="text-center" style="padding:50px 0" >
	<div class="logo">Schedule Your Demo</div>
<div class="box" onclick="demo()"> <span></span> </div></div>
</div>
</div>



	
<div class="container col-md-4" style="display:none;" id="loginform">
<div class="row">
<div class="text-center" style="padding:50px 0">
	<div class="logo">Login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form   id="login-form" name="login-form" class="text-left" method="post" action="login_db.php" >
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Email<span style="color:red;">&lowast;</span></label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password <span style="color:red;">&lowast;</span></label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Enter Your Password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">Remember</label>
					</div>
				</div>
				<button type="submit" name="submit" class="login-button" id="btnlog" ><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Forgot your password? <a href="#">Click here</a></p>
				<p>New user? <a href="#"onclick="signup()">Create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>
</div>
<!--   login conainer ends here -->


<div class="container col-md-4"  id="DEMOform" >
<div class="row">
<div class="text-center" style="padding:50px 0">
	<div class="logo">Schedule Your Demo</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" name="register-form" method="post" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">User Name</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="Username">
					</div>
                    <div class="form-group">
						<label for="reg_fullname" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="Full Name">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Set Password">
					</div>
					
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="reg_email" name="reg_email" placeholder="Email-Id">
					</div>
                    <div class="form-group">
						<label for="cmname" class="sr-only">Company Name</label>
						<input type="text" class="form-control" id="reg_cname" name="reg_cname" placeholder="Company Name" required>
					</div>
					
					
					<div class="form-group login-group-checkbox">
						<input type="radio" class="" name="reg_gender" id="reg_male" placeholder="username">
						<label for="reg_male">Male</label>
						
						<input type="radio" class="" name="reg_gender" id="reg_female" placeholder="username">
						<label for="reg_female">Female</label>
					</div>
                    <div class="form-group">
						<label for="cmname" class="sr-only">Industry Name</label>
						<input type="text" class="form-control" id="reg_iname" name="reg_iname" placeholder="Industry Name" required>
					</div>
                    <div class="form-group">
                    <h6>Select Your Mode Of Communication</h6>
					</div>
                    <div class="form-group login-group-checkbox">
						<input type="radio" class="" name="reg_com" id="reg_phone" placeholder="commq">
						<label for="reg_phone">Phone</label>
						
						<input type="radio" class="" name="reg_com" id="reg_mail" placeholder="commq">
						<label for="reg_mail">E-mail</label>
                        
                        <input type="radio" class="" name="reg_com" id="reg_both" placeholder="commq">
						<label for="reg_both">Both</label>
					</div>
                 
					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree">
						<label for="reg_agree">I agree with <a href="#">terms</a></label>
					</div>
                    
                   <div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="sub_agree" name="reg_agree1">
						<label for="sub_agree">Subscribe to our product update</label>
					</div>
                    
                    
                    
                    
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Already have an account? <a href="#" onclick="login()">Login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div></div>
</div>
</div>
<!--  Demo conainer ends here -->


<div class="container col-md-4" style="display:none;" id="SIGNform">
<div class="row">
<div class="text-center" style="padding:50px 0">
	<div class="logo">Sign-Up</div>
	<!-- Main Form-->
	<div class="login-form-1">
		<form id="signup-form"  method="post" name="signup-form" action="signup_db.php" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="sg_mail" name="sg_mail" placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
			<input type="password" class="form-control" id="sg_password" name="sg_password" placeholder="Enter 8 Digits Password">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" id="passlbl" class="sr-only">Password Confirm</label>
		<input type="password" class="form-control" id="sg_password_confirm" name="sg_password_confirm" placeholder="Confirm password">
					</div>
					
			
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="sg_fullname" name="sg_fullname" placeholder="Full name">
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="radio" value="Male" name="sg_gender" id="sg_male">
						<label for="sg_male">Male</label>
						
						<input type="radio" value="Female" name="sg_gender" id="sg_female" >
						<label for="sg_female">Female</label>
					</div>
                   
					<div class="form-group login-group-checkbox">
						<input type="checkbox"  id="sg_agree" name="sg_agree" required>
						<label for="sg_agree">I agree with <a href="#">terms</a></label>
					</div>
				</div>
	<button type="submit" name="submit"  id="btnsg" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Already have an account?<a href="#" onclick="login()">Login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>
</div>
<!--  SIGN conainer ends here -->

	



<div class="container col-md-3"  id="signbtn" >
<div class="row">
<div class="text-center" style="padding:50px 0" >
	<div class="logo">Sign-Up</div>
<div class="box" onclick="signup()"> <span></span> </div></div>
</div>
</div>




</body>
<script>
(function($) {
    "use strict";
	
	// Options for Message
	//----------------------------------------------
  var options = {
	  'btn-loading': '<i class="fa fa-spinner fa-pulse"></i>',
	  'btn-success': '<i class="fa fa-check"></i>',
	  'btn-error': '<i class="fa fa-remove"></i>',
	  'msg-success': 'All Good! Redirecting...',
	  'msg-error': 'Wrong login credentials!',
	  'useAJAX': true,
  };

	// Login Form
	//----------------------------------------------
	// Validation
  $("#login-form").validate({
  	rules: {
      lg_username: "required",
  	  lg_password: "required",
    },
  	errorClass: "form-invalid"
  });
  
	// Form Submission
/*  $("#login-form").submit(function() {
  	remove_loading($(this));
		
		if(options['useAJAX'] == true)
		{
			// Dummy AJAX request (Replace this with your AJAX code)
		  // If you don't want to use AJAX, remove this
  	  dummy_submit_form($(this));
		
		  // Cancel the normal submission.
		  // If you don't want to use AJAX, remove this
  	  return false;
		}*/
		
		
  });
	
	// Register Form
	//----------------------------------------------
	// Validation
  $("#signup-form").validate({
  	rules: {
      sg_mail: "required",
  	  sg_password: {
  			required: true,
  			minlength: 8
  		},
   		sg_password_confirm: {
  			required: true,
  			minlength: 8,
  			equalTo: "#signup-form [name=sg_password]"
  		},
  		sg_email: {
  	    required: true,
  			email: true
  		},
  		sg_agree: "required",
    },
	  errorClass: "form-invalid",
	  errorPlacement: function( label, element ) {
	    if( element.attr( "type" ) === "checkbox" || element.attr( "type" ) === "radio" ) {
    		element.parent().append( label ); // this would append the label after all your checkboxes/labels (so the error-label will be the last element in <div class="controls"> )
	    }
			else {
  	  	label.insertAfter( element ); // standard behaviour
  	  }
    }
  });
////////////////////////////////////////////////////////////////
  // Form Submission
  $("#signup-form").submit(function() {
  	remove_loading($(this));
		
		if(options['useAJAX'] == true)
		{
			// Dummy AJAX request (Replace this with your AJAX code)
		  // If you don't want to use AJAX, remove this
  	  dummy_submit_form($(this));
		
		  // Cancel the normal submission.
		  // If you don't want to use AJAX, remove this
  	  return false;
		}
  });

	// Forgot Password Form
	//----------------------------------------------
	// Validation
  $("#forgot-password-form").validate({
  	rules: {
      fp_email: "required",
    },
  	errorClass: "form-invalid"
  });
  
	// Form Submission
  $("#forgot-password-form").submit(function() {
  	remove_loading($(this));
		
		if(options['useAJAX'] == true)
		{
			// Dummy AJAX request (Replace this with your AJAX code)
		  // If you don't want to use AJAX, remove this
  	  dummy_submit_form($(this));
		
		  // Cancel the normal submission.
		  // If you don't want to use AJAX, remove this
  	  return false;
		}
  });

	// Loading
	//----------------------------------------------
  function remove_loading($form)
  {
  	$form.find('[type=submit]').removeClass('error success');
  	$form.find('.login-form-main-message').removeClass('show error success').html('');
  }

  function form_loading($form)
  {
    $form.find('[type=submit]').addClass('clicked').html(options['btn-loading']);
  }
  
  function form_success($form)
  {
	  $form.find('[type=submit]').addClass('success').html(options['btn-success']);
	  $form.find('.login-form-main-message').addClass('show success').html(options['msg-success']);
  }

  function form_failed($form)
  {
  	$form.find('[type=submit]').addClass('error').html(options['btn-error']);
  	$form.find('.login-form-main-message').addClass('show error').html(options['msg-error']);
  }

	// Dummy Submit Form (Remove this)
	//----------------------------------------------
	// This is just a dummy form submission. You should use your AJAX function or remove this function if you are not using AJAX.
  function dummy_submit_form($form)
  {
  	if($form.valid())
  	{
  		form_loading($form);
  		
  		setTimeout(function() {
  			form_success($form);
  		}, 2000);
  	}
  }
	
})(jQuery);
</script>






<!-- flip beween form scrit here below -->
<script>
function login() {
    var y = document.getElementById("loginbtn");
	var x = document.getElementById("demobtn");
	var z= document.getElementById("signbtn");	
	var p= document.getElementById("loginform");
	var q= document.getElementById("DEMOform");	
	var r= document.getElementById("SIGNform"); 
	//var s= document.getElementById("layerbtn"); 

	    x.style.display = "block";
       y.style.display = "none";
	   z.style.display="block";
	   	  p.style.display="block";
		  q.style.display="none";
		  r.style.display="none";
		  //s.style.display="block";
	
}


function signup() {
    var y = document.getElementById("loginbtn");
	var x = document.getElementById("demobtn");
	var z= document.getElementById("signbtn");	
	var p= document.getElementById("loginform");
	var q= document.getElementById("DEMOform");	
	var r= document.getElementById("SIGNform"); 
	//var s= document.getElementById("layerbtn"); 

	    x.style.display = "block";
		r.style.display="block";
       y.style.display = "block";
	   z.style.display="none";
	   	  p.style.display="none";
		  q.style.display="none";
		  
}

function demo() {
    var y = document.getElementById("loginbtn");
	var x = document.getElementById("demobtn");
	var z= document.getElementById("signbtn");	
	var p= document.getElementById("loginform");
	var q= document.getElementById("DEMOform");	
	var r= document.getElementById("SIGNform"); 
	//var s= document.getElementById("layerbtn");

	    x.style.display = "none";
       y.style.display = "block";
	   z.style.display="block";
	   	  p.style.display="none";
		  q.style.display="block";
		  r.style.display="none";
		  //s.style.display="block";
}
</script>

<script>
var myInput = document.getElementById("sg_password");
var myInput2 = document.getElementById("sg_password_confirm");
var out = document.getElementById("passlbl");

myInput.onblur  = function() {
 // Validate length
  if(myInput.value.length < 8) {
 
  swal('Warning!','Please Enter 8 Digits Password!!', 'warning');
   		 }

  
}
myInput2.onblur  = function() {
  var str1 = $("#sg_password").val();
  var str2 = $("#sg_password_confirm").val();
  var n = str1.localeCompare(str2);
  if(n==1) {
 
  swal('Warning!', 'Password Not Matched!!', 'warning');
   		 }

  
}

</script>

</html>
