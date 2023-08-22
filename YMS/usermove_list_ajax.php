<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:yms_login_panel.php?session_error');   
}		
	
?>
  <h2 class="h2" align="center">Yard Movement Request</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>Equipment Number</th>
        <th>From Area</th>
        <th>To Area</th>
        <th>From Spot</th>
        <th>To Spot</th>
        <th>Acceptance</th>
        <th>Yard</th>
        <th>Action</th>
        

      </tr>


      <?php
	
			 
  include('include/db_config.php');
				$recordset = mysqli_query($con,"select * from complete_move_equipment");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["EQUIP_NUM"]."</th>
									<th  >".$record["F_AREA"]."</th>
									<th>".$record["T_AREA"]."</th>
									<th>".$record["F_SPOT"]."</th>
									<th  >".$record["T_SPOT"]."</th>
									<th>".$record["USER"]."</th>
									<th  >".$record["YARD"]."</th>";
								?>

									<th><button type="button" id="<?php echo $record["EQUIP_NUM"]; ?>" onClick="showdetails(this);" >Complete</button></th>
						
									</tr>
									<?php }
									
									?>			
      
      
    </thead>


  </table>
