<?php include('navbar.php');?>

<!-------------------------create_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	   formdata.append( "yard-org", _("yard-org").value );

	formdata.append( "service_org", _("service_org").value );
	formdata.append( "service_dock", _("service_dock").value );
	formdata.append( "service_stag_area", _("service_stag_area").value );
	formdata.append( "yard_dock", _("yard_dock").value );
	formdata.append( "yard_alias", _("yard_alias").value );  
 
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
<h2 class="h2" style="text-align:center;">Synchronize Dock Doors :  <input type="text" id="yard-text" style=" border:none; color:#0000CC;" readonly  > </h2>
<div class="row" style="margin-top:20px;">
 <div class="form-group col-md-4" align="center"  >
<label for="" style="font-size:20px;"> Select Yard </label>
<div class="form-group">
  <?php
    //Include database configuration file
  include('../include/db_config.php');    
    $query = mysqli_query($con,"SELECT * FROM create_yard ORDER BY NAME ASC");

    $result = mysqli_num_rows($query);
    ?>
    <form  method="post"  >
    <select  id="yard_org" name="yard_org" onChange="input();"  class="form-control" required>
        <option  selected="true" value="" >Select Yard</option>
        <?php
        if($result > 0){
            while($row = mysqli_fetch_array($query)){
			
            echo  '<option value=" '.$row['NAME'].'">'.$row['NAME'].'</option>';
				 
            }
        }else{
            echo '<option value="">Yard not available</option>';
        }
        ?>
    </select>
    </form>
    </div>
    </div>
    </div>




<form class="form-horizontal" method="post" name="reg" id="reg" onSubmit="submitForm(); return false;" >
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
        <thead>
                <th colspan="3" style="text-align:center;"> SERVICE</th>
                <th colspan="5" style="text-align:center;"> YARD</th>
     
            
            </thead>
            <thead>
                <th>Service Organisation</th>
                <th>Dock</th>
                <th>Default Staging Area</th>
                <th>Dock</th>
                <th>Dock Alias</th>
                 <th colspan="2"> Action</th>
            
            </thead>
          
                <tr>
              <td >  
    <form  method="post" onchange="input();">
    <input type="hidden" id="yard-org" >
       <select  id="service_org"  class="form-control" required>
        <option  selected="true"  value="" >Select Organisation</option>
        <?php
		
		$query = mysqli_query($con,"SELECT * FROM create_yard ");

    $result = mysqli_num_rows($query);
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['SERVICE_ORG'].'">'.$row['SERVICE_ORG'].'</option>';
            }
        }else{
            echo '<option value=""> Service Organisation not available</option>';
        }
        ?>
        </select>
    </form></td> 
                    <td><!--<input type="text" class="form-control" id="service_dock" placeholder="" required>-->
                     <select  id="service_dock"  class="form-control" onchange="copy()" required>
        <option  selected="true"  value="" >Select Dock</option>
        <?php
		
		$query = mysqli_query($con,"SELECT * FROM create_yard ");

    $result = mysqli_num_rows($query);
        if($result > 0){
            while($row = mysqli_fetch_array($query)){ 
                echo  '<option value="'.$row['DOCKAREA'].'">'.$row['DOCKAREA'].'</option>';
            }
        }else{
            echo '<option value=""> Dock-Area not available</option>';
        }
        ?>
    </select>
                    
                    
                    
                    </td>
                    <td>
                            <select class="form-control" id="service_stag_area" placeholder="" required>
                            <option value="Yes"> Yes</option>
       						 <option value="No"> No</option>

                            </select>

                    </td>
                    <td> <input type="text" class="form-control" id="yard_dock"  placeholder="" readonly required></td>
                    <td> <input type="text" class="form-control" id="yard_alias" placeholder="" required></td>
                  <td> 
                   <input type="submit" id="btnsub"  value="Submit" class="btn btn-xs btn-primary">
   </td>
   <td>
 
  <input type="reset" class="btn  btn-xs btn-danger" value="Reset">

  </td>
                </tr>
        </table>
    </div>
    <span id="show"></span>

</form>


<div class="col-lg-12 table-responsive" id="synclist">
</div>
<!----------------------modal------------------>
<div class="modal fade bs-example-modal-lg " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#5fcf80; color:#FFFFFF;">
     
            <h2>Success!</h2>
                 <h4> Thanks For Synchronize Dock  With Us.</h4>
     
          </div>
        </div>
    </div>
  </div>
  
</div>
<script>
$(document).ready(function(){
setInterval(function(){
$("#synclist").load('sync_dockdoor_listajax.php')
}, 250);
var formdata2 = new FormData();
	formdata2.append( "yard_org", _("yard_org").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "sync_dockdoor.php" );
	ajax.send( formdata2 );
 
});
</script>

 
  </body>
</html>