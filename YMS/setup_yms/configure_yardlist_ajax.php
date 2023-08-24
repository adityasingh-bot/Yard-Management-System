<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	
?>
  <h2 class="h2">Configure Yard-List</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>Yard Name</th>
        <th>Area Name</th>
        <th>Area Description</th>
        <th>Area Parking Order</th>
        <th>Spot Name</th>
        <th>Spot Alias</th>
         <th>Spot Parking Order</th>

      </tr>
      <?php
	
			 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from configure_yard ORDER BY SPOT_PARK_ORDER ASC ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["YARD_NAME"]."</th>
									<th  >".$record["AREA_NAME"]."</th>
									<th>".$record["AREA_DESC"]."</th>
									<th  >".$record["AREA_PARK_ORDER"]."</th>
									<th>".$record["SPOT_NAME"]."</th>
									<th  >".$record["SPOT_ALIAS"]."</th>
									<th  >".$record["SPOT_PARK_ORDER"]."</th>";
								?>

								
						
									</tr>
									<?php }
									
									?>			
      
      
    </thead>


  </table>
