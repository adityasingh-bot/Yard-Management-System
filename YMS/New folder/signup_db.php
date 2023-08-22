<?php 
  include('include/db_config2.php');
if( isset($_POST['submit']) ){
//echo print_r($_POST);
 $p=$_POST['sg_mail'];
 $q=$_POST['sg_password'];
 $r=$_POST['sg_fullname'];
 $s=$_POST['sg_gender'];


   
$que="select * from signup where binary SG_MAIL='$p'";
//$result = mysqli_query($con,$que);
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)
    {
     header('location:index.php?singuperror');
	
    }
      else
          {
		  
		$qe="insert into signup(SG_MAIL, SG_PASSWORD, SG_NAME, SG_GENDER)
		   					values('$p','$q','$r','$s')";
   //to execute the query
   mysqli_query($con,$qe);
	header('location:index.php?singupdone');
            }
	
}//first if		  
 
 else{

header('location:index.php');
}
?>
