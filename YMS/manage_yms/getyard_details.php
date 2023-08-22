<?php
 include('../include/db_config.php');

$q = $_GET['q'];
$sql="SELECT * FROM checkin WHERE YARD = '$q'";
$result = mysqli_query($con,$sql);

echo "<table  class='table table-bordered table-striped table-highlight'>
        <center><h2>Equipment Details</h2></center>
            <tr>
                <th rowspan='2'>SCAC</th>
                <th rowspan='2'>Equipment</th>
                <th rowspan='2' > &nbsp;Details </th>
                <th colspan='2' style='text-align:center'>Yard</th>
                <th rowspan='2'>Type</th>
                 <th rowspan='2' > Status</th>
                   <th rowspan='2' >Appointment</th>
                    <th rowspan='2' >Shipment Num</th>
                    <th rowspan='2' >Carrier</th>
                    <th rowspan='2' >Driver</th>
                    <th rowspan='2'>Purpose</th>
            
            </tr>
          
                <tr>
           <th > Area</th>
                <th>Spot</th>

                </tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['SCAC'] . "</td>";
    echo "<td>" . $row['EQUIP_NUM'] . "</td>";
	
	echo "<th><span><input type='checkbox'  data-toggle='modal' data-target='#equip_content'></span> <a href='' data-toggle='modal' data-target='#trans_details'><span class='glyphicon glyphicon glyphicon-duplicate'></span></a> <a href='../setup_yms/equipment.php'> <span class='glyphicon glyphicon-th-list'></span></a></th>";
	
    echo "<td>" . $row['PARK_AREA'] . "</td>";
    echo "<td>" . $row['PARK_SPOT'] . "</td>";
    echo "<td>" . $row['EQUIP_NAME'] . "</td>";
	echo "<td>" . $row['EQUIP_STATUS'] . "</td>";
	echo "<td>" . $row['APP_NUM'] . "</td>";
    echo "<td>" . $row['SHIP_NUM'] . "</td>";
    echo "<td>" . $row['CARRIER'] . "</td>";
    echo "<td>" . $row['DRIVER'] . "</td>";
    echo "<td>" . $row['CHECKIN_PURPOSE'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

            
    