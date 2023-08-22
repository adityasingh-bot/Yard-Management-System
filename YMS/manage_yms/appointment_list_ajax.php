<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	
?>
  <h2 class="h2">Appointment-List</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>Appointment Num</th>
        <th>Service Organisation</th>
        <th>Yard</th>
        <th>Dockdoor</th>
        <th>Equipment Name</th>
        <th>Date</th>
        <th>Driver</th>
         <th>Document Num</th>
         <th>Shipment Num</th>
          <th>View</th>

      </tr>
      <?php
	
			 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from app_yms ORDER BY DATE ASC ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["APP_NUM"]."</th>
									<th  >".$record["SERVICE_ORG"]."</th>
									<th>".$record["YARD"]."</th>
									<th>".$record["DOCK_DOOR"]."</th>
									<th  >".$record["EQUIP_NAME"]."</th>
									<th>".$record["DATE"]."</th>
									<th  >".$record["DRIVER_NAME"]."</th>
									<th  >".$record["DOC_NUM"]."</th>
									<th  >".$record["APP_SHIP"]."</th>";
								?>

									<th><button type="button" id="<?php echo $record["APP_NUM"]; ?>" onClick="showdetails(this);" >View</button></th>
						
									</tr>
									<?php }
									
									?>			
      
      
    </thead>


  </table>
