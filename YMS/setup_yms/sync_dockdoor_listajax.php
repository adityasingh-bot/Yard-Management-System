<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	
?>

  <h2 class="h2">Synchronized Dock Doors :</h2>
  <table class="table">
    <thead>
      <tr class="danger">
       
        <th>Yard Name </th>
        <th> Service Organisation</th>
         <th>Dock </th>
        <th>Default Stagging Area</th>
        <th>Dock Door</th>
        
      </tr>
      <?php
					 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from sync_dock ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["YARD_ORG"]."</th>
									<th  >".$record["SERVICE_ORG"]."</th>
									<th>".$record["YARD_DOCK"]."</th>
									<th  >".$record["SERVICE_STAG_AREA"]."</th>
									<th>".$record["DOCK_DOOR"]."</th>";
									
									?>
						

								
								
									</tr>
								<?php	}?>
								
                                
      
      
      
    </thead>


  </table>