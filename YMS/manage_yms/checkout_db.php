<?php 
  include('../include/db_config.php');
if( isset($_POST['equip_num']) && isset($_POST['carrier']) && isset($_POST['driver']) && isset($_POST['scac']) && isset($_POST['app_num'])  && isset($_POST['ship_num']) && isset($_POST['equip_name'])  && isset($_POST['doc_type']) && isset($_POST['doc_num']) && isset($_POST['checkoutfrom_dock'])   && isset($_POST['checkoutfrom_area']) && isset($_POST['checkoutfrom_spot']) && isset($_POST['checkout_attach']) && isset($_POST['checkout_desc']))
{
// echo print_r($_POST);
    $a=$_POST['equip_num'];
    $b=$_POST['carrier'];
    $c=$_POST['driver'];
    $d=$_POST['scac'];
	$e=$_POST['app_num'];
    $f=$_POST['ship_num'];
	$g=$_POST['equip_name'];
	$h=$_POST['doc_type'];
	$i=$_POST['doc_num'];
 	$j=$_POST['checkoutfrom_dock'];
	$k=$_POST['checkoutfrom_spot'];
 	$l=$_POST['checkoutfrom_area'];
 	$m=$_POST['checkout_attach'];
 	$n=$_POST['checkout_desc'];

$que="select * from checkin where binary EQUIP_NUM ='$a'";
$run= mysqli_query($con,$que);

 if(mysqli_num_rows($run)> 0)
{
// to insert into checkout
		 $qe="insert into checkout (EQUIP_NUM, CARRIER, DRIVER, SCAC, APP_NUM, SHIP_NUM, EQUIP_NAME, DOC_TYPE, DOC_NUM, DOCK, PARK_SPOT, 										PARK_AREA ,ATTACH, DETAILS)
 values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
 // to delete from checkin
 $qe1="delete from checkin where EQUIP_NUM ='$a'"; 

   	//to execute the query
		 mysqli_query($con,$qe);
		  mysqli_query($con,$qe1);
		  echo " <div class=col-lg-12>
    		<div class='alert alert-success fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2>Success !! Equipment Checked-Out !!</h2></center></strong></div></div> ";	
    		}
	  
		  else
		  {
		echo " <div class=col-lg-12>
    		<div class='alert alert-danger fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2> OOPs... Eqipment Already Checked-In !!</h2></center></strong></div></div> ";
		 		 }
	
}//first if		  
 
 else{
echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPS!! Data Not Found!! </h2></center></strong></div></div> ";
}
?>
