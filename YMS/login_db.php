<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:index.php?session_error');   
}		
		
?>
<?php 
include('include/db_config2.php');
if( isset($_POST['submit']) ){
 $p=$_POST['lg_username'];
 $q=$_POST['lg_password'];



$que="select * from signup where binary SG_MAIL='$p' and SG_PASSWORD='$q'";
$run=mysqli_query($con,$que);

//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)
    {
     
	$_SESSION['USER']=$_POST['lg_username'];
      header('location:dashboard.php');
    }
        else
          {
		  
		header('location:index.php?wrong');
	
            }
	
}//first if		  
 
 else{

header('location:index.php');
}
?>
