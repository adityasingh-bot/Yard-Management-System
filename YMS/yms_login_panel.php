<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	
	
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
	
	</style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
</head>

<body>
	
	<div class="login-page">
  <div class="form">
    <!--<form class="register-form">
		<h2>hiii</h2>
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      
    </form>-->
    <form class="login-form" method="post" action="userlogin_db.php">
      <img src="../logo.png" width="150" height="68" alt=""/>
		&nbsp;&nbsp;
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="submit" name="submit">login</button>
      
    </form>
  </div>
</div>
	
	
</body>
	
	<script>
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
	</script>
</html>