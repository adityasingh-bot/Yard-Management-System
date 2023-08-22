<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	?>
<?php 
  include('../include/db_config.php');
if( isset($_POST['e_name'])   && isset($_POST['pass']) && isset($_POST['e_desc'])  &&  isset($_POST['status'])  &&  isset($_POST['gender']) && isset($_POST['age'])  && isset($_POST['join'])  && isset($_POST['jointill']) && isset($_POST['email']) &&  isset($_POST['mno']) && isset($_POST['pex'])  ){
//echo print_r($_POST);
 $a=$_POST['e_name'];
 $b= $_POST['pass'];
 $c= $_POST['e_desc'];
 $d=$_POST['status'];
 $e=$_POST['gender'];
 $f=$_POST['age'];
 $g= $_POST['join'];
  $h=$_POST['jointill'];
 $i=$_POST['email'];
 $j=$_POST['mno'];
 $k= $_POST['pex'];

 	

$que="select * from create_user_yard where binary USER='$a'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
       	 
	echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPs....User Exists Please Try Different UserName!!!</h2></center></strong></div></div> ";
    }
	
        else
          {
	
	
	 $qe="insert into create_user_yard (USER, PASS, USER_DESC, STATUS, GENDER, AGE, JOIN_DATE, JOIN_TILL_DATE, EMAIL, MOBILE_NUM, PASS_EX)
values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
   //to execute the query
   mysqli_query($con,$qe);
  echo " <div class=col-lg-12>
    <div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> Success!!User Create Success!!</h2></center></strong></div></div> ";
          }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
