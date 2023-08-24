<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	?>

<?php 
  include('../include/db_config.php');
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['licstate']) && isset($_POST['cname']) && isset($_POST['mname']) &&  isset($_POST['licno']) && isset($_POST['carrier'])  && isset($_POST['allow']) && isset($_POST['add1']) && isset($_POST['city']) && isset($_POST['nation']) && isset($_POST['pcode']) &&  isset($_POST['add2']) && isset($_POST['state']) && isset($_POST['num'])){
//echo print_r($_POST);
 $p=$_POST['fname'];
 $q=$_POST['lname'];
 $r=$_POST['licstate'];
 $s=$_POST['cname'];
 $t=$_POST['mname'];
 $u=$_POST['licno'];
 $v=$_POST['carrier'];
 $w=$_POST['allow'];
 $x=$_POST['add1'];
 $y =$_POST['city'];
 $z =$_POST['nation'];
 $a=$_POST['pcode'];
 $b=$_POST['add2'];
 $c=$_POST['state'];
 $d=$_POST['num'];
$que="select * from yms_driver where binary LISENCE_NUM	='$u'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
      echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....Oraganisation Alreay Driver Exists Please Try Another One!!!</h2></center></strong></div></div> ";
    }
	
        else
          {
		   $qe="insert into yms_driver (FNAME,LNAME,LISENCE_STATE,COMPANY,MNAME,LISENCE_NUM,CARRIER,ALLOWED,ADDRESS,CITY,COUNTRY,POSTAL_CODE,ADDRESS_2,STATE,PHONE_NUM)
		   	values('$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a','$b','$c',$d)";
   //to execute the query
   mysqli_query($con,$qe);
	
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
