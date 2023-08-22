<?php
//Include the database configuration file
 include('../include/db_config.php');
//echo print_r($_POST);
$p = $_POST['app_dockdoor'];
if(!empty($_POST["app_dockdoor"])){
    //Fetch all state data

    $query = mysqli_query($con,"SELECT DOCK_DOOR FROM sync_dock WHERE SERVICE_DOCK ='$p'");
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);

    //State option list
    if($rowCount > 0){
	echo'<p style="font-size:18px; color:#666666; margin-left:2px;">Dock Doors</p>';
	for($i = 1; $i <= $rowCount; $i++){
	while($row = mysqli_fetch_array($query)){ 
	$q= $row['DOCK_DOOR'];
	
	$quetest=mysqli_query($con,"SELECT DOCK_DOOR FROM app_yms WHERE DOCK_DOOR ='$q'");
	$roww = mysqli_num_rows($quetest);
	if( $roww > 0)
	{
	echo '<a id="'.$row['DOCK_DOOR'].'" onclick="scheduleddetails(this);"><span class="glyphicon glyphicon-circle-arrow-right" style=" color:red;"> </span> &nbsp;' .$row['DOCK_DOOR'].'</a>  ';
	
	}
	
	else{
	echo '<a id="'.$row['DOCK_DOOR'].'" onclick="showdetails(this);"><span class="glyphicon glyphicon-circle-arrow-right" style=" color:green;"> </span> &nbsp;' .$row['DOCK_DOOR'].'</a>  ';
	
   }
 
  }//while close
		
    }//for close	
}// second main if close
	else{
        echo 'Dock Door not Synchronize';
    }
} //main if close
?>

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>