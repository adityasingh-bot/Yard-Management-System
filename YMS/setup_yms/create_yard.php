<?php include('navbar.php');?>
     <!-------------------------create_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "yardorg", _("yardorg").value );
	formdata.append( "yardname", _("yardname").value );
	formdata.append( "serviceorg", _("serviceorg").value );
	formdata.append( "areanum", _("areanum").value );
	formdata.append( "location", _("location").value );
	formdata.append( "dockarea", _("dockarea").value );
	formdata.append( "areaspot", _("areaspot").value );

    formdata.append( "start", _("start").value );
	formdata.append( "end", _("end").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "create_yard_db.php");
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
<!---------------------------------------End Script--------------------->
 <!-------------------------update_yard ajax----------------------------------->
<script>
function _(id){ return document.getElementById(id); }
function submitForm2(){
	_("btnsub2").disabled = true;
	_("btnsub2").innerHTML = 'please wait ...';
	var formdata2 = new FormData();
	formdata2.append( "org", _("org").value );
	formdata2.append( "name", _("name").value );
    formdata2.append( "start1", _("start1").value );
	formdata2.append( "end1", _("end1").value );
	formdata2.append( "dockarea1", _("dockarea1").value );
	formdata2.append( "areanum1", _("areanum1").value );
	formdata2.append( "areaspot1", _("areaspot1").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "update_yard_db.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg2").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("show2").innerHTML = ajax.responseText;
				_("btnsub2").disabled = false;
				_("btnsub2").innerHTML = 'Submit';
					$('#view_modal').modal('hide')
				$('#myModal2').modal('show');			
			     _("reg2").reset();
				 
			}
		}
	}
	ajax.send( formdata2 );
}
</script>
 
 

<div id="opt">
  <h2 class="h2"> Define Yard</h2>
    <hr>
 <button type="button" name="create_yard" class="btn btn-primary active" onClick="myFunction()" id="create_yard"> Create
   </button>
  <button type="button" name="update_yard" class="btn btn-primary" onClick="myFunction2()" id="update_yard">Update</button>
<hr>
</div>


<div class="container" id="create" style="display:none;" >
<span id="show"></span>
  <h3 class="h3">Create Yard </h3>
  <hr>
 <form method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">
  <div class="form-group col-md-6" >
    <label for="">Organisation </label>
    <input type="text" class="form-control" id="yardorg" placeholder="" required>
    <label for="">Yard Name </label>
    <input type="text" class="form-control" id="yardname" placeholder="" required>
    <label for="">Service Organisation</label>
    <input type="text" class="form-control" id="serviceorg" placeholder="" required>
    <label for="">Location</label>
    <input type="text" class="form-control" id="location" placeholder="" required>
    <label for="">Dockarea</label>
    <input type="text" class="form-control" id="dockarea" placeholder="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Number of Area</label>
    <input type="text" class="form-control" id="areanum" placeholder="" required>
    <label for="">Number of Spot</label>
    <input type="text" class="form-control" id="areaspot" placeholder="" required>
    <label for="">Start-time <span class="text-muted">(12 hour format)</span></label>
    <input type="time" class="form-control" id="start" placeholder="" required>
    <label for="">End-time <span class="text-muted">(12 hour format)</span></label>
    <input type="time" class="form-control" id="end" placeholder="" required>
  </div>
<div class="col-lg-12">
  <button type="submit" id="btnsub" class="btn btn-primary">
    Submit
    
  </button>
  <button type="reset" class="btn btn-default">
Reset
  </button>
</div>

  </form>
</div>









<div class="container" id="update" style="display:none;">

<h3 class="h3">Update Yard </h3>
  <hr>




  <form method="post" name="reg2" id="reg2" onSubmit="submitForm2(); return false;">
  
  <div class="form-group col-md-6 disabled">
    <label for="">Organisation</label>
    <input type="text" class="form-control" id="org" placeholder="Organisation Name" disabled>
    <label for="Yard Name">Yard Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name of Yard" required >
    <label for="">Service Organisation</label>
    <input type="text" class="form-control " id="service" placeholder="Service organisation" disabled>
    <label for="">Location</label>
    <input type="text" class="form-control " id="loc" placeholder="Address of Yard" disabled>
      <label for="">Dockarea</label>
    <input type="text" class="form-control" id="dockarea1" placeholder="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Number of  Area</label>
    <input type="text" class="form-control" id="areanum1" placeholder="" >
      <label for="">Number of  Spot</label>
    <input type="text" class="form-control" id="areaspot1" placeholder="" >
    <label for="">Start-time <span class="text-muted">(12 hour format)</span></label>
    <input type="time" class="form-control" id="start1" placeholder="" required>
    <label for="">End-time <span class="text-muted">(12 hour format)</span></label>
    <input type="time" class="form-control" id="end1" placeholder="" required>
  </div>
<div class="col-lg-12">
 <!-------------------------3rd MODAL FINALIZE-------------------------->
  <div class="modal fade bs-example-modal-lg " id="view_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body" style="background-color:#5fcf80;">
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
  <button type="reset" class="btn btn-default">
Reset
  </button>
</div>
<span id="show2"></span>

  </form>
</div>

<div class="col-lg-12 table-responsive" id="updatelist" style="display:none">


</div>

<div class="col-lg-12 table-responsive" id="yardlist">


</div>
<script>
function myFunction() {
    var x = document.getElementById("create");
	var y = document.getElementById("update");
	 var z = document.getElementById("updatelist");
	 var p= document.getElementById("yardlist");	 
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
	var p= document.getElementById("yardlist");	 

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
  var ORG = button.id;
$.ajax({
  url:"update_yard_ajax.php",
  method:"GET",
  data:{"ORG":ORG},
  success: function(response){
  //console.log(response);
   

 var ob = JSON.parse(response);
     $("#org").val(ob.ORG);
     $("#name").val(ob.NAME);
     $("#service").val(ob.SERVICE_ORG);  
     $("#loc").val(ob.LOCATION); 
$("#dockarea1").val(ob.DOCKAREA); 
	 
     $("#areanum1").val(ob.AREA_NUM); 
	 $("#areaspot1").val(ob.SPOT_NUM);  
	 
     $("#start1").val(ob.START_TIME);  
     $("#end1").val(ob.END_TIME);     
  
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
$("#yardlist").load('yard_listajax.php')


}, 250);
});
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#updatelist").load('update_yard_listajax.php')


}, 3000);
});
</script>
<div class="modal fade bs-example-modal-lg " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body">
     
            <h2>Success!</h2>
                 <h4> Thanks For Creating Yard With Us.</h4>
     
          </div>
        </div>
    </div>
  </div>
  <!-------------------------2ND MODAL UPDATE-------------------------->
  <div class="modal fade bs-example-modal-lg " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
           <div class="modal-body">
     
            <h2>Update!</h2>
                 <h4> Thanks For Update Yard With Us.</h4>
     
          </div>
        </div>
    </div>
  </div>
 

   
    

  </body>
</html>
