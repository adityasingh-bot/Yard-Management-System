<?php 
 include('../include/db_config.php');
  $EQUIP_NUM = $_GET["EQUIP_NUM"];
$recordset = mysqli_query($con,"select * from checkin where EQUIP_NUM='$EQUIP_NUM'");


$ob=mysqli_fetch_object($recordset);
echo json_encode($ob);


?>