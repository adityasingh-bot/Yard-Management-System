<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
?>

<?php 
  include('../include/db_config.php');
  $L_ORG = $_GET["equip_num"];
$recordset = mysqli_query($con,"select * from checkin where EQUIP_NUM='$L_ORG'");


$ob=mysqli_fetch_object($recordset);
echo json_encode($ob);


?>
