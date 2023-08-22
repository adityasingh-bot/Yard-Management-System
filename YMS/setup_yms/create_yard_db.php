<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
		
?>



<?php 
  include('../include/db_config.php');
if( isset($_POST['yardorg']) && isset($_POST['yardname']) && isset($_POST['serviceorg']) && isset($_POST['areanum'])  && isset($_POST['location']) && isset($_POST['dockarea']) &&  isset($_POST['areaspot']) &&  isset($_POST['start']) && isset($_POST['end'])){
//echo print_r($_POST);
 $p=$_POST['yardorg'];
 $q=$_POST['yardname'];
 $r=$_POST['serviceorg'];
 $s=$_POST['location'];
 $t=$_POST['areanum'];
 //$t=$_POST['material_account'];
 $u=$_POST['dockarea'];
 $v=$_POST['areaspot'];
//$v=$_POST['cost_enabled'];
 $w=$_POST['start'];
 $x=$_POST['end'];
   
$que="select * from create_yard where binary ORG='$p'";
$run=mysqli_query($con,$que);

//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)
    {
      echo "<div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2>OOPs....Oraganisation Alreay Created Yard Please Try Another One!!!</h2></center></strong></div></div> ";
	echo "success";
    }
        else
          {
		  
		  $qe="insert into create_yard (ORG, NAME, SERVICE_ORG, LOCATION,DOCKAREA, AREA_NUM,SPOT_NUM,START_TIME, END_TIME)
		   	values('$p','$q','$r','$s','$u','$t',$v,'$w','$x')";
   //to execute the query
   mysqli_query($con,$qe);
	
            }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
