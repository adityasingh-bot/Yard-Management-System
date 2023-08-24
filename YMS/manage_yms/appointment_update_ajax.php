<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
?>

<?php 
  include('../include/db_config.php');
  $L_ORG = $_GET["APP_NUM"];
$recordset = mysqli_query($con,"select * from app_yms where APP_NUM='$L_ORG'");


$ob=mysqli_fetch_object($recordset);
echo json_encode($ob);


?>
