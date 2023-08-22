<?php 
  include('../include/db_config.php');
if( isset($_POST['mscac']) && isset($_POST['mequip_num']) && isset($_POST['marea']) && isset($_POST['mspot']) && isset($_POST['to_area']) && isset($_POST['to_spot'])  && isset($_POST['to_user']) && isset($_POST['hidden_yard']) )
{
//echo print_r($_POST);
 $a=$_POST['mscac'];
 $b= $_POST['mequip_num'];
$c=$_POST['marea'];
 $d=$_POST['mspot'];
  $e=$_POST['to_area'];
 $f=$_POST['to_spot'];
 $g= $_POST['to_user'];
 $h=$_POST['hidden_yard'];


	
$que1="select * from move_equipment where binary USER ='$g'";
$run2= mysqli_query($con,$que1);

 if(mysqli_num_rows($run2)> 0)
{
		echo " <div class=col-lg-12>
    		<div class='alert alert-danger fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2> OOPs... User Already Moving !!</h2></center></strong></div></div> ";	
					
    		}
	  
		  else
		  {
		 $qe="insert into move_equipment (YARD, SCAC, EQUIP_NUM,F_AREA,F_SPOT,T_AREA, T_SPOT, USER)
		   	values('$h','$a','$b','$c','$d','$e','$f','$g')";
   //to execute the query
		   mysqli_query($con,$qe);
		  echo " <div class=col-lg-12>
    		<div class='alert alert-success fade in'>
    			<a href='#' class='close' data-dismiss='alert'>&times;</a>
    				<strong><center><h2> Move Request Send To User!!</h2></center></strong></div></div> ";
		  }
	
}//first if		  
 
 else{
echo " <div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2> OOPS!! Data Not Found!! </h2></center></strong></div></div> ";
}
?>
