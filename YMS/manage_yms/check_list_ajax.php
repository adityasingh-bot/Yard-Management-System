<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	
?>
  <h2 class="h2">CheckIn-List</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>Appointment Num</th>
        <th>SCAC</th>
        <th>Equipment Num</th>
        <th>Document Num</th>
        <th>Dock</th>
        <th>Park Area</th>
         <th>Park Spot</th>
         <th>Driver</th>
         <th>Shipment Num</th>
          <th>Track</th>

      </tr>
      <?php
	
			 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from checkin ORDER BY EQUIP_NUM ASC ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["APP_NUM"]."</th>
									<th  >".$record["SCAC"]."</th>
									<th  >".$record["EQUIP_NUM"]."</th>
									<th>".$record["DOC_NUM"]."</th>
									<th>".$record["DOCK"]."</th>
									<th>".$record["PARK_AREA"]."</th>
									<th  >".$record["PARK_SPOT"]."</th>
									<th  >".$record["DRIVER"]."</th>
									<th  >".$record["SHIP_NUM"]."</th>";
								?>

									<th><button type="button" id="<?php echo $record["EQUIP_NUM"]; ?>" onClick="showdetails(this);" >Track</button></th>
						
									</tr>
									<?php }
									
									?>			
      
      
    </thead>


  </table>
