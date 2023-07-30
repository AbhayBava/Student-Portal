<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(isset($_POST['save']))
{	 
	 $Eno = $_POST['Eno'];
	 $pass = $_POST['pass'];
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $Branch = $_POST['Branch'];
	 $Date = $_POST['Date'];
	 $sem = $_POST['sem'];
	 $Add = $_POST['Add'];
	 $sql = "INSERT INTO student (Eno,Password,Name,Email,Phone,Branch,DOB,Sem,Address) VALUES('$Eno','$pass','$name','$email','$phone','$Branch','$Date','$sem','$Add')";
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
<h3><hr><center><a href="addstudent.php">Back</a></center><hr></h3>
</body>
</html>