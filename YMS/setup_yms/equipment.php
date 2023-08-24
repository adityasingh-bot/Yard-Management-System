<?php include('navbar.php');?>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	
	var formdata = new FormData();
	formdata.append( "e_name", _("e_name").value );
	formdata.append( "e_desc", _("e_desc").value );
	formdata.append( "e_cat", _("e_cat").value );
	formdata.append( "e_code", _("e_code").value );
	
	formdata.append( "dim_unit", _("dim_unit").value );
	formdata.append( "dim_length", _("dim_length").value );
    formdata.append( "dim_width", _("dim_width").value );
	formdata.append( "dim_height", _("dim_height").value );
    
	formdata.append( "weight_unit", _("weight_unit").value );
	formdata.append( "e_weight", _("e_weight").value );
	formdata.append( "e_max_weight", _("e_max_weight").value );
	
	formdata.append( "volume_unit", _("volume_unit").value );
	formdata.append( "e_volume", _("e_volume").value );
	
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "equipment_db.php");
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show").innerHTML = ajax.responseText;
				_("btnsub").disabled = false;
				_("btnsub").innerHTML = 'Submit';
	             $('#myModal').modal('show')
			     _("reg").reset();
			}
		}
	}
	ajax.send( formdata );
}
</script>
<script>
function volume(){
var a = document.getElementById("dim_unit").value;
var x = document.getElementById("dim_length").value;
var y = document.getElementById("dim_width").value;
var z = document.getElementById("dim_height").value;
var p= x*y*z;
document.getElementById("e_volume").value = p;
document.getElementById("volume_unit").value = a + "Cube";






}



</script>
<!-------------------------------------------------------------------------->
 <span id="show"></span>
<div class="container-fluid">

<h2>Equipment Type</h2>
<form method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">
<div class="row">
<div class="col-md-3" style="text-align:center;">
<label >
Equipment Name
</label>
<input align="middle" type="text" class="form-control" id="e_name" placeholder="" required >
</div>

<div class="col-md-3" style="text-align:center;">
<label >
Description
</label>
<input align="middle" type="text" class="form-control" id="e_desc" placeholder="" required >
</div>

<div class="col-md-3" style="text-align:center; margin-left:auto; margin-right:auto;">
<label>Catagory</label>
<select name="cat"  class="form-control"  align="middle" id="e_cat" >
    <option  selected="true" value="" >Catagory</option>
    <option value="Trailer">Trailer</option>
    <option value="Power Unit">Power Unit</option>
    <option value="Container">Container</option>
    </select>
 </div>  

<div class="col-md-3" style="text-align:center;">
<label >
Equipment Code
</label>
<input align="middle" type="text" class="form-control" id="e_code" placeholder="" required >
</div>  

</div>

<div class="row">
<div class="col-lg-4 table-responsive" >
  <h2 class="h3" align="center">Dimension</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th style="text-align:right;">UOM</th>
        <th>
        <select name="cat"  class="form-control"  align="middle" id="dim_unit"  onChange="volume();"required>
    <option  selected="true" value="" >Select</option>
    <option value="Feet">Feet</option>
    <option value="Inche">Inches</option>
    <option value="Meter">Meter</option>
    <option value="Centimeter">Cm</option>
    </select>      
        </th>
      </tr>
      
<tr class="info">
<th style="text-align:right;">Length</th>
        <th>
        <input align="middle" type="text" class="form-control" size="3" id="dim_length" placeholder="" onBlur="volume();" required>       
        </th>
        
									</tr>
                                    
<tr class="info">
									
									<th style="text-align:right;">Width</th>
        <th>
        <input align="middle" type="text" class="form-control" size="3" id="dim_width" placeholder="" onBlur="volume();" required>       
        </th>
        
									</tr>
<tr class="info">
									
                                        <th style="text-align:right;">Height</th>
            <th>
            <input align="middle" type="text" class="form-control" size="3" id="dim_height" placeholder="" onBlur="volume();" required >       
            </th>
        
									</tr>
												
      
      
    </thead>


  </table>
</div>


<div class="col-lg-4 table-responsive" >
  <h2 class="h3" align="center">Weight</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th style="text-align:right;">UOM</th>
        <th>
       <select name="cat"  class="form-control"  align="middle" id="weight_unit" required >
    <option  selected="true" value="" >Select</option>
    <option value="Gram">Gram</option>
    <option value="Kg">Kg</option>
    <option value="Tonnes">Tonnes</option>
    <option value="Pound/lbs">Pound/lbs</option>
    </select> 
        </th>
      </tr>
      
<tr class="info">
									
	<th style="text-align:right;">Weight</th>
            <th>
            <input align="middle" type="text" class="form-control" size="3" id="e_weight" placeholder="" required>       
            </th>

        
									</tr>
                                    
<tr class="danger">
                                                <th style="text-align:center; font-size:23px" colspan="2">Maximum Load</th>
            

        
									</tr>
<tr class="info">
        <th colspan="2">
        <input align="middle" type="text" class="form-control" size="3" id="e_max_weight" placeholder="" required >       
        </th>
        
									</tr>
												
      
      
    </thead>


  </table>
</div> 	

<div class="col-lg-4  table-responsive">
  <h2 class="h3" align="center">Volume</h2>
  <table class="table">
    <thead>
      <tr class="danger">
        <th style="text-align:right;">UOM</th>
        <th>
        <input type="text" name="cat"  class="form-control"  align="middle" id="volume_unit" readonly required>
        </th>
      </tr>
      
<tr class="info">
									
									<th style="text-align:center; font-size:25px" colspan="2">Equipment Volume</th>        
									</tr>
                                    
<tr class="info">
									
									<th style="text-align:right;">Obained Volume</th>
        <th>
        <input   align="middle" type="text" class="form-control" size="3" id="e_volume"   readonly>       
        </th>
        
									</tr>
<tr class="info">
									
									<th style="text-align:right;">
 <input type="submit" id="btnsub" name="submit"  value="Submit" class="btn btn-xs btn-primary">                                   
  </th>
        <th height="50">
        <input type="reset" class="btn  btn-xs btn-danger"  value="Reset">
        </th>
        
									</tr>
            </thead>


  </table>
  </div>
  </div>
  </form>
  </div>

 
</div>
<div class="col-lg-12 table-responsive" id="equiplist">
</div>

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
  <script>
$(document).ready(function(){
setInterval(function(){
$("#equiplist").load('equipmentlist_ajax.php')
}, 250);
});
</script>
  </body>
</html>
