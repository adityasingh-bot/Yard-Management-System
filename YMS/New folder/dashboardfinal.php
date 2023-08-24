<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
	margin-left: 20%; 
  overflow:auto;
  background-color:#212529;
	width: auto;
	height: auto;
	}

.topnav a {
  float: left;
  color: #868e96;
  text-align: center;
	margin-left: 2%;
	margin-top: 1%;
	margin-bottom: 1%;
  padding: 14px 14px;
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
	text-align: center;
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

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
	
	
</head>
<body>
<div class="sidenav">
	<a href="#"><img src="logo.png"/>	</a>
  <a href="#about">Yard Management</a>
  <a href="#services">Yard Setup</a>
  <a href="#clients">Create user</a>
  <a href="#contact">Contact</a>
</div>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div style="padding-left:22%">
 <h2>Dashboard data here</h2>
</div>

</body>
</html>
