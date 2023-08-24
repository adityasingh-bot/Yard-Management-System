<?php include('navbar.php');?>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("btnsub").disabled = true;
	_("btnsub").innerHTML = 'please wait ...';
	var formdata = new FormData();
	
	formdata.append( "e_name", _("e_name").value );
	formdata.append( "pass", _("pass").value );
	formdata.append( "e_desc", _("e_desc").value );
	formdata.append( "status", _("status").value );
	formdata.append( "gender", _("gender").value );
	formdata.append( "age", _("age").value );
	formdata.append( "join", _("join").value );
	formdata.append( "jointill", _("jointill").value );
	formdata.append( "email", _("email").value );
	formdata.append( "mno", _("mno").value );
	formdata.append( "pex", _("pex").value );
	

	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "create_user_db.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("reg").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
				
			} else {
			
				_("show").innerHTML = ajax.responseText;
				_("btnsub").disabled = false;
			  }
			  
		}
	}
	ajax.send( formdata );
	 _("reg").reset();
}
</script>
<div class="container-fluid"  >
<div class="row">
<h2 class="h2" style="text-align:center;">Create User</h2>
</div>
	<form method="post" name="reg" id="reg" onSubmit="submitForm(); return false;">
<div class="row">
	<div class="col-md-4">
	<input align="middle" type="text" class="form-control" id="e_name" placeholder="User Name" required>
	</div>
	<div class="col-md-2">
    <input align="middle" type="password" class="form-control" id="pass" placeholder="Password" required>
	</div>
	<div class="col-md-3">
    	<input align="middle" type="text" class="form-control" id="e_desc" placeholder="User description" required>
</div>
	<div class="col-md-3">
<select name="status" class="form-control"  id="status"  required>
    <option  selected="true" value="" >Status</option>
    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>
    <option value="On-Leave">On-Leave</option>
	<Option value="Other">Other</Option>
	</select>
	
	</div>	
</div>	
<div class="row">
	<div class="col-md-4">
		 <p>&nbsp;</p>
</div>
<div class="col-md-2">
		 <p>&nbsp;</p>
</div>
<div class="col-md-3">
		 <h4 align="center">Join From:</h4>
</div>

<div class="col-md-3">
		 <h4 align="center">Join Till:</h4>
</div>


</div>
<div class="row">
	<div class="col-md-3">
    <select name="gender" class="form-control"  id="gender"  srequired>
    <option  selected="true" value="" >Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
	<Option value="Prefer Not To Say">Prefer Not To Say</Option>
  </select>
	
	</div>
	
	<div class="col-md-3">
	<input align="middle" type="text" class="form-control" id="age" placeholder="Age" required>
	</div>	
	<div class="col-md-3">
		<input align="middle" type="date" class="form-control" id="join" placeholder="join" required>
	</div>
	<div class="col-md-3">
		<input align="middle" type="date" class="form-control" id="jointill" placeholder="jointill" required>
	</div>
	
	<!--<div class="col-md-3">
		<input align="middle" type="password" class="form-control" id="pass" placeholder="Password" required>
	</div>-->
	
</div>


<h2></h2>
<div class="row">
	<div class="col-md-4">
	<input align="middle" type="email" class="form-control" id="email" placeholder="E-Mail" required>
	</div>
	<div class="col-md-2">
		<input align="middle" type="text" class="form-control" id="mno" placeholder="Mobile No."	 required>
	</div>
	
	<div class="col-md-2">
		<input align="middle" type="text" class="form-control" id="pex" placeholder="Password Expire (Days)"	 required>
	</div>
	
	<div class="col-md-1">
		
	</div>
	
	<div class="col-md-3">
    <input type="submit" id="btnsub" class="btn btn-success"  value="Create User">
		<input type="reset" id="reset" class="btn btn-warning" value="Reset" >
	</div>
	
</div>
</form>
<span id="show"></span>

<div class="row">
	<div class="col-md-12">
		<h3 align="center">Direct Responsibilities<br> <br><button type="button" name="create_yard" class="btn btn-primary" onClick="myFunction()">Assign Responsiblities</button> </h3> 
</div>
</div>


<div class="row" id="direct_response" style="display:none;">

	<div class="col-md-3">
	<input align="middle" type="number" class="form-control" id="sup" placeholder="Attribute"	 required>
	</div>
	
	<div class="col-md-3">
	<input align="middle" type="number" class="form-control" id="sup" placeholder="Application"	 required>
	</div>
	
	<div class="col-md-3">
	<input align="middle" type="number" class="form-control" id="sup" placeholder="Value"	 required>
	</div>
	
	<div class="col-md-1" align="center">
		<button type="button" id="add_res" class="btn btn-success">Add</button>
	</div>
		
	<div class="col-md-1" align="center">
		<button type="button" id="reset" class="btn btn-primary">Reset</button>
	</div>
	
	<div class="col-md-1" align="center">
		<button type="button" id="reset_all" class="btn btn-danger">Reset All</button>
	</div>
</div>
	
	
<div class="row">
	<div class="col-md-12">
		<h3 align="center">Indirect Responsibilities <br><br><button type="button" name="create_yard" class="btn btn-primary" onClick="myFunction2()">Assign Indirect Responsiblities</button></h3> 
</div>

	</div>
	
<div class="row" id="indirect_response" style="display:none;">

	<div class="col-md-3" >
	<input align="middle" type="number" class="form-control" id="sup" placeholder="Attribute"	 required>
	</div>
	
	<div class="col-md-3" >
	<input align="middle" type="number" class="form-control" id="sup" placeholder="Application"	 required>
	</div>
	
	<div class="col-md-3" >
	<input align="middle" type="number" class="form-control" id="sup" placeholder="Value"	 required>
	</div>
	
	<div class="col-md-1" align="center">
		<button type="button" id="add_res" class="btn btn-success">Add</button>
	</div>
		
	<div class="col-md-1" align="center">
		<button type="button" id="reset" class="btn btn-primary">Reset</button>
	</div>
	
	<div class="col-md-1" align="center">
		<button type="button" id="reset_all" class="btn btn-danger">Reset All</button>
	</div>
</div>

<div class="col-lg-12 table-responsive " id="configurelist">
</div>
  <script>
$(document).ready(function(){
setInterval(function(){
$("#configurelist").load('user_list_ajax.php')
}, 250);
});
</script>
<script>
function myFunction(){
 var x = document.getElementById("direct_response");
  if (x.style.display == "none") {
x.style.display="block";

}
else{
x.style.display="none";

}
}
</script>
<script>
function myFunction2(){
 var x = document.getElementById("indirect_response");
  if (x.style.display == "none") {
x.style.display="block";

}
else{
x.style.display="none";

}
}
</script>


</body>
</html>
