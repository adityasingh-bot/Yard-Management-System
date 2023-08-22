<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	 
?>
  <h2 class="h2">Equipment-List</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>Equipment Name</th>
        <th>Equipment Description</th>
        <th>Equipment Category</th>
        <th>Equipment Code</th>
        <th>Dimension Unit</th>
         <th>Weight Unit</th>
           <th>Equipment Weight</th>
            <th>Equipment Max Weight</th>
             <th>Volume Unit</th>
              <th>Equiment<br /> Volume</th>

      </tr>
      <?php
 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from equipment_yard ORDER BY E_NAME ASC ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["E_NAME"]."</th>
									<th  >".$record["E_DESC"]."</th>
									<th>".$record["E_CAT"]."</th>
									<th  >".$record["E_CODE"]."</th>
									<th>".$record["DIM_UNIT"]."</th>
									<th>".$record["WEI_UNIT"]."</th>
									<th>".$record["E_WEI"]."</th>
									<th>".$record["E_MAX_WEI"]."</th>
									<th>".$record["VOL_UNIT"]."</th>
									
									
									<th  >".$record["E_VOL"]."</th>";
								?>

								
						
									</tr>
									<?php }
									
									?>			
      
      
    </thead>


  </table>
