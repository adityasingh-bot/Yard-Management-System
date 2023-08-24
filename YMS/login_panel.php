
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
	<!-- Modernizr JS Script-->
	<script src="http://tameasy.com/tenant12/assets/vendor/modernizr/modernizr.js" type="application/javascript"></script>
	<!-- FastClick for mobiles-->
	<script src="http://tameasy.com/tenant12/assets/vendor/fastclick/fastclick.js" type="application/javascript"></script>
</head>

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
						<strong style="color: azure;font-size: 25px;font-style: italic;">Cirrus YMS</br>ADMIN PANEL</strong>
					</p>
				</div>
												<div class="panel-body">
					<form action="http://tameasy.com/tenant12/auth/signin" class="mb-lg" method="post" data-parsley-validate="" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="246153286cce25f96432e1c8fb194228" />                               
						<div class="form-group has-feedback">
							<input name="username" type="text" placeholder="Enter username" class="form-control" required>
							<span class="fa fa-user form-control-feedback text-muted"></span>
						</div>
						<div class="form-group has-feedback">
							<input name="password" type="password" placeholder="Password" class="form-control" required>
							<span class="fa fa-lock form-control-feedback text-muted"></span>
						</div>
						<button type="submit" class="btn btn-block btn-primary">Login</button>
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
	<script src="http://tameasy.com/tenant12/assets/vendor/parsley/parsley.min.js"></script>
	<!-- Custom script for pages-->
	<script src="http://tameasy.com/tenant12/assets/app/js/pages.js"></script>
	<!-- END Scripts-->
	
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
