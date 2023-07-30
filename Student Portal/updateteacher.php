<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

	$sql = "Select * from teacher where Id ='".$_GET["Id"]."' ";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
	
if(isset($_POST['edit']))
{
	 $Password = $_POST['Password'];
	 $Name = $_POST['Name'];
	 $Phone = $_POST['Phone'];
	 $Branch = $_POST['Branch'];
	 $update="update teacher set Password='".$Password."', Name='".$Name."', Phone='".$Phone."', Branch='".$Branch."' where Id='".$_GET["Id"]."' ";
     $result = $conn->query($update);
     header("Location: manageteacher.php");
} 
?>
<html>
<head>
<style type="text/css">
h3{
 background-image: url('back1.jpg');
 background-size: cover;
 background-size: 100% 100%;
 color:white;
}
table
{
color:white;
border-radius:10px;
}
body
{
 background-image: url('back1.jpg');
 background-size: cover;
 background-size: 100% 100%;
}
#button
{
background-color:blue;
color:white;
height:32px;
width:85px;
border-radius:25px;
}
</style>
</head>
<body>
<h3><hr><center>Update Teacher<center> <hr></h3>
<form method="POST">
	<table border="1" align="center" cellspacing="10">
	<input type="hidden" name="new" value="1" />

	<tr>
		<td>Password:</td>
		<td><input type="text" name="Password" value="<?php echo $row['Password'] ?>"/></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="Name" value="<?php echo $row['Name']?>" /></td>
	</tr>
	<tr>
		<td>Phone:</td>
		<td><input type="text" name="Phone" value="<?php echo $row['Phone']?>" /></td>
	</tr>
	<tr>
		<td>Branch:</td>
		<td><input type="text" name="Branch" value="<?php echo $row['Branch']?>" /></td>
	</tr>
	</table>
		<center><input type="submit" name="edit" id="button" value="Update"></center>
	</form>
</body>
</html>