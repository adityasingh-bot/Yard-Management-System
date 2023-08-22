<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
		
?>


<?php 
  include('../include/db_config.php');
  if( isset($_POST['org']) && isset($_POST['name']) &&  isset($_POST['dockarea1']) &&  isset($_POST['areanum1']) && isset($_POST['areaspot1']) &&  isset($_POST['start1']) && isset($_POST['end1'])){
//echo print_r($_POST);
 $p=$_POST['org'];
 $q=$_POST['name'];
 $w=$_POST['start1'];
 $x=$_POST['end1'];
 $s=$_POST['areanum1'];
 
    $u=$_POST['dockarea1'];
 $v=$_POST['areaspot1'];
$que="select * from create_yard where binary ORG='$p'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
	 $qe="update create_yard set NAME='$q',START_TIME='$w', END_TIME='$x', DOCKAREA='$u' ,AREA_NUM='$s',SPOT_NUM='$v' where ORG='$p'" ;
   //to execute the query
   mysqli_query($con,$qe);
   echo "<script> $('#view_modal').modal('hide')

	$('#myModal2').modal('show')</script>";
      
    }
        else
          {
		  
	echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Oraganisation Not Found !!!</h2></center></strong></div></div> ";
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
