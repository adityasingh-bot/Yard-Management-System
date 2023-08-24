<?php include('nav_myo.php');?>
<script>
function _(id){ return document.getElementById(id); }
function submitForm2(){
	_("move_btn").disabled = true;
	_("move_btn").innerHTML = 'please wait ...';
	var formdata2 = new FormData();
	
	formdata2.append( "mscac", _("mscac").value );
	formdata2.append( "mequip_num", _("mequip_num").value );	
	formdata2.append( "marea", _("marea").value );
	formdata2.append( "mspot", _("mspot").value );
	formdata2.append( "to_area", _("to_area").value );
	formdata2.append( "to_spot", _("to_spot").value );
	formdata2.append( "to_user", _("to_user").value );
	formdata2.append( "hidden_yard", _("hidden_yard").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "move_user_db.php");
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg2").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("move_btn").disabled = false;
				_("move_btn").innerHTML = 'Move';
	             
				   _("reg2").reset();
			}
		}
	}
	ajax.send( formdata2 );
}
</script>
<!-------------------------create_yard ajax----------------------------------->

<script>
function showUser(str)
 {
	 var p = document.getElementById("m_equip");
	  var r = document.getElementById("move_anchorss");
	var q = document.getElementById("s_equip"); 
    if (p.style.display === "none" ) {
	    p.style.display = "block";
		q.style.display = "none";
		}
	
	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
			  debugger;
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
			
                document.getElementById("m_equip").innerHTML = this.responseText;
				  debugger;
            }
        };
        xmlhttp.open("GET","getyard_details.php?q="+str,true);
		
		  debugger;
        xmlhttp.send();
    }

</script>

<script>
function showEquip(str1)
 {
     
	    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip"); 
    if (q.style.display === "none" ) {
	    q.style.display = "block";
		p.style.display = "none";
		}

	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
			  debugger;
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
			
                document.getElementById("s_equip").innerHTML = this.responseText;
				  debugger;
            }
        };
        xmlhttp.open("GET","getequip_details.php?q1="+str1,true);
		
		  debugger;
        xmlhttp.send();
    }

</script>
<!---------------------------------------End Script--------------------->
  <div class="container-fluid">
    <div class="row" > 
      <div style="float:left; padding-left:50px;">
         <h2 class="h2">Yard Workbench </h2>   
       </div>
     <div style="float:right;padding-right:50px;">
       <form class="form-inline" method="post" >
        <div class="form-group">
          <label for="">Yard &lowast;</label>
      <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT DISTINCT YARD FROM checkin ORDER BY YARD ASC");

    $result = mysqli_num_rows($query);
    ?>
  
    <select  id="yard_org" name="yard_org"  class="form-control" onchange="showUser(this.value);showEquip(this.value);" required>
        <option  selected="true" value="" >Select Yard</option>
        <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['YARD'].'">'.$row['YARD'].'</option>';
            }
        }else{
            echo '<option value="">Yard not available</option>';
        }
        ?>
    </select>
    </form>
 </div>
 
    </div>
    </div><hr>
    
         <div class="container-fluid">
      <div class="row">
      <h3 style="padding-left:20px;">Equipment</h3><hr>
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item ">
      <a href="#m_equip" data-toggle="tab" onClick="myFunction()" style=" border:thin solid #666666;" id="equip_anchor" >Equipment Details</a>
    </li>
    <li class="nav-item">
      <a href="#s_equip" data-toggle="tab" onClick="myFunction2()" style=" border:thin solid #666666;" id="move_anchor">Move Details</a>
    </li>
  </ul>
</div>
</div>




    <div class="table-responsive" id="m_equip" style="display:none;" >
  
        
    </div>


  <div class="table-responsive" id="s_equip" style="display:none;" >
   
        
    </div>
   <!-- The Modal -->
<div class="modal" id="hum">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Move Equipment</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form   method="post" name="reg2" id="reg2" onSubmit="submitForm2(); return false;" >
      <ul style="list-style-type:none; margin-left:-30px;">
        <li><span id="show"></span></li>
      <li> <label for="">SCAC Code:</label>
    <input type="text" name="mscac" id="mscac" value="" class="form-control" readonly></li>
       <li> <label for="">Equipment Number:</label>
    <input type="text" name="mequip_num" id="mequip_num" value="" class="form-control" readonly></li>
    <li>
    <label for="">Area:</label>
    <input type="text" name="marea" id="marea" value="" class="form-control" readonly></li>
    <li><label for="">Spot:</label>
    <input type="text"  name="mspot" id="mspot" value="" class="form-control" readonly>
</li>
<input type="hidden" id="hidden_yard">
   <li> <label for="">To Area:</label>
   <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT DISTINCT AREA_NAME FROM configure_yard ");

    $result = mysqli_num_rows($query);
    ?>
  <select name="to_area" id="to_area" value="" class="form-control">
    <option selected> Select Area</option>
        <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['AREA_NAME'].'">'.$row['AREA_NAME'].'</option>';
            }
        }else{
            echo '<option value="">Area not available</option>';
        }
        ?>
    </select></li>
 <li>   <label for="">To Spot:</label>
 <?php
    //Include database configuration file
    include('../include/db_config.php');
    
 $query = mysqli_query($con,"SELECT DISTINCT SPOT_NAME FROM configure_yard");

    $result = mysqli_num_rows($query);
    ?>
    <select name="to_spot" id="to_spot" value="" class="form-control" >
    <option selected> Select Spot</option>
     <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['SPOT_NAME'].'">'.$row['SPOT_NAME'].'</option>';
            }
        }else{
            echo '<option value="">Spot not available</option>';
        }
        ?>
    </select></li>
   <li>   <label for="">To User:</label>
   <?php
    //Include database configuration file
    include('../include/db_config.php');
    
 $query = mysqli_query($con,"SELECT DISTINCT USER FROM create_user_yard");

    $result = mysqli_num_rows($query);
    ?>
    <select name="to_user" id="to_user" value="" class="form-control">
    <option selected>UserName</option>
    <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['USER'].'">'.$row['USER'].'</option>';
            }
        }else{
            echo '<option value="">User Not available</option>';
        }
        ?>
    
    
    </select></li>
  <li>  <input type="submit" name="" id="move_btn" value="Move" method="post" onClick="" class="btn btn-block btn-primary" style="margin-top:10px;"></li>

    
      </ul>
       </form>
      </div>
 


      

    </div>
  </div>
</div>
<!--======================2nd Moda=================================================-->
   <!-- The Modal -->
<div class="modal" id="hum2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Move Equipment</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form  action="#" method="post">
      <ul style="list-style-type:none; margin-left:-30px;">
      <li> <label for="">SCAC Code:</label>
    <input type="text" name="scac" value="" class="form-control"  readonly></li>
       <li> <label for="">Equipment Number:</label>
    <input type="text" name="equipment_id" value="" class="form-control" readonly>  </li>
    <li>
    <label for="">Area:</label>
    <input type="text"  name="area" value="" class="form-control" readonly></li>
    <li><label for="">Spot:</label>
    <input type="text"  name="spot" value="" class="form-control" readonly>
</li>
   <li> <label for="">To Area:</label>
    <input type="text"  name="to_area" value="" class="form-control" readonly></li>
 <li>   <label for="">To Spot:</label>
     <input type="text" name="to_spot" value="" class="form-control" readonly></li>
 <li>   <label for="">To User:</label>
    <select name="to_user" value="" class="form-control">
    <option selected>UserName</option>
    <option></option>
    <option></option>
    </select></li>
       <li style="padding-top:20px; padding-left:100px;"> <input type="button" name="assign" id="assign" class="btn btn-success" value="Assign"> <input type="button" name="print_move" id="print_move" class="btn btn-primary" value="Print Pick Slip" style="margin-left:20px;"> <input type="button" name="cancel_move" id="cancel_move" class="btn btn-danger" value="Cancel Move" style="margin-left:20px;"></li>
      </ul>
       </form>
      </div>

    </div>
  </div>
</div>`
<!----------------------------------------------------------->
 <!-- The Modal -->
<div class="modal" id="equip_content">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Equipment Details</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form  method="post">
      <ul style="list-style-type:none; margin-left:-30px;">
      <li> <label for="">Equipment Status:</label>
    <input type="text" name="scac" value="" class="form-control"></li>
       <li> <label for="">Document Type:</label>
    <input type="text" name="equipment_id" value="" class="form-control"></li>
    <li>
    <label for="">Document Number:</label>
    <input type="text" disabled name="area" value="" class="form-control"></li>
    <li><label for="">Dock:</label>
    <input type="text" disabled name="spot" value="" class="form-control">
</li>    
      </ul>
       </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!------------------------------------------------------------------------>
    <!-- The Modal -->
<div class="modal" id="trans_details">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Move Requestss</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form  action="index.html" method="post">
      <ul style="list-style-type:none; margin-left:-30px;">
      <li> <label for="">SCAC Code:</label>
    <input type="text" name="scac" value="" class="form-control"></li>
       <li> <label for="">Equipment Number:</label>
    <input type="text" name="equipment_id" value="" class="form-control"></li>
    <li>
    <label for="">Area:</label>
    <input type="text" disabled name="area" value="" class="form-control"></li>
    <li><label for="">Dock/Spot:</label>
    <input type="text" disabled name="spot" value="" class="form-control">
</li>
   <li> <label for="">To Area:</label>
    <input type="text" name="to_area" value="" class="form-control"></li>
 <li>   <label for="">To Dock/To Spot:</label>
    <input type="text" name="to_spot" value="" class="form-control"></li>
  <li>  <input type="submit" name="" value="Move" method="post" class="btn btn-block btn-primary" style="margin-top:10px;"></li>

      
      </ul>
       </form>
      </div>
 


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>

    </div>
  </div>
</div>
<!----------------------------------------------------------->

 
 
 
 <script>
function myFunction() {
    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip"); 
    if (p.style.display === "none" ) {
	    p.style.display = "block";
		q.style.display = "none";
        
		

    }
}
function myFunction2() {
    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip"); 
    if (q.style.display === "none" ) {
	    q.style.display = "block";
		p.style.display = "none";

    }

}
</script>
<script>
function showdetails(button)    {
  var EQUIP_NUM = button.id;
$.ajax({
  url:"move_request_db.php",
  method:"GET",
  data:{"EQUIP_NUM":EQUIP_NUM},
  success: function(response){
 console.log(response);
   

 var ob = JSON.parse(response);
 $("#mscac").val(ob.SCAC);
   $("#mequip_num").val(ob.EQUIP_NUM);
      $("#marea").val(ob.PARK_AREA);  
     $("#mspot").val(ob.PARK_SPOT); 
	 $("#hidden_yard").val(ob.YARD); 
     
  
  }
  });

 }
</script>

  </body>
</html>