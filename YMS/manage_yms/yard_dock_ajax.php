<?php
//Include the database configuration file
 include('../include/db_config.php');
 echo print_r($_POST);
$p = $_POST['app_dock'];
if(!empty($_POST["app_dock"])){
    //Fetch all state data

    $que = mysqli_query($con,"SELECT DOCKAREA FROM create_yard WHERE SERVICE_ORG ='$p'");
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($que);
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select Dock Area</option>';
	
        while($row = mysqli_fetch_array($que)){ 
            echo '<option value="'.$row['DOCKAREA'].'">'.$row['DOCKAREA'].'</option>';
        }
    }else{
        echo '<option value="">Dock Area not available</option>';
    }
}
?>
