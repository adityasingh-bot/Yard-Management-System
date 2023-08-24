
<!DOCTYPE html>

<html>

<head>
	<!-- Meta-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="description" content="Tenant Management System">
	<meta name="keywords" content="tenant, bill, management, building, bed, room, staff, payroll, rent, expense, utility, account, profession, id">
	<meta name="author" content="TPS">
	<title>Tenant 1 | Login</title>
	<link rel="icon" type="image/*" href="../logo.png">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="http://tameasy.com/tenant12/assets/app/css/bootstrap.css">
	<!-- Vendor CSS-->
	<link rel="stylesheet" href="http://tameasy.com/tenant12/assets/vendor/fontawesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="http://tameasy.com/tenant12/assets/vendor/animo/animate+animo.css">
	<!-- App CSS-->
	<link rel="stylesheet" href="http://tameasy.com/tenant12/assets/app/css/app.css">
	<link rel="stylesheet" href="http://tameasy.com/tenant12/assets/app/css/common.css">

</head>
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
<body>
	<!-- START wrapper-->
	<div class="row row-table page-wrapper">
		<div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
			<!-- START panel-->
			<div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
				<div class="panel-heading text-center">
					<a href="login.html#">
						<img src="../logo.png" alt="Image" class="block-center img-rounded">
					</a>
					<p class="text-center mt-lg">
						<strong style="color: azure;font-size: 25px;font-style: italic;">Cirrus YMS</br>USER PANEL</strong>
					</p>
				</div>
												<div class="panel-body">
					<form method="post" action="userlogin_db.php" >
						<div class="form-group has-feedback">
							<input name="username" type="text" placeholder="Enter username" class="form-control" required>
							<span class="fa fa-user form-control-feedback text-muted"></span>
						</div>
						<div class="form-group has-feedback">
							<input name="password" type="password" placeholder="Password" class="form-control" required>
							<span class="fa fa-lock form-control-feedback text-muted"></span>
						</div>
						<input type="submit" class="btn btn-block btn-primary" value="Login">
					</form>				</div>
			</div>
        <!-- END panel-->
		</div>
	</div>
	<!-- END wrapper-->
	<!-- START Scripts-->
	<!-- Main vendor Scripts-->
	<script src="http://tameasy.com/tenant12/assets/vendor/jquery/jquery.min.js"></script>
	<script src="http://tameasy.com/tenant12/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Animo-->
	<script src="http://tameasy.com/tenant12/assets/vendor/animo/animo.min.js"></script>
	
	
	<script type="text/javascript">
		$(document).ready(function () { 
			window.setTimeout(function() {
			    $(".alert").slideUp(500, function(){
			        $(this).remove(); 
			    });
			}, 5000); 
		});
	</script>
</body>

</html>
