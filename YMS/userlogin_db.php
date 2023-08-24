<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:yms_login_panel.php?session_error');   
}		
		
?>
<?php 
include('include/db_config.php');
if( isset($_POST['submit']) ){
 $p=$_POST['username'];
 $q=$_POST['password'];



$que="select * from create_user_yard where binary USER='$p' and PASS='$q'";
$run=mysqli_query($con,$que);

//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)
    {
     
	$_SESSION['USER']=$_POST['username'];
      header('location:userpanel.php');
    }
        else
          {
		  
		header('location:yms_login_panel.php?wrong');
	
            }
	
}//first if		  
 
 else{

header('location:yms_login_panel.php');
}
?>
