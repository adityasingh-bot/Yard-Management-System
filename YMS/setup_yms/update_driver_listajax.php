<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
		

?>

  <h2 class="h2">Update Drivers Info</h2>

  <table class="table">
    <thead>
      <tr class="danger">
        <th>Driver's Name</th>
        <th>License No.</th>
        <th>License State.</th>
        <th>Carrier</th>
        <th>Allowed in Yard</th>
        <th>Company Name</th>
                 <th>Update</th>

        
      </tr>
      <?php
	
			 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from yms_driver ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["FNAME"]."</th>
									<th  >".$record["LISENCE_NUM"]."</th>
									<th>".$record["LISENCE_STATE"]."</th>
									<th  >".$record["CARRIER"]."</th>
									<th>".$record["ALLOWED"]."</th>
									<th  >".$record["COMPANY"]."</th>";
								?>

					<th><button type="button" id="<?php echo $record["LISENCE_NUM"]; ?>" onClick="showdetails(this);" >Update</button></th>

						
									</tr>
									<?php }
									
									?>					
                                
      
      
      
    </thead>


  </table>
