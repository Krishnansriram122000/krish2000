<html>
	<head>
		<meta http-equiv="refresh" content="5,https://Krishnansriram122000.github.io/krish2000/appp.html">
	</head>
<body bgcolor="#b81f34">
	<b><marquee>
<?php
	$conn=mysqli_connect("localhost","root","","logindb");
	$usn=$_POST["usn"];
	$pas=$_POST["pas"];
	$query="select * from logindetai where USERNAME='$usn' AND PASSWORD='$pas';";
	$result=mysqli_query($conn,$query);
	$i=mysqli_fetch_assoc($result);
	echo "hello ".$i['USERNAME']."! GOOD";
?>
<p id="summa"></p>
<script>
	var d=new Date();
	if(d.getHours()<12)
	document.getElementById("summa").innerHTML="MORNING";
	else if(d.getHours()>=19)
	document.getElementById("summa").innerHTML="NIGHT";
	else 
	document.getElementById("summa").innerHTML="AFTERNOON";
</script>

<?php
	$conn=mysqli_connect("localhost","root","","logindb");
	$usn=$_POST["usn"];
	$pas=$_POST["pas"];
	$query="select * from logindetai where USERNAME='$usn' AND PASSWORD='$pas';";
	$result=mysqli_query($conn,$query);
	$i=mysqli_fetch_assoc($result);
	echo "your emailid is ".$i['MAIL'];
?>
		</b></marquee>
</body>
</html>
