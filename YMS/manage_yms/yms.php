<?php   include('nav_myo.php'); ?>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>

<body>
<div class="col-md-2">

<table width="804" bordercolor="blue" height="570" border="2" align="center" cellpadding="3" cellspacing="3" class="list-group-item-danger">
  <tr>
    <td colspan="4" rowspan="2"><label></label></td>
    <td height="60" colspan="17"><div align="center"><span class="btn btn-successinfo" align="center" style="width:auto; height:50px; text-align:center" >INBOUND ENTERIES (RECIVING POINT)</span></div></td>
    <td colspan="2" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td ><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
  </tr>
  <tr>
    <td height="24" colspan="23">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" rowspan="3"><span class="btn btn-successwarning" style="width:75px; height:110px;  paddi">Check-IN</span></td>
    <td width="45" height="38"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-danger" style:"width:auto; height:auto;"></span></td>
    <td width="21" rowspan="3">&nbsp;</td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21"><span class="btn btn-success"></span></td>
    <td width="21" rowspan="3">&nbsp;</td>
    <td width="108" rowspan="8"><span class="btn btn-successinfo" style="width:30; height:auto; text-align:center">WAREHOUSE<br />
    </span></td>
  </tr>
  
  <tr>
    <td height="42" colspan="7">&nbsp;</td>
    <td colspan="9">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="38"><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
  </tr>
  
  <tr>
    <td height="34" colspan="22">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" rowspan="3"><span class="btn btn-successwarning" style="width:75px; height:110px; text-align:center">Check-OUT</span></td>
    <td height="38"><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td rowspan="3">&nbsp;</td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td rowspan="3">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="47" colspan="7">&nbsp;</td>
    <td colspan="9">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="38"><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
    <td><span class="btn btn-success"></span></td>
  </tr>
  <tr>
    <td colspan="4" rowspan="2">&nbsp;</td>
    <td height="38"><span class="btn btn-successdanger" onclick="myFunction()" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn batn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td height="38"><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
    <td><span class="btn btn-successdanger" style="color:black; background:yellow"></span></td>
  </tr>
  <tr>
    <td height="66" colspan="19"><div align="center"><span class="btn btn-successinfo" style="width:auto; height:50px; text-align:center">OUND ENTERIES (RECIVING POINT)</span>
    </td>
  </tr>
</table>
</dIv>

 

<dIv class="col-md-6">
<label></label>
</dIv>

<p>&nbsp;</p>
<p>..</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
function myFunction() {
    alert("I am an alert box!");
}
//-->
</script>
</body>
</html>
