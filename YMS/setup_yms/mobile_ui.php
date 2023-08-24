<?php include('navbar.php');?>
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item active">
      <a href="#m_equip" data-toggle="tab" onClick="myFunction()" >Move Equipment</a>
    </li>
    <li class="nav-item">
      <a href="#s_equip" data-toggle="tab" onClick="myFunction2()">Seal Equipment</a>
    </li>
    <li class="nav-item">
      <a href="#un_equip" data-toggle="tab" onClick="myFunction3()">Unseal Equipment</a>
    </li>
     <li class="nav-item">
     <a href="#v_equip" data-toggle="tab" onClick="myFunction4()">View/Update Equipment</a>
    </li>
  </ul>

<div  class="container" id="m_equip">
  <h3 class="h3">Move Equipment:</h3>
  
  <form  class="col-xs-8 col-md-4 col-lg-3" action="index.html" method="post">
    <label for="">SCAC Code:</label>
    <input type="text" name="scac" value="" class="form-control">
    <label for="">Equipment Number:</label>
    <input type="text" name="equipment_id" value="" class="form-control">
    <label for="">Area:</label>
    <input type="text" disabled name="area" value="" class="form-control">
    <label for="">Dock/Spot:</label>
    <input type="text" disabled name="spot" value="" class="form-control">
    <label for="">To Area:</label>
    <input type="text" name="to_area" value="" class="form-control">
    <label for="">To Dock/To Spot:</label>
    <input type="text" name="to_spot" value="" class="form-control">
    <input type="submit" name="" value="Move" method="post" class="btn btn-primary" style="margin-top:10px;">
  </form>

</div>


<div  style="display:none;" class="container " id="s_equip">
  <h3 class="h3">Seal Equipment:</h3>
  <hr>
  <form  class="col-xs-8 col-md-4 col-lg-3" action="index.html" method="post">
    <label for="">Dock Id</label>
    <input type="text" name="dock_id" value="" class="form-control">
    <label for="">SCAC Code:</label>
    <input type="text" name="scac" value="" class="form-control">
    <label for="">Equipment Number:</label>
    <input type="text" name="equipment_id" value="" class="form-control">
    <label for="">Seal Code:</label>
    <input type="text" name="seal_code" value="" class="form-control">
    <label for="">Seal Status</label>
    <input type="text" disabled name="seal_status" value="Sealed" class="form-control">
    <div class="btn-group btn-group" style="margin-top:10px;">
      <input type="submit" name="submit" value="Done" method="post" class="btn btn-primary" >
      <input type="submit" name="next_seal" value="Next Seal" method="post" class="btn btn-default">
      <input type="submit" name="cancel" value="Cancel" method="post" class="btn btn-danger">
    </div>
  </form>

</div>
 

  <div  style="display:none;" class="container " id="us_equip">
    <h3 class="h3">Unseal Equipment:</h3>
    <hr>
    <form  class="col-xs-8 col-md-4 col-lg-3" action="index.html" method="post">
      <label for="">Dock Id</label>
      <input type="text" name="dock_id" value="" class="form-control">

      <label for="">SCAC Code:</label>
      <input type="text" disabled name="scac" value="" class="form-control">

      <label for="">Equipment Number:</label>
      <input type="text" name="equipment_id" value="" class="form-control">

      <label for="">Seal Code:</label>
      <input type="text" name="seal_code" value="" class="form-control">

      <label for="">Current Status</label>
      <input type="text" disabled name="seal_status" value="Sealed" class="form-control">

      <label for="">New Status</label>
      <input type="text" disabled name="new_status" value="Unsealed" class="form-control">

      <div class="btn-group btn-group" style="margin-top:10px;">
        <input type="submit" name="submit" value="Done" method="post" class="btn btn-primary" >
        <input type="submit" name="next_seal" value="Next Seal" method="post" class="btn btn-default">
        <input type="submit" name="cancel" value="Cancel" method="post" class="btn btn-danger">
      </div>
              <input type="submit" name="exception" value="Exception" method="post" class="btn btn-danger">
    </form>

  </div>
   







<div style="display:none;" class="container " id="v_equip">
  <h3 class="h3">View/Update Equipment:</h3>
  <hr>
  <form  class="col-xs-8 col-md-4 col-lg-3" action="index.html" method="post">
    <label for="">Load Type</label>
    <input type="text" name="load_type" value="" class="form-control">



    <div class="btn-group btn-group" style="margin-top:10px;">
      <input type="submit" name="Update" value="Update" method="post" class="btn btn-primary" >
      <input type="submit" name="contents" value="Contents" method="post" class="btn btn-default" >

      <input type="submit" name="seals" value="Seals" method="post" class="btn btn-default">
      <input type="submit" name="cancel" value="Cancel" method="post" class="btn btn-danger">
    </div>

  </form>
</div>
<script>
function myFunction() {
    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip");
	 var r = document.getElementById("us_equip");
	 var s = document.getElementById("v_equip");	 
    if (p.style.display === "none" ) {
	    p.style.display = "block";
		q.style.display = "none";
        r.style.display = "none";
		s.style.display = "none";
		

    }
}
function myFunction2() {
    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip");
	 var r = document.getElementById("us_equip");
	 var s = document.getElementById("v_equip");	 
    if (q.style.display === "none" ) {
	    q.style.display = "block";
		p.style.display = "none";
        r.style.display = "none";
		s.style.display = "none";
		

    }
	
	
	
}
function myFunction3() {
    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip");
	 var r = document.getElementById("us_equip");
	 var s = document.getElementById("v_equip");	 
    if (r.style.display === "none" ) {
	    r.style.display = "block";
		p.style.display = "none";
        q.style.display = "none";
		s.style.display = "none";
		

    }
	
	
	
}
function myFunction4() {
    var p = document.getElementById("m_equip");
	var q = document.getElementById("s_equip");
	 var r = document.getElementById("us_equip");
	 var s = document.getElementById("v_equip");	 
    if (s.style.display === "none" ) {
	    s.style.display = "block";
		p.style.display = "none";
        r.style.display = "none";
		q.style.display = "none";
		

    }
	
	
	
}
</script>










  </body>
