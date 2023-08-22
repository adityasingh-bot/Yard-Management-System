<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:../index.php?session_error');   
}		
	
?>
  <h2 class="h2">YardUser-List</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th>UserName</th>
        <th>User Description</th>
        <th>Status</th>
        <th>Gender</th>
         <th>Age</th>
        <th>JoinDate</th>
        <th>JoinDateTill</th>
        <th>PassExpire</th>
        
         <th>MobileNum</th>
          <th>View</th>

      </tr>
      <?php
	
			 
  include('../include/db_config.php');
				$recordset = mysqli_query($con,"select * from create_user_yard ORDER BY USER ASC ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class='info'>
									
									<th>".$record["USER"]."</th>
									<th  >".$record["USER_DESC"]."</th>
									<th>".$record["STATUS"]."</th>
									<th>".$record["GENDER"]."</th>
									<th  >".$record["AGE"]."</th>
									<th>".$record["JOIN_DATE"]."</th>
									<th  >".$record["JOIN_TILL_DATE"]."</th>
									<th  >".$record["PASS_EX"]."</th>
									<th  >".$record["MOBILE_NUM"]."</th>";
								?>

									<th><button type="button" id="<?php echo $record["USER"]; ?>" onClick="showdetails(this);" >View</button></th>
						
									</tr>
									<?php }
									
									?>			
      
      
    </thead>


  </table>
