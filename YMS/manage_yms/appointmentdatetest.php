<?php include('nav_myo.php');?>
<?php //Settings: You can customize the captcha here
function a($digits = 3){
    $i = 0; //counter
    $code = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $code .= mt_rand(0, 9);
        $i++;
		
    }
    return $code;
	
}
?>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	
	formdata.append( "app_num", _("app_num").value );
	formdata.append( "app_type", _("app_type").value );
	formdata.append( "app_title", _("app_title").value );
	formdata.append( "yard", _("yard").value );
	formdata.append( "equip_name", _("equip_name").value );
	formdata.append( "datepicker", _("datepicker").value );
    formdata.append( "start", _("start").value );
	formdata.append( "end", _("end").value );
	formdata.append( "driver_name", _("driver_name").value );
	formdata.append( "doc_type", _("doc_type").value );
	formdata.append( "doc_num", _("doc_num").value );
	formdata.append( "app_status", _("app_status").value );
	formdata.append( "dock", _("dock").value );
    formdata.append( "app_car", _("app_car").value );
	formdata.append( "app_ship", _("app_ship").value );


	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "appointment_db.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("btnsub").disabled = false;
		
			     _("reg").reset();
				 _("app_num").value="<?php $x=a(); echo"CIRRUS/YMS/".$x;?>";
				 	
			}
		}
	}
	ajax.send( formdata );
}
</script>
	<script>

    
	function getTest(Sub_Id) {		
	debugger;
	////alert(countryId);
	
		//var strURL="findState.php?country="+countryId;
		var strURL="Allotauto.php?Subjec_Name="+Sub_Id;
		
		var xhr = new XMLHttpRequest();
xhr.open("GET", strURL, true);
xhr.onreadystatechange = function() {
//alert(xhr.readyState +  '----'+xhr.status);
//alert('response----'+xhr.responseText);
  if (parseInt( xhr.readyState )== 4 && parseInt( xhr.status )== 200) {
  debugger;
    // JSON.parse does not evaluate the attacker's scripts.
	//alert('response----'+xhr.responseText);
    document.getElementById('T').innerHTML=xhr.responseText;	
  }
}
xhr.send();
		
			
	}
	</script>

<!----------------------------------------->

<div  class="container-fluid"  >

<form  method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">

<div class="row">
<h2 class="h2" style="text-align:center;">Create Appointment: <input type="text" id="app_num" value="<?php $x=a();echo"CIRRUS/YMS/".$x;?>" style="border:none;color:#0000CC;" readonly></h2>
</div><br>



<div class="row">
<div class="col-md-3">
<select name="appointment" class="form-control" id="app_type" placeholder="Appointment Type" required>
  <option selected >Appointment Type</option>
  <option value="Inbound">Inbound</option>
   <option value="Outbound">Outbound</option>
    <option value="Parking">Parking</option>
     <option value="Others">Others</option>
</select>
</div>

<div class="col-md-3">

<input type="text" class="form-control" id="app_title" placeholder="Appointment Title" required>
</div>

<div class="col-md-3">

<?php //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY NAME ASC");

    $result = mysqli_num_rows($query);
    ?>
<select name="yard" class="form-control" id="yard"  required>
  <option selected>Select Yard</option>
  <?php
       if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';
            }
        }else{
            echo '<option value="">Yard not available</option>';
        }
        ?></select>
        </div>
        
        
<div class="col-md-2">

<?php //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM equipment_yard ORDER BY E_NAME ASC");

    $result = mysqli_num_rows($query);
    ?>
<select name="equip_name" class="form-control"  id="equip_name" required>
    <option  selected="true" value="" >Select Equipment Type</option>

    
    <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo '<option value="'.$row['E_NAME'].'">'.$row['E_NAME'].'</option>';
            }
        }else{
            echo '<option value="">No Equipment Found</option>';
        }
        ?>
  </select>	
</div>
<div class="col-md-1">
<a href="../setup_yms/equipment.php"  style="text-decoration:none;" class="form-control col-md-1">Create</a>


</div>



</div><br>
<!-- row 1 ends here -->
<!-- row 2 -->
<div class="row">

<div class="col-md-2">
<h2></h2>
<div class="form-group">
 <input type="date" name="bday" id="datepicker" max="3000-12-31" 
        min="1000-01-01" class="form-control">
</div>

</div>


<div class="form-group col-md-2">
    
    <label for="">Start-time <span class="text-muted">(12 hour format)</span></label>
    <input type="time" class="form-control" id="start" placeholder="" required>
</div>
<div class="form-group col-md-2">
    <label for="">End-time <span class="text-muted">(12 hour format)</span></label>
    <input type="time" class="form-control" id="end" placeholder="" required>
</div>

<div class="col-md-3">
<h2></h2>

<?php //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM yms_driver ORDER BY FNAME ASC");

    $result = mysqli_num_rows($query);
    ?>
<select name="driver_name" class="form-control"  id="driver_name" required>
    <option  selected="true" value="" >Select Driver</option>

    
    <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo '<option value="'.$row['FNAME'].'">'.$row['FNAME'].'</option>';
            }
        }else{
            echo '<option value="">No Driver Found !!</option>';
        }
        ?>
  </select>	</div>
<div class="col-md-1">
<h2></h2>
<a href="../setup_yms/create_driver.php"  style="text-decoration:none;" class="form-control col-md-1">Create</a>
</div>


<div class="col-md-2">
<h2></h2>
<select name="app_status" class="form-control" id="app_status" placeholder="" required>
  <option value="Yes"> Vehical Status</option>
  <option value="Loaded">Loaded</option>
  <option value="Unloaded">Unloaded</option>
  <option value="Empty">Empty</option>
</select>
</div>




<!-- row -2 ends here -->
</div><br>
<!-- row 3 -->
<div class="row">

<div class="col-md-2">
<input type="text" class="form-control" id="doc_type" placeholder="Document Type" required>

</div>
<div class="col-md-2">
<input type="text" class="form-control" id="doc_num" placeholder="Document Number" required>

</div>
<div class="col-md-2">
<?php //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY ORG ASC");

    $result = mysqli_num_rows($query);
    ?>
<select name="dock" class="form-control" id="dock"  required>
  <option selected>Select Dock</option>
  <?php
       if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo '<option value="'.$row['DOCKAREA'].'">'.$row['DOCKAREA'].'</option>';
            }
        }else{
            echo '<option value="">Dockarea not available</option>';
        }
        ?></select>
</div>

<div class="col-md-2">
<input type="text" class="form-control" id="app_car" placeholder="Enter Carrier" required>

</div>

<div class="col-md-2">
<input type="text" class="form-control" id="app_ship" placeholder="Shipment Number" required>
</div>

<div class="col-md-2">

<input type="submit" id="btnsub" class="btn btn-success" value="Schedule appointment" >

</div>

</div>
</form>
<!-- ROW 3 ENDS -->
</div>


<div class="modal fade bs-example-modal-lg " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#5fcf80; color:#FFFFFF;">
     
            <h2>Success!</h2>
                 <h4> Appointment Scheduled Done</h4>
     
          </div>
        </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
	
  } );
   
  </script>
<script>
function input(){
var x = document.getElementById("yard").value;
var y = document.getElementById("app-type").value;
 document.getElementById("app_num").value = x ;



}
</script>

</div>
<span id="show"></span>
</body>
</html>
