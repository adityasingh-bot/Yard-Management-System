<?php include('navbar.php');?>
<!-------------------------create_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "yard_org", _("yard_org").value );
	formdata.append( "area_name", _("area_name").value );
	formdata.append( "area_desc", _("area_desc").value );
	formdata.append( "area_order", _("area_order").value );
	formdata.append( "spot_name", _("spot_name").value );
	formdata.append( "spot_alias", _("spot_alias").value );
    formdata.append( "spot_park", _("spot_park").value );


	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "configure_yard_db.php" );
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
<script>
function input()
{
 var x = document.getElementById("yard_org").value;
 document.getElementById("yard-text").value = x;
 document.getElementById("yard-org").value = x;
}
function clear()
{
 var z = document.getElementById("yard-text").value;
 document.getElementById("yard-text").value = "";
}

</script>
<!---------------------------------------End Script--------------------->
 
  
    <div  class="container-fluid" >
<h2 class="h2"  style="text-align:center;"> Configure Yard : <input type="text" id="yard-text" style=" border:none; color:#0000CC;" readonly onClick="clear();" ></h2>
<div class="row">
 <div class="form-group col-md-4 " align="center">
<label for=""> Yard Name</label>
<div class="form-group">
  <?php
    //Include database configuration file
  include('../include/db_config.php');    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY NAME ASC");

    $result = mysqli_num_rows($query);
    ?>
    <select  id="yard_org" class="form-control" onchange="input();" required>
        <option  selected="true" value="" >Select Yard</option>
        <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';
            }
        }else{
            echo '<option value="">Yard not available</option>';
        }
        ?>
    </select>
    </div>
    </div>
    </div>




<form class="form-horizontal" method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
        <thead>
                <th colspan="3" style="text-align:center;"> AREA</th>
                <th colspan="5" style="text-align:center;"> SPOT</th>
     
            
            </thead>
            <thead>
                <th> Name</th>
                <th>Description</th>
                 <th>Parking Order</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Parking Order</th>
                 <th colspan="2"> Action</th>
            
            </thead>
            <tbody>
             
                <tr>
              <td> <input type="text" class="form-control" id="area_name" placeholder="" required></td>
                    <td><input type="text" class="form-control" id="area_desc" placeholder="" required></td>
                    <td><input type="text" class="form-control" id="area_order" placeholder="" required></td>
                    <td>
                            <input type="text" class="form-control" id="spot_name" placeholder="" required>

                    </td>
                    <td> <input type="text" class="form-control" id="spot_alias" placeholder="" required></td>
                    <td> <input type="text" class="form-control" id="spot_park" placeholder="" required></td>
                  <td> 
                   <input type="submit" id="btnsub"  value="Submit" class="btn btn-xs btn-primary">
   </td>
   <td>
 
  <input type="reset" class="btn  btn-xs btn-danger"  onClick="clear();" value="Reset">

  </td>
                </tr>
            </tbody>
        </table>
    </div>
    <span id="show"></span>

</form>


<div class="col-lg-12 table-responsive" id="configurelist">
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
  
  
  <script>
$(document).ready(function(){
setInterval(function(){
$("#configurelist").load('configure_yardlist_ajax.php')
}, 250);
});
</script>
  </body>
</html>
