<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(isset($_POST['save']))
{	 
	 $Event = $_POST['Event'];
	 $Date = $_POST['Date'];
	 $sql = "INSERT INTO event (Event,Date) VALUES('$Event','$Date')";
	 if (mysqli_query($conn, $sql)) {
		 echo '<script>alert("Event Inserted Successfully")</script>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<html>
<head>
<style type="text/css">
body{
background-color:White;
}
h3{
background-color:Orange;
}
a{
	text-decoration:none;
	background-color:white;
	color:gray;
}
</style>
</head>
<body>
<h3><hr><center><a href="insertevent.php">Back</a></center><hr></h3>
</body>
</html>