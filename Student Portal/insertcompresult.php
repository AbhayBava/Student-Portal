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
	 $java = $_POST['java'];
	 $cns = $_POST['cns'];
	 $dwpd = $_POST['dwpd'];
	 $cmnt = $_POST['cmnt'];
	 $pro = $_POST['pro'];
	 $sql = "INSERT INTO computereng (Eno,Name,java,cns,dwpd,cmnt,Project1) VALUES('$Eno','$name','$java','$cns','$dwpd','$cmnt','$pro')";
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
<h3><hr><center><a href="addcompresult.php">Back</a></center><hr></h3>
</body>
</html>