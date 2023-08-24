<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
		  
?>

<?php 
  include('../include/db_config.php');
if(isset($_POST['yard-org']) && isset($_POST['service_org']) && isset($_POST['service_dock']) && isset($_POST['service_stag_area']) && isset($_POST['yard_dock']) && isset($_POST['yard_alias']) ){
	
	//print_r($_POST);
 $p=$_POST['yard-org'];
 $q=$_POST['service_org'];
 $r=$_POST['service_dock'];
 $s=$_POST['service_stag_area'];
 $t=$_POST['yard_dock'];
 $u=$_POST['yard_alias'];

 
$que="select * from sync_dock where binary SERVICE_ORG='$q' and SERVICE_DOCK='r'";
$run=mysqli_query($con,$que);
   if(mysqli_num_rows($run) > 0)


    {
       
     echo" NOt ohk for";
		 
	echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Yard Not Exists Please Try Another One!!!</h2></center></strong></div></div> ";
    }
	
        else
          {
		
	 $qe="insert into sync_dock (YARD_ORG,SERVICE_ORG,SERVICE_DOCK,SERVICE_STAG_AREA,YARD_DOCK,DOCK_DOOR)
		   	values('$p','$q','$r','$s','$t','$u')";
   //to execute the query
   mysqli_query($con,$qe);
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
