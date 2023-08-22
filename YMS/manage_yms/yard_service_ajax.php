<?php
//Include the database configuration file
 include('../include/db_config.php');
 echo print_r($_POST);
$p = $_POST['app_yard'];
if(!empty($_POST["app_yard"])){
    //Fetch all state data

    $query = mysqli_query($con,"SELECT SERVICE_ORG FROM create_yard WHERE NAME ='$p'");
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select Service Organisation</option>';
	
        while($row = mysqli_fetch_array($query)){ 
            echo '<option value="'.$row['SERVICE_ORG'].'">'.$row['SERVICE_ORG'].'</option>';
        }
    }else{
        echo '<option value="">Service Organisation not available</option>';
    }
}
?>
