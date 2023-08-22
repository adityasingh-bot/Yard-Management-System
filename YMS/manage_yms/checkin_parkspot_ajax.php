<?php
//Include the database configuration file
 include('../include/db_config.php');
 echo print_r($_POST);
$p = $_POST['area'];
if(!empty($_POST["area"])){
    //Fetch all state data

    $que = mysqli_query($con,"SELECT SPOT_NAME FROM configure_yard WHERE AREA_NAME ='$p'");
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($que);
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Spot</option>';
	
        while($row = mysqli_fetch_array($que)){ 
            echo '<option value="'.$row['SPOT_NAME'].'">'.$row['SPOT_NAME'].'</option>';
        }
    }else{
        echo '<option value="">No Spot Found!!!</option>';
    }
}
?>
