<?php include('nav_myo.php');?>
<!-------------------------create_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm2(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata2 = new FormData();
	
	formdata2.append( "equip_num", _("equip_num").value );
	formdata2.append( "carrier", _("carrier").value );
	formdata2.append( "driver", _("driver").value );
	formdata2.append( "scac", _("scac").value );
	formdata2.append( "app_num", _("app_num").value );
	formdata2.append( "ship_num", _("ship_num").value );
	formdata2.append( "equip_name", _("equip_name").value );
	formdata2.append( "doc_type", _("doc_type").value );
	formdata2.append( "doc_num", _("doc_num").value );
	formdata2.append( "checkoutfrom_dock", _("checkoutfrom_dock").value );
	formdata2.append( "checkoutfrom_area", _("checkoutfrom_area").value );
	formdata2.append( "checkoutfrom_spot", _("checkoutfrom_spot").value );
	formdata2.append( "checkout_attach", _("checkout_attach").value );
	formdata2.append( "checkout_desc", _("checkout_desc").value );

	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "checkout_db.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg2").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("btnsub").disabled = false;
				_("btnsub").innerHTML = 'Submit';
				
			     _("reg2").reset();
			}
		}
	}
	ajax.send( formdata2 );
}
</script>

<!---------------------------------------End Script--------------------->
 
  
    <div class="container-fluid">
      <span id="show"></span>
<div class="row" style="margin-top:10px;">
<h2 class="h2" style="text-align:center;">CheckOut </h2><hr>
<form  method="post" name="reg2" id="reg2" onSubmit="submitForm2(); return false;">
 <div class="form-group col-md-4"   >
<label for="" style="font-size:20px;"> Equipment Number </label>
<div class="form-group">
  <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM checkin ORDER BY EQUIP_NUM ASC");

    $result = mysqli_num_rows($query);
    ?>
  
   <select  class="form-control country "  id="equip_num"   required>
  
    <option  selected="true" value="" >Select Equipment Number</option>

    <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo '<option value="'.$row['EQUIP_NUM'].'">'.$row['EQUIP_NUM'].'</option>';
            }
        }else{
            echo '<option value="">No Equipment Number Found!!!</option>';
        }
        ?>
  </select>
 
    </div>
    </div>
    <div class="form-group col-md-4"   >
<label for="" style="font-size:20px;"> Carrier </label>
<div class="form-group">
<input type="text" class="form-control" id="carrier"  placeholder="" readonly required> 
    </div>
    </div>
    <div class="form-group col-md-4"   >
<label for="" style="font-size:20px;"> Driver </label>
<div class="form-group">
<input type="text" class="form-control" id="driver"  placeholder="" readonly required> 
    </div>
    </div>
    </div>
    </div>

 <div class="container-fluid">
<div class="row" style="margin-top:20px;">

    
    <div class="table-responsive">
        <table  class="table table-bordered table-striped table-highlight">
        <thead>
                
                <th width="200px;" > SCAC</th>
                   <th width="200px;">Appointment Num</th>
                <th width="150px;">Shipment Number</th>
               <th>Equipment Name</th>
                <th>Document Type</th>
                <th>Document Num</th>
                <th > Dock</th>
                 <th > Area</th>
                 <th>Spot</th>
                 <th > Attachment</th>
               
            
            </thead>
          
                <tr>
              <td> <input type="text" class="form-control" id="scac"  placeholder="" readonly required> </td>
                 <td> <input type="text" class="form-control" id="app_num"  placeholder="" readonly required> </td>
                    <td> <input type="text" class="form-control" id="ship_num"  placeholder="" readonly required>   </td>
                 
                    <td><input type="text" class="form-control" id="equip_name"  placeholder="" readonly required></td>
                    <td> <input type="text" class="form-control" id="doc_type"  placeholder="" readonly required></td>
                    <td> <input type="text" class="form-control" id="doc_num" placeholder="" readonly required></td>
                    <td> 
                     <input type="text"  id="checkoutfrom_dock" name="checkout_yard"  class="form-control" readonly required>
   </td>
                  <td> 
                     <input type="text"  id="checkoutfrom_area" name="checkout_area"  class="form-control" readonly required>
   </td>
   <td>
 <input type="text"  id="checkoutfrom_spot" name="checkout_spot"  class="form-control" readonly required>
              
  </td>
   <td><input type="file" class="form-control" id="checkout_attach" ></td>
  
                </tr>
        </table>
    </div>
 

 
</div>
<div style="float:left; margin-left:20px;">
<label style="color:#FF0000">Details &lowast;</label>
<input type="text" class="form-control visible-lg-inline-block" id="checkout_desc" placeholder="Give Details For Checkout"  >

</div>
<div style="float:right;"><input type="submit" id="btnsub"  value="Submit" class="btn btn-sm btn-primary"> 
<input type="reset" class="btn  btn-sm btn-danger" value="Reset"></div>
</div>
</form>
  
  <div class="col-lg-12 table-responsive" id="configurelist">
</div>

<script>
$(document).ready(function(){
 // var APP_NUM = button.id;
   $("select.country").change(function(){
        var  equip_num = $(".country option:selected").val();
  
  
  
  $.ajax({
  url:"checkout_yard_ajax.php",
  method:"GET",
  data:{"equip_num":equip_num},
  success: function(response){
 // console.log(response);
   
 var ob = JSON.parse(response);
	  

     $("#carrier").val(ob.CARRIER);
     $("#driver").val(ob.DRIVER);
     $("#ship_num").val(ob.SHIP_NUM);  
     $("#equip_name").val(ob.EQUIP_NAME); 
	 $("#scac").val(ob.SCAC); 
	 $("#app_num").val(ob.APP_NUM); 
     $("#doc_type").val(ob.DOC_TYPE); 
	 $("#doc_num").val(ob.DOC_NUM);  
	 $("#checkoutfrom_dock").val(ob.DOCK);
     $("#checkoutfrom_area").val(ob.PARK_AREA);  
     $("#checkoutfrom_spot").val(ob.PARK_SPOT);  
  
  }
});
});
});
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#configurelist").load('checkout_list_ajax.php')
}, 250);
});
</script>
 
  </body>
</html>