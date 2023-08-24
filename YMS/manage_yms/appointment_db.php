<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	?>
<?php 
  include('../include/db_config.php');
if( isset($_POST['app_num'])   && isset($_POST['yard']) && isset($_POST['service_org'])  &&  isset($_POST['dock'])  &&  isset($_POST['dockdoor_in'])  && isset($_POST['equip_name'])  && isset($_POST['app_type']) && isset($_POST['datepicker']) &&  isset($_POST['start']) && isset($_POST['end']) &&  isset($_POST['driver_name']) && isset($_POST['app_status']) && isset($_POST['doc_type']) && isset($_POST['doc_num'])  && isset($_POST['app_car']) &&  isset($_POST['app_ship'])  ){
//echo print_r($_POST);
 $a=$_POST['app_num'];
 $b= $_POST['yard'];
 $c= $_POST['service_org'];
 $d=$_POST['dock'];
 $e=$_POST['dockdoor_in'];
 $f= $_POST['equip_name'];
 
 $g=$_POST['app_type'];
 $h=$_POST['datepicker'];
 $i= $_POST['start'];

 $j=$_POST['end'];
 $p=$_POST['driver_name'];
 $k=$_POST['app_status'];
 $l=$_POST['doc_type'];
 $m=$_POST['doc_num'];
 $n= $_POST['app_car']; 
  $o=$_POST['app_ship'];
  



$que="select * from app_yms where binary APP_NUM='$a'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
       	 
	echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Appointnumber  Exists Please Try Another One!!!</h2></center></strong></div></div> ";
    }
	
        else
          {
	
	
	 $qe="insert into app_yms (APP_NUM, YARD, SERVICE_ORG, DOCK, DOCK_DOOR, EQUIP_NAME, APP_TYPE, DATE, START, END, DRIVER_NAME, APP_STATUS,  DOC_TYPE, DOC_NUM, APP_CAR, APP_SHIP)
values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$p','$k','$l','$m','$n','$o')";
   //to execute the query
   mysqli_query($con,$qe);
  echo " <div class=col-lg-12>
    <div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> Success!! Appointment Scheduled Done</h2></center></strong></div></div> ";
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
