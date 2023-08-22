<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:index.php?session_error');   
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
          <a class="navbar-brand" href="dashboard.php">Cirrus YMS</a>
        </div>
	    <p style="margin-left: 40%;margin-right: 10%;"><a  href="logout.php"><i class="glyphicon glyphicon-user" style="font-size:20px;color:#939393; align-content:flex-end; margin-top: 12px; margin-left: 50px">Welcome:<?php echo $_SESSION['USER'];?></i></a>
			
			
	      <a  href="#home"><i class="glyphicon glyphicon-log-out" style=" float: right; font-size:20px;color:#939393; align-content:flex-end; margin-top: 12px; margin-left: 40px">LogOut</i></a>
		  </p>
		  
		  
		  
		  
		  
		  
        <ul class="nav navbar-nav" >
          
          
          <div style="float: right;"></div>
			
      </ul>
      </div>
    </nav>
	 
	  
	  
	  
  <div class="col-lg-12 table-responsive" id="configurelist"> 
   
</div>
<script>
function showdetails(button)    {
  var EQUIP_NUM = button.id;
$.ajax({
  url:"completemove_request_db.php",
  method:"GET",
  data:{"EQUIP_NUM":EQUIP_NUM},
  success: function(response){
 console.log(response);
   

 var ob = JSON.parse(response);

  
  }
  });

 }
</script>
	   <script>
$(document).ready(function(){
setInterval(function(){
$("#configurelist").load('usermove_list_ajax.php')
}, 250);
});
</script>
	  