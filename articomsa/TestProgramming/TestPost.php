<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test Jquery</title>
</head>
 <script> 
function chk()
 { 
 var dataString='name';  
 
 
 $.post("target.php",{postname:dataString},
 function(data){ 
 $('#paraf').html(data);
	 })
  
  /*$.ajax({
	 	type:"post",
		url:"target.php",
		data:dataString,
		dataType:"html",
		cache:false, 
		success: function(info){ 
		$("#paraf").html(info)  
		}
	
	 });*/
  
 }
 </script>  
 
 <button onclick="chk()"> try this!</button>
<p id="paraf"> </p>

<body>
</body>
</html>