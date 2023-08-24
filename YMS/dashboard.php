<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:index.php?session_error');   
}		
 
?>

<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
	margin-left: 20%; 
	align-content: center;
  overflow:hidden;
  background-color:#212529;
	width: auto;
	height: 50px;
	
	}

.topnav a {
  float: left;
  color: #868e96;
  text-align: center;
	margin-left: 2%;
	margin-top: 10px;
	margin-bottom: 5px;
	align-content: center;
	text-align:center;
  text-decoration: none;
  font-size: 17px;
	margin-right: 10px;
}

	.topnav p{
		float: right;
		  color: #868e96;
  text-align: center;
	margin-left: 2%;
  text-decoration: none;
  font-size: 17px;
	}

.topnav a:hover {
  color: #57616C;
}

.topnav a.active {
  background-color: #57616C;
	border-radius: 20px;
  color: white;
}
</style>
	
	<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 20%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#212529;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
	text-align: left;
    font-size: 17px;
    color: #868e96;
    display: block;
	margin-bottom: 10px;
}

.sidenav a:hover {
    color: #57616C;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

.col-md-2{
			margin-top: 150px;
			margin-left: 10px;
		}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
<style>
	
	.icons{
		margin-top: 100px;
		align-content: center;
		margin-left:380px;
		overflow: hidden;
	}
	th,td{
		border-bottom:thick;
		border-bottom-width: thick;
		border-bottom-color:#212529;
		border-bottom-right-radius: 30px;
		border-bottom-style: double;
		border-left: hidden;
		
		border-top: none;
		
		border-left-style:groove;
	}
	table{
		border: hidden;
	}
	</style>	
	
</head>
<body>
<div class="sidenav">
	<a href="#"><img src="logo.png">	</a>
  <a  href="#home"> <i class="glyphicon glyphicon-dashboard" style="font-size:15px; color:#;#939393;">&nbsp;Dashboard</i> </a>
  <a  href="manage_yms/checkin.php"> <i class="glyphicon glyphicon-home" style="font-size:15px; color:#;#939393;">&nbsp;Manage Yard</i> </a>
  <a  href="setup_yms/create_yard.php"> <i class="glyphicon glyphicon-user" style="font-size:15px; color:#;#939393;">&nbsp;Setup Yard</i> </a>
  <a  href="#home"> <i class="glyphicon glyphicon-wrench" style="font-size:15px; color:#;#939393;">&nbsp;Configure Dashboard</i> </a>
  <a  href="#home"> <i class="glyphicon glyphicon-signal" style="font-size:15px; color:#;#939393;">&nbsp;Charts</i> </a>
</div>

<div class="topnav">
	<span style="color:#FFFFFF;"> Welcome: <?php echo $_SESSION['USER'];?></span> </a></span>
	
	

	
	
	<div style="float: right ">
	 <span><a  href="logout.php"> <i class="glyphicon glyphicon-log-out" style="font-size:20px;color:#;#939393;">LogOut</i></a></span>
	</div>

	
	<div style="float: right ">
	 <span><a  href="#home"> &emsp;&emsp;</a></span>
	</div>

	
	<div style="float: right ">
	 <span><a  href="#home"> <i class="glyphicon glyphicon-time" style="font-size:20px;color:#;#939393;" title="Schedules">&nbsp;</i></a></span>
	</div>
	
	<div style="float: right ">
	 <span><a  href="#home"> <i class="glyphicon glyphicon-inbox" style="font-size:20px;color:#;#939393;" title="Messages">&nbsp;</i></a></span>
	</div>
	
	<div style="float: right ">
	 <span><a  href="#home"> <i class="glyphicon glyphicon-comment" style="font-size:20px;color:#;#939393;" title="Notification">&nbsp;</i></a></span>
	</div>
	
	
	<div style="float: right ">
	 <span><a  href="#home"> <i class="glyphicon glyphicon-bell" style="font-size:20px;color:#;#939393;" title="Alerts">&nbsp;</i></a></span>
	</div>
	
	
	
	<div style="float: right ">
	 <span><a  href="#home" > <i class="glyphicon glyphicon-cog" style="font-size:20px;color:#;#939393;" title="Settings">&nbsp;</i></a></span>
	</div>
	
</div>

<div style="padding-left:22%">
	
	
</div>
	<div class="icons">
	  <table width="878" height="257" border="1">
	    <tbody>
    <tr>
      <td width="286" height="206"><a href="manage_yms/checkin.php"><img src="yardmanagement.png" width="283" height="206" alt=""/></a></td>
      <td width="286"><a href="setup_yms/create_yard.php"><img src="yardsetup.png" width="283" height="276" alt=""/></a></td>
      <td width="511"><a href="setup_yms/mobile_ui.php"><img src="manageuser.png" width="283" height="276" alt=""/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#677480"><h5><em>Manage yard</em></h5></td>
      <td align="center" bgcolor="#677480"><h5><em>Setting up Yard</em></h5></td>
      <td align="center" bgcolor="#677480"><h5><em>User Management</em></h5></td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>
