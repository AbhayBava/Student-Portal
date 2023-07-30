<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(isset($_POST['save']))
{	 
	 $Id = $_POST['Id'];
	 $pass = $_POST['pass'];
	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $Branch = $_POST['Branch'];
	 $sql = "INSERT INTO teacher (Id,Password,Name,Phone,Branch) VALUES('$Id','$pass','$name','$phone','$Branch')";
	 if (mysqli_query($conn, $sql)) {
		 echo '<script>alert("New record created successfully !")</script>';
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
<h3><hr><center><a href="addteacher.php">Back</a></center><hr></h3>
</body>
</html>