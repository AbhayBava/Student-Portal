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
	 $seed = $_POST['seed'];
	 $me = $_POST['me'];
	 $dme = $_POST['dme'];
	 $ie = $_POST['ie'];
	 $Te = $_POST['Te'];
	 $pro = $_POST['pro'];
	 $sql = "INSERT INTO mechanicaleng (Eno,Name,Seed,Me3,Dme,Ie,Te2,Project1) VALUES('$Eno','$name','$seed','$me','$dme','$ie','$Te','$pro')";
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
<h3><hr><center><a href="addmechresult.php">Back</a></center><hr></h3>
</body>
</html>