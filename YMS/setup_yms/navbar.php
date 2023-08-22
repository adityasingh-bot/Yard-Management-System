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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
    .modal  {
    /*   display: block;*/
    padding-right: 0px;
    background-color:; 
    }
   
    .modal-dialog {
            top: 10%;
                width: 40%;
    
        }
      .modal-content {
                border-radius: 0px;
                border: none;
                top: 40%;
            }
            .modal-body {
                    background-color: #3772a1;
                     color: white;
                }
               
    
    
    
    </style>
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
          <li id="home"><a href="../dashboard.php">Home</a></li>
          <li id="define"><a href="create_yard.php" >Define Yard</a></li>
          <li id="confi" ><a href="configure_yard.php">Configure Yard</a></li>
          <li id="equip" ><a href="equipment.php">Equipment Types</a></li>
          
          <li id="drive" ><a href="create_driver.php">Drivers</a></li>
          
          <li id="sync"><a href="sync_dockdoor.php">Synchronise Dock Doors</a></li>
           <li id="create_user" ><a href="create_user.php">Create User</a></li>

           <li id="sync"> <a href="">WELCOME :<span style="color:#FFCC33;"><?php echo $_SESSION['USER'];?></span></a></li>
           
<div style="float: right;  ">
	 <span><a href="../logout.php"> <i class="glyphicon glyphicon-log-out" style="font-size:20px;color:#;#939393; align-content:flex-end; margin-top: 12px; margin-left: 50px">LogOut</i></a></span>
	</div>	
        </ul>
      </div>
    </nav>