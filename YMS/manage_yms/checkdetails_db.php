<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
?>
<?php 
  include('../include/db_config.php');
if(isset($_POST['APP_NUM']) && isset($_POST['app_date'])  && isset($_POST['start1']) )
{
 //echo print_r($_POST);
 $a=$_POST['APP_NUM'];
 $b=$_POST['app_date'];
 $c= $_POST['start1'];

 
$que="select DATE, START from app_yms where binary  DATE= '$b' and START='$c' and APP_NUM='$a' ";
$que1="select START from app_yms where binary START ='$c'";
$run2= mysqli_query($con,$que1);
//$run=mysqli_query($con,$que);
$run=mysqli_query($con,$que);
 if(mysqli_num_rows($run2)> 0)
 {
  if(mysqli_num_rows($run)> 0)
   	 {
		echo " <div class=col-lg-12>
    		<div class='alert alert-success fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2> Success!! Appointment Data Verify </h2></center></strong></div></div> ";	
					
    		}
			else
          	{
				echo " <div class=col-lg-12>
    				<div class='alert alert-danger fade in'>
    					<a href='#' class='close' data-dismiss='alert'>&times;</a>
    						<strong><center><h2> OOPs..Appointment Data  Mismatch !!</h2></center></strong></div></div> ";
         			 }
		  
	}	  
		  else{
		  $recordset = mysqli_query($con,"select * from app_yms WHERE APP_NUM='$a' ");
		while($record = mysqli_fetch_array($recordset))
		 
		  echo " <div class=col-lg-12>
    				<div class='alert alert-danger fade in'>
    					<a href='#' class='close' data-dismiss='alert'>&times;</a>
    						<strong><center><h2>Appointment Time  Mismatch  ".$record["START"]."  !!</h2></center></strong></div></div> ";
		  
		  		}
	
}//first if		  
 
 else{
echo " <div class=col-lg-12>
    <div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPS!! Appointment Data Not Found!! </h2></center></strong></div></div> ";
}
?>
