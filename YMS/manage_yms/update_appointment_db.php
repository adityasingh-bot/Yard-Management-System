<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	?>
<?php 
  include('../include/db_config.php');
if( isset($_POST['APP_NUM']) && isset($_POST['app_title']) && isset($_POST['yard']) && isset($_POST['equip_name']) && isset($_POST['datepicker']) &&  isset($_POST['start']) && isset($_POST['end']) &&  isset($_POST['driver_name']) && isset($_POST['doc_type']) && isset($_POST['doc_num']) && isset($_POST['app_status']) &&  isset($_POST['dock']) && isset($_POST['app_car']) &&  isset($_POST['app_ship']) ){
//echo print_r($_POST);
 $a=$_POST['APP_NUM'];
 $c= $_POST['app_title'];
 $d=$_POST['yard'];
 $e=$_POST['equip_name'];
 $f=$_POST['datepicker'];
 $g=$_POST['start'];
  $h=$_POST['end'];
 $i=$_POST['driver_name'];
 $j=$_POST['doc_type'];
  $k=$_POST['doc_num'];
 $l=$_POST['app_status'];
 $m=$_POST['dock'];
 $n=$_POST['app_car'];
 $o=$_POST['app_ship'];

$que="select * from app_yms where binary APP_NUM='$a'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
  $qe="update app_yms set APP_TITLE='$c', YARD='$d', EQUIP_NAME='$e',DATE='$f' ,START='$g',END='$h',
  DRIVER_NAME='$i', DOC_TYPE='$j', DOC_NUM='$k', APP_STATUS='$l', DOCK='$m', APP_CAR='$n', APP_SHIP='$o' where APP_NUM='$a' 	";
   //to execute the query
   mysqli_query($con,$qe);
  echo " <div class=col-lg-12>
    <div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> Success!! Appointment Update Done</h2></center></strong></div></div> ";

	}
        else
          {
		echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Appointnumber Not Exists Please Try Another One!!!</h2></center></strong></div></div> ";
    
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
