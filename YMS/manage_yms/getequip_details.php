<?php
include('../include/db_config.php');
$q1 = $_GET['q1'];
$sql="SELECT * FROM checkin WHERE YARD = '$q1'";
$result = mysqli_query($con,$sql);

echo "<table  class='table table-bordered table-striped table-highlight'>
      <center><h2>Move Equipment</h2></center>
            <tr>
               <th rowspan='2'> SCAC</th>
                <th rowspan='2'>Equipment</th>
                <th rowspan='2'> &nbsp;Details</th>
                <th rowspan='2'>Action</th>
               <th colspan='2'>From</th>
                 <th colspan='2'> To</th>
                 
                 <th  colspan='3' style='text-align:center'>Move Request</th>
                 
                
              </tr>
          
     <tr>
                
                  <th >Area</th>
                 <th >Spot</th>
                    <th >Area</th>
                 <th >Spot</th>
				  <th >Number</th>
                 <th >Status</th>
                 <th >Assigned To</th>
            
            </tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['SCAC'] . "</td>";
    echo "<td>" . $row['EQUIP_NUM'] . "</td>";
	
	echo "<th><span><input type='checkbox'  data-toggle='modal' data-target='#equip_content'></span> 
	<a href='' data-toggle='modal' data-target='#trans_details'><span class='glyphicon glyphicon glyphicon-duplicate'></span></a>
	 <a href='../setup_yms/equipment.php'> 
	<span class='glyphicon glyphicon-th-list'></span></a></th>";
	?>
 <th><button data-toggle="modal" data-target="#hum" id="<?php  echo $row['EQUIP_NUM']; ?>" onclick="showdetails(this);"  ><span class="glyphicon glyphicon-arrow-right" style="color:#0033FF;"></span></button></th>
    <?php
    echo "<td>" . $row['PARK_AREA'] . "</td>";
    echo "<td>" . $row['PARK_SPOT'] . "</td>";
	}
	/*$sql="SELECT * FROM move_equipment WHERE YARD = '$q1'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    echo "<td>" . $row[''] . "</td>";
    echo "<td>" . $row[''] . "</td>";
	echo "<td>" . $row[''] . "</td>";
	echo "<td>" . $row[''] . "</td>";
	echo "<td>" . $row[''] . "</td>";
	}
	*/
	echo "</tr>";

echo "</table>";
?>

            
    