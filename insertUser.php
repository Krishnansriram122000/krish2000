<html>
<head>
<meta http-equiv="refresh" content="5,index.html">
<body>
<?php
	$conn=mysqli_connect("localhost","root","","logindb");
	if($conn) echo 1;
	$usn=$_POST["usn"];
	$pass=$_POST["pass1"];
	$mail=$_POST["mail1"];
	$query="insert into logindetai(USERNAME,PASSWORD,MAIL) values('$usn','$pass','$mail');";
	$result=mysqli_query($conn,$query);
	if($result)
		echo "successfully created accout";
	else
		echo "something went wrong";
	?>
</body>
</html>