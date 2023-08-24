<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	  
?>


<?php 
  include('../include/db_config.php');
if( isset($_POST['yard_org']) && isset($_POST['area_name']) && isset($_POST['area_desc']) && isset($_POST['area_order']) && isset($_POST['spot_name']) && isset($_POST['spot_alias']) &&  isset($_POST['spot_park']) ){
//echo print_r($_POST);
 $a=$_POST['yard_org'];
 $p=$_POST['area_name'];
 $q=$_POST['area_desc'];
 $r=$_POST['area_order'];
 $s=$_POST['spot_name'];
 $t=$_POST['spot_alias'];
 $u=$_POST['spot_park'];
 
$que="select * from create_yard where binary NAME='$a'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
        $qe="insert into configure_yard (YARD_NAME,AREA_NAME,AREA_DESC,AREA_PARK_ORDER,SPOT_NAME,SPOT_ALIAS,SPOT_PARK_ORDER)
		   	values('$a','$p','$q','$r','$s','$t','$u')";
   //to execute the query
   mysqli_query($con,$qe);
    }
	
        else
          {
		 
	echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Yard Not Exists Please Try Another One!!!</h2></center></strong></div></div> ";
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
