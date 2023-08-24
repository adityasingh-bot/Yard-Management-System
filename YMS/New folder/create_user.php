<?php include('navbar.php');?>
<div  class="container-fluid"  >
<div class="row">
<h2 class="h2" style="text-align:center;">Create User</h2>
</div>
	
<div class="row">
	<div class="col-md-4">
	<input align="middle" type="text" class="form-control" id="e_name" placeholder="User Name" required>
	</div>
	<div class="col-md-4">
	<input align="middle" type="text" class="form-control" id="e_name" placeholder="User description" required>
	</div>
	<div class="col-md-4">
	<select name="yard_org" class="form-control"  id="yard_org" onChange="input();" srequired>
    <option  selected="true" value="" >Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
	<Option>Prefer Not To Say</Option>
  </select>
	</div>	
</div>	
<div class="row">
	<div class="col-md-4"
		 <p>&nbsp;</p>
</div>

<div class="col-md-2">
		 <h4 align="center">Join From:</h4>
</div>

<div class="col-md-2">
		 <h4 align="center">Join Till:</h4>
</div>


</div>
<div class="row">
	<div class="col-md-2">
	<input align="middle" type="number" class="form-control" id="age" placeholder="Age" required>
	</div>
	
	<div class="col-md-2">
	<select name="yard_org" class="form-control"  id="status" onChange="input();" srequired>
    <option  selected="true" value="" >Status</option>
    <option>Active</option>
    <option>Inactive</option>
    <option>On-Leave</option>
	<Option>Other</Option>
	</select>
	</div>	
	<div class="col-md-2">
		<input align="middle" type="date" class="form-control" id="join" placeholder="join" required>
	</div>
	<div class="col-md-2">
		<input align="middle" type="date" class="form-control" id="jointill" placeholder="jointill" required>
	</div>
	
	<div class="col-md-2">
		<input align="middle" type="password" class="form-control" id="pass" placeholder="Password" required>
	</div>
	<div class="col-md-2">
		<input align="middle" type="password" class="form-control" id="repass" placeholder="Re-Enter Password" required>
	</div>
</div>


<div class="row">
	<div class="col-md-4"
		 <p>&nbsp;</p>
</div>
</div>	
<div class="row">
	<div class="col-md-4">
	<input align="middle" type="email" class="form-control" id="e_mail" placeholder="E-Mail" required>
	</div>
	<div class="col-md-2">
		<input align="middle" type="number" class="form-control" id="mno" placeholder="Mobile No."	 required>
	</div>
	
	<div class="col-md-2">
		<input align="middle" type="number" class="form-control" id="pex" placeholder="Password Expire (Days)"	 required>
	</div>
	
	<div class="col-md-2">
		<input align="middle" type="number" class="form-control" id="cos" placeholder="Customer"	 required>
	</div>
	
	<div class="col-md-2">
		<input align="middle" type="number" class="form-control" id="sup" placeholder="Supplier"	 required>
	</div>
	
</div>
	



<div class="row">
	<div class="col-md-12">
		<h3 align="center">Direct Responsibilities</h3> 
</div>
</div>


<div class="row">

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
		<h3 align="center">Indirect Responsibilities</h3> 
</div>
	</div>
	
<div class="row">

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


</body>
</html>
