<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		

?>

<?php 
  include('../include/db_config.php');
  $L_ORG = $_GET["ORG"];
$recordset = mysqli_query($con,"select * from create_yard where ORG='$L_ORG'");


$ob=mysqli_fetch_object($recordset);
echo json_encode($ob);


?>
