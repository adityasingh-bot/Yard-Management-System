<div id="main">
<?php include('nav_myo.php');?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
	formdata.append( "yard", _("yard").value );
	formdata.append( "service_org", _("service_org").value );
	formdata.append( "dock", _("dock").value );
	formdata.append( "dockdoor_in", _("dockdoor_in").value );
	formdata.append( "equip_name", _("equip_name").value );
	formdata.append( "app_type", _("app_type").value );
	formdata.append( "datepicker", _("datepicker").value );
	formdata.append( "start", _("start").value );
	formdata.append( "end", _("end").value );
	formdata.append( "driver_name", _("driver_name").value );
	formdata.append( "app_status", _("app_status").value );
	formdata.append( "doc_type", _("doc_type").value );
	formdata.append( "doc_num", _("doc_num").value );
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
<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
	
	bottom:0;
    background-color:#f8f8f8;
	
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 15px;
    text-decoration: none;
    font-size: 16px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color:#003399;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "150px";
    document.getElementById("main").style.marginRight = "150px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
}
</script>

<!----------------------------------------->

<div  class="container-fluid"  >
<div id="mySidenav" class="sidenav">
    

<!--<a href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
<a href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
<a href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>-->



</div>

<form  method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">

<div class="row">
<h2 class="h2" style="text-align:center;">Create Appointment: <input type="text" id="app_num" value="<?php $x=a();echo"CIRRUS/YMS/".$x;?>" style="border:none;color:#0000CC;" required  readonly></h2>
</div><br>



<div class="row">

<div class="col-md-3">

<?php //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY NAME ASC");

    $result = mysqli_num_rows($query);
    ?>
<select name="yard" class="form-control" id="yard"   required>
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
<select id="service_org" class="form-control"  required>
    <option value="">Select Yard First</option>
</select>
</div>

<div class="col-md-2">
<select name="dock" class="form-control" id="dock" onChange="openNav()"  required>
  <option selected>Select Dock</option>
 </select>


</div>

<div class="col-md-2">
<input type="text" id="dockdoor_in" class="form-control" placeholder="Select DockDoor" required readonly>

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
<div class="col-lg-2">
<h2></h2>
<select name="appointment" class="form-control" id="app_type" placeholder="Appointment Type" required>
  <option selected >Appointment Type</option>
  <option value="Inbound">Inbound</option>
   <option value="Outbound">Outbound</option>
    <option value="Parking">Parking</option>
     <option value="Others">Others</option>
</select>


</div>

<div class="col-md-2">
<div class="form-group">
  <label for="">Select Appointment Date&lowast;</label>
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







<!-- row -2 ends here -->
</div><br>
<!-- row 3 -->
<div class="row">
<div class="col-md-2">

<select name="app_status" class="form-control" id="app_status" placeholder="" required>
  <option value="Yes"> Vehical Status</option>
  <option value="Loaded">Loaded</option>
  <option value="Unloaded">Unloaded</option>
  <option value="Empty">Empty</option>
</select>
</div>

<div class="col-md-2">
<input type="text" class="form-control" id="doc_type" placeholder="Document Type" required>

</div>
<div class="col-md-2">
<input type="text" class="form-control" id="doc_num" placeholder="Document Number" required>

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
<div class="col-lg-12 table-responsive " id="configurelist">
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

 
<script>
function input(){
var x = document.getElementById("yard").value;
var y = document.getElementById("app-type").value;
 document.getElementById("app_num").value = x ;
}
</script>
  <script>
$(document).ready(function(){
setInterval(function(){
$("#configurelist").load('appointment_list_ajax.php')
}, 250);
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#yard').on('change',function(){
        var yardapp = $(this).val();
		  debugger;
        if(yardapp){
            $.ajax({
			 
                type:'POST',
                url:'yard_service_ajax.php',
                data:'app_yard='+yardapp,
                success:function(html){
                    $('#service_org').html(html);
					  debugger;
                   <!-- $('#city').html('<option value="">Select state first</option>');--> 
                }
            }); 
        }else{
            $('#service_org').html('<option value="">Select Yard First</option>');
            
        }
    });
	});
/*Ajax for Fetch Dock Acording to Service Organisation*/
	$(document).ready(function(){
    $('#service_org').on('change',function(){
        var dockapp = $(this).val();
		  debugger;
        if(dockapp){
            $.ajax({
                type:'POST',
                url:'yard_dock_ajax.php',
                data:'app_dock='+dockapp,
                success:function(html){
                    $('#dock').html(html);
					  debugger;
                }
            }); 
        }else{
            $('#dock').html('<option value="">Select Service Organisation First</option>');
            
        }
    });
	});
	
	/*Ajax for Fetch DockDoor Acording to Service's Dock*/
	$(document).ready(function(){
    $('#dock').on('change',function(){
        var dockdoorapp = $(this).val();
		  debugger;
        if(dockdoorapp){
            $.ajax({
                type:'POST',
                url:'yard_dockdoor_ajax.php',
                data:'app_dockdoor='+dockdoorapp,
                success:function(html){
                    $('#mySidenav').html(html);
					  debugger;
                }
            }); 
        }else{
            $('#mySidenav').html('<option value="">Select Service Dock First</option>');
          
        }
    });
	});
	</script>
    <script>
function showdetails(button)    {
  var dockdoor = button.id;
document.getElementById("dockdoor_in").value = dockdoor;

 }
</script>
    <script>
function scheduleddetails(button)    {
  var dock = button.id;
swal('Warning!',dock +'-' + 'Dock-Door is Busy RightNow'!!, 'warning')

 }
</script>
    
</div>
<span id="show"></span>
</div>
</body>
</html>
