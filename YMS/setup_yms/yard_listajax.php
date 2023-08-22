<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
		
?>


  <h2 class="h2">Yard List</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>Name</th>
        <th>Organisation</th>
        <th>Location</th>
         <th>DockArea</th>
        <th>Number of Area</th>
               <th>Number of Spot</th>
        <th>Start time</th>
        <th>End time</th>
        
      </tr>
      <?php
					 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from create_yard ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["NAME"]."</th>
									<th  >".$record["ORG"]."</th>
									<th>".$record["LOCATION"]."</th>
									<th  >".$record["DOCKAREA"]."</th>
									<th  >".$record["AREA_NUM"]."</th>
									<th  >".$record["SPOT_NUM"]."</th>
									<th>".$record["START_TIME"]."</th>
									<th  >".$record["END_TIME"]."</th>";
									?>
						

								
								
									</tr>
								<?php	}?>
								
                                
      
      
      
    </thead>


  </table>