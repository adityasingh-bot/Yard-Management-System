<?php include('navbar.php');?>
<!-------------------------create_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "fname", _("fname").value );
	formdata.append( "lname", _("lname").value );
	formdata.append( "licstate", _("licstate").value );
	formdata.append( "cname", _("cname").value );
	formdata.append( "mname", _("mname").value );
    formdata.append( "licno", _("licno").value );
	formdata.append( "carrier", _("carrier").value );
	formdata.append( "allow", _("allow").value );
	formdata.append( "add1", _("add1").value );
	formdata.append( "city", _("city").value );
	formdata.append( "nation", _("nation").value );
	formdata.append( "pcode", _("pcode").value );
    formdata.append( "add2", _("add2").value );
	formdata.append( "state", _("state").value );
	formdata.append( "num", _("num").value );

	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "create_driver_db.php" );
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
<!---------------------------------------End Script--------------------->
 <!-------------------------update_driver ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm2(){
	_("btnsub2").disabled = true;
	_("btnsub2").innerHTML = 'please wait ...';
	var formdata2 = new FormData();
	formdata2.append( "vlicno", _("vlicno").value );
    formdata2.append( "vfname", _("vfname").value );
	formdata2.append( "vlname", _("vlname").value );
    formdata2.append( "vcarrier", _("vcarrier").value );
	formdata2.append( "vallow", _("vallow").value );
	formdata2.append( "vadd1", _("vadd1").value );
	formdata2.append( "vcity", _("vcity").value );
	formdata2.append( "vnation", _("vnation").value );
	formdata2.append( "vpcode", _("vpcode").value );
    formdata2.append( "vadd2", _("vadd2").value );
	formdata2.append( "vstate", _("vstate").value );
	formdata2.append( "vnum", _("vnum").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "update_driver_db.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg2").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show2").innerHTML = ajax.responseText;
				_("btnsub2").disabled = false;
				_("btnsub2").innerHTML = 'Submit';
			    $("#view_modal").modal('hide')
				$("#myModal2").modal('show')
			     _("reg2").reset();
				 
			}
		}
	}
	ajax.send( formdata2 );
}
</script>
  
<div  class="container-fluid">
  <h2 class="h2"> Drivers</h2>
    <hr>
  <button type="button" name="create_yard" class="btn btn-primary active" onClick="myFunction()">Create</button>
  <button type="button" name="update_yard" class="btn btn-primary" onClick="myFunction2()" >Update</button>
<hr>
</div>



<div  class="container" id="create" style="display:none;" >
<div  class="row">
  <h3 class="h3">Create Driver </h3>
  <hr>
  <form method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">
  <div class="form-group col-md-4">
    <label for="">First Name</label>
    <input type="text" class="form-control" id="fname" placeholder="" required>
   <label for="">Last Name</label>
    <input type="text" class="form-control" id="lname" placeholder="" required>
   <label for="">License State. </label>
    <input type="text" class="form-control" id="licstate" placeholder="" required>
    <label for="">Company Name</label>
    <input type="text" class="form-control" id="cname" placeholder="" required>
    </div>
     
     
  <div class="form-group col-md-4">
   <label for="">Middle Name</label>
    <input type="text" class="form-control" id="mname" placeholder="" required>
    <label for="">License No. </label>
    <input type="text" class="form-control" id="licno" placeholder="" required>
    <label for="">Carrier</label>
    <input type="text" class="form-control" id="carrier" placeholder="" required>
   <label for="">Allowed</label>
    <select class="form-control" id="allow">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    
    </select>
  </div>
  <div class="form-group col-md-4"></div>
 
  </div>
  
  <div class="row">
  <h3 class="h3">Contact Information </h3>
  <hr>

  <div class="form-group col-md-4">
    <label for="">Address Line 1</label>
    <input type="text" class="form-control" id="add1" placeholder="" required>
   <label for="">City</label>
    <input type="text" class="form-control" id="city" placeholder="" required>
   <label for="">Country </label>
    <input type="text" class="form-control" id="nation" placeholder="" required>
     <label for="">Postral Code</label>
       <input type="text" class="form-control" id="pcode" placeholder="" required>
   
    
  </div>
  <div class="form-group col-md-4">
   <label for="">Address Line 2</label>
    <input type="text" class="form-control" id="add2" placeholder="" required>
    <label for="">State </label>
    <input type="text" class="form-control" id="state" placeholder="" required>
   
   <label for="">Phone Number</label>
    <input type="number" class="form-control" id="num" placeholder="" required>
   

  </div>
<div class="col-lg-12">
  <button type="submit" id="btnsub" class="btn btn-primary">
    Submit
  </button>
  <button type="reset" class="btn btn-default">
Reset
  </button>
</div>
<span id="show"></span>

  </form>
  </div>
</div>
<hr style="border:thick solid 2px">
<!-----------------------UPDATE DRIVERS--------------->
     <div class="container" id="update" style="display:none;">
  
  <h3 class="h3">Update Drivers Information<hr> </h3>
  




  <form method="post" name="reg2" id="reg2" onSubmit="submitForm2(); return false;">

  <div class="form-group col-md-4">
  
    <input type="hidden" class="form-control" id="vlicno" placeholder="" required>
    <label for="">First Name</label>
    <input type="text" class="form-control" id="vfname" placeholder="" >
   
   <label for="">Carrier</label>
    <input type="text" class="form-control" id="vcarrier" placeholder="">
  <label for="">Address Line 1</label>
    <input type="text" class="form-control" id="vadd1" placeholder="">
    <label for="">City</label>
    <input type="text" class="form-control" id="vcity" placeholder="">
    <label for="">Country </label>
    <input type="text" class="form-control" id="vnation" placeholder="">
    <label for="">Phone Number</label>
    <input type="number" class="form-control" id="vnum" placeholder="">
    
  </div>
  <div class="form-group col-md-4">
  <label for="">Last Name</label>
    <input type="text" class="form-control" id="vlname" placeholder="" >
     <label for="">Allowed in Yard</label>
    <input type="text" class="form-control" id="vallow" placeholder="" >
   <label for="">Address Line 2</label>
    <input type="text" class="form-control" id="vadd2" placeholder="">
 <label for="">State</label>
    <input type="text" class="form-control" id="vstate" placeholder="">
      <label for="">Postral Code</label>
       <input type="text" class="form-control" id="vpcode" placeholder="">
  </div>
<div class="col-lg-12">
  <!-------------------------3rd MODAL FINALIZE-------------------------->
  <div class="modal fade bs-example-modal-lg " id="view_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#5fcf80; color:#FFFFFF;">
            <h2>Are you Sure!</h2>
 <div style=" display:block;">
  <button type="submit" id="btnsub2" class="btn btn-info"  >
    <strong>Submit</strong>
      </button>
   <button type="button"  class="btn btn-danger" data-dismiss="modal">
   <strong> Cancel</strong>
  </button>
     </div>
          </div>
        </div>
    </div>
  </div>
  <!----------------------------------------------------------------------->
<button type="button" data-toggle="modal" data-target="#view_modal" class="btn btn-primary" >
    Submit
  </button>
  <button type="reset" class="btn btn-danger">
Cancel
  </button>
</div>
<span id="show2"></span>

  </form>
</div>

<div class="col-lg-12 table-responsive" id="createlist">
</div>

<div class="col-lg-12 table-responsive" id="updatelist" style="display:none">

</div>

<script>

function myFunction() {
    var x = document.getElementById("create");
	var y = document.getElementById("update");
	 var z = document.getElementById("updatelist");
	 var p= document.getElementById("createlist");	 
    if (x.style.display === "none" ) {
	    y.style.display = "none";
        x.style.display = "block";
		z.style.display = "none";
		p.style.display = "block";

    } else {
        x.style.display = "none";
        y.style.display = "none";
	   z.style.display = "none";
        p.style.display = "block";

    }
	
	var act=document.getElementById("create_yard");
	var act2=document.getElementById("update_yard");
	act2.classList.remove("active");
	act.classList.add("active");
	
}


function myFunction2() {
    var y = document.getElementById("updatelist");
	    var x = document.getElementById("create");
	var z= document.getElementById("update");	
	var p= document.getElementById("createlist");	 

    if (y.style.display === "none") {
	    x.style.display = "none";
       y.style.display = "block";
	   z.style.display="none";
	   	  p.style.display="none";

	 
    } else {
       y.style.display = "block";
		x.style.display = "none";
		z.style.display="none";
		   p.style.display="none";

    }
	var act=document.getElementById("create_yard");
	var act2=document.getElementById("update_yard");
	act2.classList.add("active");
	act.classList.remove("active");
}


</script>
<script>
function showdetails(button)    {
  var LISENCE_NUM = button.id;
$.ajax({
  url:"update_driver_ajax.php",
  method:"GET",
  data:{"LISENCE_NUM":LISENCE_NUM},
  success: function(response){
  //console.log(response);
   

 var ob = JSON.parse(response);
 	 $("#vlicno").val(ob.LISENCE_NUM);
 	 $("#vfname").val(ob.FNAME);
   	 $("#vcarrier").val(ob.CARRIER);
 	 $("#vadd1").val(ob.ADDRESS);  
     $("#vcity").val(ob.CITY);  
     $("#vnation").val(ob.COUNTRY);  
     $("#vnum").val(ob.PHONE_NUM);  
     $("#vlname").val(ob.LNAME);  
	 $("#vallow").val(ob.ALLOWED);  
     $("#vadd2").val(ob.ADDRESS_2);  
	 $("#vstate").val(ob.STATE);  
     $("#vpcode").val(ob.POSTAL_CODE);   
  
  }
  });

	 var y = document.getElementById("update");
    if (y.style.display === "none")
	{
       y.style.display = "block";
    } 

 
}

</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#createlist").load('driver_listajax.php')
}, 250);
});
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#updatelist").load('update_driver_listajax.php')

}, 2000);
});
</script>

<div class="modal fade bs-example-modal-lg " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#5fcf80; color:#FFFFFF;">
     
            <h2>Success!</h2>
                 <h4> Thanks For Driver Registration With Us.</h4>
     
          </div>
        </div>
    </div>
  </div>
   <!-------------------------2ND MODAL UPDATE-------------------------->
  <div class="modal fade bs-example-modal-lg " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" >
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#3a5e9c; color:#FFFFFF;">
     
            <h2>Update!</h2>
                 <h4> Thanks For Update Driver Info With Us.</h4>
     
          </div>
        </div>
    </div>
  </div>
 
  </body>
</html>
