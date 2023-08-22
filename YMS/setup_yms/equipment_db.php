<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		

?>

<?php 
  include('../include/db_config.php');
if( isset($_POST['e_name']) && isset($_POST['e_desc']) && isset($_POST['e_cat']) && isset($_POST['e_code']) && isset($_POST['dim_unit']) &&  isset($_POST['dim_length']) && isset($_POST['dim_width']) && isset($_POST['dim_height']) &&  isset($_POST['weight_unit']) && isset($_POST['e_weight']) && isset($_POST['e_max_weight']) && isset($_POST['volume_unit']) && isset($_POST['e_volume'])){
//echo print_r($_POST);
 $p=$_POST['e_name'];
 $q=$_POST['e_desc'];
 $r=$_POST['e_cat'];
 $s=$_POST['e_code'];
 
 $u1=$_POST['dim_unit'];
 $t=$_POST['dim_length'];
 $u=$_POST['dim_width'];
 $v=$_POST['dim_height'];

 $u2=$_POST['weight_unit'];
  $w=$_POST['e_weight'];
 $x=$_POST['e_max_weight'];
 
  $u3=$_POST['volume_unit'];
 $y=$_POST['e_volume'];

$que="select * from equipment_yard where binary E_CODE='$s'";
$run=mysqli_query($con,$que);

//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)
    {
      echo "<div class=col-lg-12>
    <div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2>OOPs...Equipment Alreay Created Yard Please Try Another One!!!</h2></center></strong></div></div> ";
	echo "success";
    }
        else
          {
		  
		  $qe="insert into equipment_yard   											            (E_NAME,E_DESC,E_CAT,E_CODE,DIM_UNIT,DIM_LEN,DIM_WID,DIM_HEI,WEI_UNIT,E_WEI,E_MAX_WEI,VOL_UNIT,E_VOL)
		   	values('$p','$q','$r','$s','$u1',$t,$u,$v,'$u2',$w,$x,'$u3',$y)";
   //to execute the query
   mysqli_query($con,$qe);
	
            }
	
}//first if		  
 
 else{

header('location:../index.php');
}
?>
