<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(isset($_POST['save']))
{	 
	 $Eno = $_POST['Eno'];
	 $name = $_POST['name'];
	 $dss = $_POST['dss'];
	 $act = $_POST['act'];
	 $wsse = $_POST['wsse'];
	 $ecv = $_POST['ecv'];
	 $pro = $_POST['pro'];
	 $sql = "INSERT INTO civileng (Eno,Name,Dss,Act,Wsse,Ecv,Project1) VALUES('$Eno','$name','$dss','$act','$wsse','$ecv','$pro')";
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
<h3><hr><center><a href="addcivilresult.php">Back</a></center><hr></h3>
</body>
</html>