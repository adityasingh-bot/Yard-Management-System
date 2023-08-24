<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	 
?>

<?php 
  include('../include/db_config.php');
if( isset($_POST['vlicno']) && isset($_POST['vfname']) && isset($_POST['vlname'])  && isset($_POST['vcarrier'])  && isset($_POST['vallow']) && isset($_POST['vadd1']) && isset($_POST['vcity']) && isset($_POST['vnation']) && isset($_POST['vpcode']) &&  isset($_POST['vadd2']) && isset($_POST['vstate']) && isset($_POST['vnum']))
{
//echo print_r($_POST);
 $p=$_POST['vfname'];
 $q=$_POST['vlname'];
$r=$_POST['vcarrier'];
 $s=$_POST['vallow'];
 $t=$_POST['vadd1'];
  $u =$_POST['vcity'];
  $v =$_POST['vnation'];
$w=$_POST['vpcode'];
 $x=$_POST['vadd2'];
 $y=$_POST['vstate'];
 $z=$_POST['vnum'];
  $a=$_POST['vlicno'];
   
$que="select * from yms_driver where binary LISENCE_NUM='$a'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)
   {
        $qe="update yms_driver set FNAME='$p',LNAME='$q', CARRIER='$r', ALLOWED='$s',ADDRESS='$t',CITY='$u', COUNTRY='$v',              POSTAL_CODE='$w',ADDRESS_2='$x',STATE='$y', PHONE_NUM='$z'  where binary LISENCE_NUM='$a'";
   //to execute the query
   mysqli_query($con,$qe);
    }
        else
          {
	echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Drivers Not Exists Please Try Another One!!!</h2></center></strong></div></div> ";
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
