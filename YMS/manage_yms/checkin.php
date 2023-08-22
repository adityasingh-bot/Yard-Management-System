<?php include('nav_myo.php');?>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
		formdata.append( "APP_NUM", _("APP_NUM").value );
	formdata.append( "app_date", _("app_date").value );
	formdata.append( "start1", _("start1").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "checkdetails_db.php");
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("btnsub").disabled = false;
				_("btnsub").innerHTML = 'Verify';
	             
			}
		}
	}
	ajax.send( formdata );
}
</script>
<script>
function _(id){ return document.getElementById(id); }
function submitForm2(){
	_("btncheck").disabled = true;
	_("btncheck").innerHTML = 'please wait ...';
	var formdata2 = new FormData();
	formdata2.append( "app_num1", _("app_num1").value );
	formdata2.append( "scac", _("scac").value );
	formdata2.append( "equip_num", _("equip_num").value );
	formdata2.append( "doc_type", _("doc_type").value );
	formdata2.append( "doc_num", _("doc_num").value );
	formdata2.append( "park_area", _("park_area").value );
	formdata2.append( "park_spot", _("park_spot").value );
	formdata2.append( "dock_area", _("dock_area").value );
	formdata2.append( "driver1", _("driver1").value );
	formdata2.append( "shipnum1", _("shipnum1").value );
	formdata2.append( "carrier1", _("carrier1").value );
	formdata2.append( "equip_name", _("equip_name").value );
	formdata2.append( "yard1", _("yard1").value );
	formdata2.append( "equip_status", _("equip_status").value );
	formdata2.append( "checkin_purpose", _("checkin_purpose").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "checkin_db.php");
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg2").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("btncheck").disabled = false;
				_("btncheck").innerHTML = 'Check-In';
	              _("reg").reset();
				   _("reg2").reset();
			}
		}
	}
	ajax.send( formdata2 );
}
</script>
<script>
function myFunction(){
 var x = document.getElementById("app_schedule");
  if (x.style.display == "none") {
x.style.display="block";

}
else{
x.style.display="none";

}
}
</script>
<h2 class="h2" style="text-align:center;"> Check-In  <span style="float:right; margin-right:30px;"> <form class="form-inline" method="post"  >
        <div  class="form-group">
          Yard &lowast;
      <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT DISTINCT NAME FROM create_yard ORDER BY NAME ASC");

    $result = mysqli_num_rows($query);
    ?>
  
    <select  id="yard_org" name="yard_org"  class="form-control" required>
        <option  selected="true" value="" >Select Yard</option>
        <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';
            }
        }else{
            echo '<option value="">Yard not available</option>';
        }
        ?>
    </select>
    </form>
</span></h2><hr>
<div class="container-fluid" id="app_schedule"  style="display:none;">
<div  class="row">
<label style="padding-left:20px;" >
Select Appointment Number <span style="color:red;">&lowast;</span>
</label>

<form  method="post" name="reg" id="reg" >
    
<div class="col-md-3" style="text-align:center;">

   <select  class="form-control country"  id="APP_NUM"   required>
  <option  selected="true" value="" >Appointment Number</option>
  </select>
</div>

<div class="col-md-3" style="text-align:center;">
<input type="text" name="app_purpose" class="form-control"  id="app_purpose"  readonly  placeholder="Appointment Type"required>
  </div>
<div class="col-md-2" style="text-align:center; margin-left:auto; margin-right:auto;">
<input type="text" name="app_date" class="form-control"  id="app_date"  readonly  placeholder="Appointment Date"required>
 </div>  
<div class="col-md-2" style="text-align:center;">
<input type="time" class="form-control" id="start1" placeholder="Check-In Time" required>
</div>  
<div class="col-md-2">
<input type="text" name="yard" class="form-control"  id="yard"  readonly  placeholder="Select Yard"required>
</div>
</div>  
<div class="row">
<div class="col-md-3" style="text-align:center;">
<label >
Shipment Number 
</label>
<input type="text" name="ship_num" class="form-control"  id="ship_num"  readonly  placeholder=""required>
</div>

<div class="col-md-2" style="text-align:center;">
<label >
Carrier
</label>
<input type="text" name="carrier" class="form-control"  id="carrier"  readonly  required>
</div>
<div class="col-md-2" style="text-align:center; margin-left:auto; margin-right:auto;">
<label>Driver</label>
<input type="text" name="driver" class="form-control"  id="driver"  readonly required>

 </div>  
<div class="col-md-2" style="text-align:center;">
<label >
Load Status
</label>
<input type="text" name="load_status" class="form-control"  id="load_status"  readonly required>

</div>
<div class="col-md-2" style="text-align:center;">
<label >
Arrival Status
</label>
<select name="statusarr" class="form-control"  id="statusarr"  required>
    <option  selected="true" value="" >Select Status</option>
    <option>Early</option>
    <option>Late</option>
    <OPTION>Ontime</OPTION>
    <option></option>
  </select>
  
  
  
</div>  

<div class="col-md-1">
<h2> </h2>

<input type="button" id="btnsub" onClick="submitForm(); return false;"  value="Verify" class="btn btn-success">
</div>
</div>
</div>
<!--________________Check in adaptive functions _____________--->
<div class="container-fluid" id="checkin_yms">
<div class="row">
<div class="col-md-3">
<h2> </h2>
<input type="button" id="btnsub"  value="Report Data Missmatch" class="btn btn-danger">
</div>
<div class="col-md-2">

<h2> </h2>
<input type="button" id="btnsub"  value="Allow Tracking" class="btn btn-danger">
</div>
<div class="col-md-3">

<h2> </h2>
<input type="button" id="btnsub"  value="Report Early Scheduling" class="btn btn-danger">
</div>

<div class="col-md-2">

<h2> </h2>
<input type="button" id="btnsub" onClick="location.href='appointment.php'"  value="Schedule Appointment" class="btn btn-danger">
</div>
<div class="col-md-2">

<h2> </h2>
<button type="button" name="create_yard" class="btn btn-primary" onClick="myFunction()">Check Appointment</button>
</div>
</div>
</div>
</form>
<!--________________Check in adaptive functions Ends _____________--->



<div class="modal fade bs-example-modal-lg " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body">
     
            <h2>Success!</h2>
                 <h4> Equipment Type Define Successfully !!</h4>
     
          </div>
        </div>
    </div>
  </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form  method="post" name="reg2" id="reg2" onSubmit="submitForm2(); return false;"  >

<table class="table table-bordered table-striped table-highlight">
  <thead>
 <!-- <th colspan="3" style="text-align:center;"> DATA ENTRY</th>
      <th colspan="5" style="text-align:center;"> SLOT BOOKING DETAILS</th>-->
    </thead>
    <thead>
    <th>SCAC</th>
        <th>Equipment Number</th>
      <th>Document Type</th>
      <th>Document No.</th>
      <th colspan="3" align="center">Parking</th>
      <th colspan="2"> Purpose of Visit</th>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" class="form-control" id="scac"  name="scac" placeholder="" required></td>
          <td><input type="text" class="form-control" id="equip_num" name="equip_num" placeholder="" required></td>
          <td><input type="text" class="form-control" id="doc_type"  name="doc_type" placeholder="" required></td>
          <td><input type="text" class="form-control" id="doc_num" name="doc_num" required>     </td>
          <td>
 <select  name="dock_area" class="form-control" id="dock_area" placeholder="" required>  
    <option  selected="true" value="" >Select Yard First</option>
  </select>
  </td>
          <td>
           
  <select  name="park_area"  class="form-control" id="park_area"  placeholder="" required>  
    <option  selected="true" value="" >Select Yard First</option>

  </select>
                </td>
          <td>     
 <select  name="park_spot" class="form-control" id="park_spot"  placeholder="" required>  
    <option  selected="true" value="" >Select Area First</option>
</select>
  
 </td>
         
          <td>  <select name="checkin_purpose" class="form-control"  id="checkin_purpose" required>
<option value="selected">Purpose of Visit</option>
<option value="Live Load">Live Load</option>
<option value="Live Unload">Live Unload</option>
<option value="Live Unload and Live Load">Live Unload and Live Load</option>
<option value="Other">Other</option>
</select>      </td>
<input type="hidden" id="driver1" >
<input type="hidden" id="shipnum1" >
<input type="hidden"  id="carrier1" >
<input type="hidden"  id="equip_name" >
<input type="hidden"  id="yard1" >
<input type="hidden"  id="equip_status" >
<input type="hidden"  id="app_num1" >
        </tr>
      </tbody>
</table>

          <div style="float:right; margin-right:40px;"><input type="submit" id="btncheck"  value="Check-In" class="btn btn-md btn-primary">  
          <input type="reset"  value="Clear" class="btn btn-md btn-danger">        </div>
          </form>

<p>&nbsp;</p>
<span id="show"></span>
<span id="show2"></span>
<div class="col-lg-12 table-responsive" id="configurelist">
</div>


<script>
$(document).ready(function(){
 // var APP_NUM = button.id;
   $("select.country").change(function(){
        var  APP_NUM = $(".country option:selected").val();
  
  
  
  $.ajax({
  url:"checkin_yard_ajax.php",
  method:"GET",
  data:{"APP_NUM":APP_NUM},
  success: function(response){
 // console.log(response);
   
 var ob = JSON.parse(response);
	  

     $("#app_purpose").val(ob.APP_TYPE);
     $("#app_date").val(ob.DATE);
     $("#start1").val(ob.START);  
     $("#yard").val(ob.YARD); 
	 $("#yard1").val(ob.YARD); 
	 $("#shipnum1").val(ob.APP_SHIP); 
     $("#ship_num").val(ob.APP_SHIP); 
	 $("#carrier").val(ob.APP_CAR);  
	 $("#carrier1").val(ob.APP_CAR); 
	 $("#driver1").val(ob.DRIVER_NAME);  
     $("#driver").val(ob.DRIVER_NAME);  
     $("#load_status").val(ob.APP_STATUS);  
	 $("#equip_name").val(ob.EQUIP_NAME)
	 $("#equip_status").val(ob.APP_STATUS);
	 $("#doc_type").val(ob.DOC_TYPE);
	 $("#doc_num").val(ob.DOC_NUM);
	 $("#app_num1").val(ob.APP_NUM);
  
  }
});
});
});
</script>


</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#yard_org').on('change',function(){
        var yard = $(this).val();
		  debugger;
        if(yard){
            $.ajax({
			 
                type:'POST',
                url:'checkin_appoint_ajax.php',
                data:'yard='+yard,
                success:function(html){
                    $('#APP_NUM').html(html);
					  debugger;
                   <!-- $('#city').html('<option value="">Select state first</option>');--> 
                }
            }); 
        }else{
            $('#APP_NUM').html('<option value="">Select Yard First</option>');
            
        }
    });
	});
/*Ajax for Fetch Dock Acording to Service Organisation*/
	$(document).ready(function(){
    $('#yard_org').on('change',function(){
        var yard = $(this).val();
		  debugger;
        if(yard){
            $.ajax({
                type:'POST',
                url:'checkin_dockcheck_ajax.php',
                data:'yard='+yard,
                success:function(html){
                    $('#dock_area').html(html);
					  debugger;
                }
            }); 
        }else{
            $('#dock_area').html('<option value="">Select Yard First</option>');
            
        }
    });
	});
	
	/*Ajax for Fetch Dock Acording to Service Organisation*/
	$(document).ready(function(){
    $('#yard_org').on('change',function(){
        var yard = $(this).val();
		  debugger;
        if(yard){
            $.ajax({
                type:'POST',
                url:'checkin_parkarea_ajax.php',
                data:'yard='+yard,
                success:function(html){
                    $('#park_area').html(html);
					  debugger;
                }
            }); 
        }else{
            $('#park_area').html('<option value="">Select Yard First</option>');
            
        }
    });
	});
		/*Ajax for Fetch Dock Acording to Service Organisation*/
	$(document).ready(function(){
    $('#park_area').on('change',function(){
        var area = $(this).val();
		  debugger;
        if(area){
            $.ajax({
                type:'POST',
                url:'checkin_parkspot_ajax.php',
                data:'area='+area,
                success:function(html){
                    $('#park_spot').html(html);
					  debugger;
                }
            }); 
        }else{
            $('#park_spot').html('<option value="">Select ParkArea First</option>');
            
        }
    });
	});
	</script>
  <script>
$(document).ready(function(){
setInterval(function(){
$("#configurelist").load('check_list_ajax.php')
}, 250);
});
</script>
</body>
</html>