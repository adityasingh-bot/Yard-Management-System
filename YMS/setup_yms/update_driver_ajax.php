<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
		
?>

<?php 
  include('../include/db_config.php');
  $LIS_NUM = $_GET["LISENCE_NUM"];
$recordset = mysqli_query($con,"select * from yms_driver where LISENCE_NUM='$LIS_NUM'");


$ob=mysqli_fetch_object($recordset);
echo json_encode($ob);


?>
