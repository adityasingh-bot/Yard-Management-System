
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

<p id="demo"></p>
</body>




<script>
$(function(){
 myFunction();
});
function myFunction() {
  var text = "";
  var i;
  for (i = 0; i < 5; i++) {
      text += "The number is " + i + "<br>";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>


</html>