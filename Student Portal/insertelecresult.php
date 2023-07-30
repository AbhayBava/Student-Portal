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
	 $em = $_POST['em'];
	 $EC2 = $_POST['EC2']; 
	 $pe = $_POST['pe'];
	 $Mii = $_POST['Mii'];
	 $Project1 = $_POST['Project1'];
	 $sql = "INSERT INTO electricaeng (Eno,Name,Esem,Ec2,Ped,Mii,Project1) VALUES('$Eno','$name','$em','$EC2','$pe','$Mii','$Project1')";
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
<h3><hr><center><a href="addelecresult.php">Back</a></center><hr></h3>
</body>
</html>