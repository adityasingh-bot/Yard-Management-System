
 <?php
    //Include database configuration file

  include('../include/db_config.php'); 
$Subid =($_GET['Subjec_Name']) ;
    
//$q ="SELECT SERVICE_ORG FROM create_yard WHERE NAME ='$Subid'";
$re=mysqli_query($con,"SELECT SERVICE_ORG FROM create_yard WHERE NAME ='$Subid'");

   ?>
       <select  id="service_org"  class="form-control" required>
       
           
           <?php
   
	
       while($row=mysqli_fetch_array($re))
		{ 

echo "<option>",$row['SERVICE_ORG'],"</option>";}
 ?>
</select>