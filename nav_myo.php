<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yard Manager</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/logosmall.png"/>
<!----jquery cdn--------------------------------------------------------------
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--->
  <!----------------------------------------------------------------------------------->

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <style>
		  .navbar {
			  background-color: #212529;
		  }
		  .navbar .a{
			  color: #606C78;
		  }
		  .navbar-default .navbar-nav>li>a {
			  color: #A7A7A7;
			  text-shadow: 2px;
		  	}
		  
		  .navbar-default .navbar-nav>li>a :hover{
			  color: #AF0A0D;
			  background-color: aliceblue;
		  	}
		  
		  .navbar-default .navbar-brand {
    color: #A7A7A7;
}
	  
	  </style>
    </head>
  <body>
   

 <nav class="navbar navbar-default">
      <div class="container-fluid" id="nav">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Cirrus YMS</a>
        </div>
        <ul class="nav navbar-nav" >
          <li id="home" ><a href="../dashboard.php">Home</a></li>
          <li id="define"><a href="checkin.php" >Check In</a></li>
          <li id="confi" ><a href="checkout.php">Check Out</a></li>
 <!--- <li id="equip" ><a href="#">Equipment Details</a></li>-->
          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dock Appointment <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="appointment.php">Create Appointment</a></li>
          <li><a href="#">Edit Appointment</a></li>
          <li><a href="app_update.php">Update Appointment</a></li>
        </ul>
      </li>
          
          <li id="sync"><a href="yard_workbench.php">Yard Work-bench</a></li>
           <li id="sync"><a href="yms.php">Yard View</a></li>
             <!---<li id="mobile_ui" ><a href="#">Yard Move</a></li>
              <li id="mobile_ui" ><a href="#">View Material</a></li>--->
                          <li id="sync"><a href="../logout.php">Logout</a></li>

           <li id="sync"> <a href="">WELCOME :<span style="color:#FFCC33;"><?php echo $_SESSION['USER'];?></span></a></li>
			
			
	<div style="float: right;  ">
	 <span><a  href="#home"> <i class="glyphicon glyphicon-log-out" style="font-size:20px;color:#;#939393; align-content:flex-end; margin-top: 12px; margin-left: 50px">LogOut</i></a></span>
	</div>
			
        </ul>
      </div>
    </nav>