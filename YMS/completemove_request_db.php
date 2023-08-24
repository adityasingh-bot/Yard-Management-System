<?php 
 include('../include/db_config.php');
  $EQUIP_NUM = $_GET["EQUIP_NUM"];
$recordset = mysqli_query($con,"select * from move_equipment where EQUIP_NUM='$EQUIP_NUM'");

$recordset = mysqli_query($con,"delete from move_equipment where EQUIP_NUM='$EQUIP_NUM'");
$recordset = mysqli_query($con,"del from move_equipment where EQUIP_NUM='$EQUIP_NUM'");

$ob=mysqli_fetch_object($recordset);
echo json_encode($ob);


?>