<?php 
  include('../include/db_config.php');
if( isset($_POST['app_num1']) && isset($_POST['scac']) && isset($_POST['equip_num'])  && isset($_POST['doc_type']) && isset($_POST['doc_num']) && isset($_POST['park_area'])  && isset($_POST['park_spot']) && isset($_POST['dock_area']) && isset($_POST['driver1']) && isset($_POST['shipnum1']) && isset($_POST['carrier1']) && isset($_POST['equip_name']) && isset($_POST['yard1']) && isset($_POST['equip_status'])  && isset($_POST['checkin_purpose']))
{
//echo print_r($_POST);
 $a=$_POST['app_num1'];
 $b=$_POST['scac'];
 $c= $_POST['equip_num'];
 $d=$_POST['doc_type'];
 $e= $_POST['doc_num'];
  $f=$_POST['park_area'];
 $g=$_POST['park_spot'];
 $h= $_POST['dock_area'];
 $x=$_POST['driver1'];
 $y=$_POST['shipnum1'];
 $z= $_POST['carrier1'];
  $w= $_POST['equip_name'];
   $i= $_POST['yard1'];
   $j= $_POST['equip_status'];
    $k= $_POST['checkin_purpose'];
	
$que1="select * from checkin where binary EQUIP_NUM ='$c'";
$run2= mysqli_query($con,$que1);

 if(mysqli_num_rows($run2)> 0)
{
		echo " <div class=col-lg-12>
    		<div class='alert alert-danger fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2> OOPs... Eqipment Already Checked-In !!</h2></center></strong></div></div> ";	
					
    		}
	  
		  else
		  {
		 $qe="insert into checkin (YARD,APP_NUM, SCAC, EQUIP_NUM, DOC_TYPE, DOC_NUM, PARK_AREA, PARK_SPOT, DOCK, DRIVER, SHIP_NUM, CARRIER,EQUIP_NAME,EQUIP_STATUS,CHECKIN_PURPOSE)
		   	values('$i','$a','$b','$c','$d','$e','$f','$g','$h','$x','$y','$z','$w','$j','$k')";
   //to execute the query
		   mysqli_query($con,$qe);
		  echo " <div class=col-lg-12>
    		<div class='alert alert-success fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2>Success !! Equipment Checked-In !!</h2></center></strong></div></div> ";
		  }
	
}//first if		  
 
 else{
echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPS!! Data Not Found!! </h2></center></strong></div></div> ";
}
?>
