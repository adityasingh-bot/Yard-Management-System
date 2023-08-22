

<?php include('nav_myo.php');?>
<!-------------------------create_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "service_org", _("service_org").value );
	formdata.append( "service_dock", _("service_dock").value );
	formdata.append( "service_stag_area", _("service_stag_area").value );
	formdata.append( "yard_dock", _("yard_dock").value );
	formdata.append( "yard_alias", _("yard_alias").value );  
    formdata.append( "yard-org", _("yard-org").value );

	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "sync_dockdoor_db.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("btnsub").disabled = false;
				_("btnsub").innerHTML = 'Submit';
				$("#myModal").modal('show')
			     _("reg").reset();
			}
		}
	}
	ajax.send( formdata );
}
</script>
<script type="text/javascript">
function input()
{
 var x = document.getElementById("yard_org").value;
 document.getElementById("yard-text").value = x;
 document.getElementById("yard-org").value = x;
}
function copy()
{
 var x = document.getElementById("service_dock").value;
 document.getElementById("yard_dock").value = x;
}


</script>
<!---------------------------------------End Script--------------------->
 
  
    <div class="container-fluid">
<div class="row" style="margin-top:10px;">
<h2 class="h2" style="text-align:center;">CheckOut </h2><hr>
 <div class="form-group col-md-4"   >
<label for="" style="font-size:20px;"> Shipment Number </label>
<div class="form-group">
  <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY ORG ASC");

    $result = mysqli_num_rows($query);
    ?>
  
    <select  id="yard_org" name="yard_org"  class="form-control" required>
        <option  selected="true" value="" >Select Shipment Number</option>
       
    </select>
 
    </div>
    </div>
    <div class="form-group col-md-4"   >
<label for="" style="font-size:20px;"> Carrier </label>
<div class="form-group">
  <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY ORG ASC");

    $result = mysqli_num_rows($query);
    ?>
 
    <select  id="yard_org" name="yard_org"  class="form-control" required>
       <option selected>Select Carrier</option>
    </select>
    </div>
    </div>
    <div class="form-group col-md-4"   >
<label for="" style="font-size:20px;"> Driver </label>
<div class="form-group">
  <?php
    //Include database configuration file
    include('../include/db_config.php');
    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY ORG ASC");

    $result = mysqli_num_rows($query);
    ?>
 
    <select  id="yard_org" name="yard_org"  class="form-control" required>
       <option selected>Select Driver</option>
    </select>
    </div>
    </div>
    </div>
    </div>

 <div class="container-fluid">
<div class="row" style="margin-top:20px;">

<form class="form-horizontal" method="post" name="reg" id="reg" onSubmit="submitForm(); return false;" >
    
    <div class="table-responsive">
        <table  class="table table-bordered table-striped table-highlight">
        <thead>
                <th colspan="9"> </th>
              
     
            
            </thead>
            <thead>
                <th> SCAC</th>
                <th>Equipment Number</th>
               <th>Equipment Type</th>
                <th>Document Type</th>
                <th>Document Name</th>
                 <th > Area</th>
                 <th>Spot</th>
                 <th > Attachment</th>
                   <th >Details</th>
            
            </thead>
          
                <tr>
              <td> <input type="text" class="form-control" id="yard_dock"  placeholder="" readonly required> </td>
                    <td> <input type="text" class="form-control" id="yard_dock"  placeholder="" readonly required>   </td>
                 
                    <td><input type="text" class="form-control" id="yard_dock"  placeholder="" readonly required></td>
                    <td> <input type="text" class="form-control" id="yard_dock"  placeholder="" readonly required></td>
                    <td> <input type="text" class="form-control" id="yard_alias" placeholder="" required></td>
                    
                  <td> 
                     <select  id="yard_org" name="yard_org"  class="form-control" required>
                     <option selected="true"> Select Yard</option>
                     </select>
   </td>
   <td>
 <select  id="yard_org" name="yard_org"  class="form-control" required>
                     <option selected="true"> Select Area</option>
                     </select>

  </td>
   <td><input type="file" class="form-control" id="checkout_attach" placeholder=""></td>
    <td><input type="text" class="form-control" id="checkout_desc" placeholder=""></td>
                </tr>
        </table>
    </div>
    <span id="show"></span>

</form>

 
</div>
<div style="float:right;"><input type="submit" id="btnsub"  value="Submit" class="btn btn-sm btn-primary"> 
<input type="reset" class="btn  btn-sm btn-danger" value="Reset"></div>
</div>

<!----------------------modal------------------>
<div class="modal fade bs-example-modal-lg " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#5fcf80; color:#FFFFFF;">
     
            <h2>Success!</h2>
                 <h4> Thanks For Configure Yard With Us.</h4>
     
          </div>
        </div>
    </div>
  </div>
  


 
  </body>
</html>