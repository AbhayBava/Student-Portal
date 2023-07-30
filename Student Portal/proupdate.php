<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

	$sql = "Select * from student where Eno ='".$_POST["Eno"]."' ";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
	
if(isset($_POST['edit']))
{
	 $Password = $_POST['Password'];
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Phone = $_POST['Phone'];
	 $Branch = $_POST['Branch'];
	 $DOB = $_POST['DOB'];
	 $Sem = $_POST['Sem'];
	 $Address = $_POST['Address'];
	 $update="update student set Password='".$Password."', Name='".$Name."', Email='".$Email."', Phone='".$Phone."', Branch='".$Branch."', DOB='".$DOB."', Sem='".$Sem."', Address='".$Address."' where Eno='".$_GET["Eno"]."' ";
     $result = $conn->query($update);
     header("Location: Student.php");
} 
?>
<html>
<head>
<style type="text/css">
body
	{
	 background-image: url('back1.jpg');
	 background-size: cover;
	 background-size: 100% 100%;
	}
   .box
    {
     width: 600px;
     padding: 40px;
     position: absolute;
     top: 60%;
     left: 50%;
     transform: translate(-50%,-50%);
	 background-image: url('back1.jpg');
	 background-size: cover;
	 background-size: 100% 100%;
     text-align: center;
    }
	.box input[type = "text"],.box input[type = "password"]
	 {
      display: block;
      text-align: center;
      border: 2px solid #3498db;
      padding: 14px 10px;
      width: 400px;
	  font-family: monospace;
	  font-size:15px;
     }
	.box input[type = "submit"]
	 {
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 40px;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
	  background: black;
	  color:white;
     }
	.box input[type = "submit"]:hover
	 {
      background: #2ecc71;
     }
    .box h1
	 {
      color: white;
      text-transform: uppercase;
      font-weight: 500;
	  background-color:black;
     }
    table
	 {
	  color:white;
	  border-radius:20px;
	 }
	 td
	  {
		 font-family: monospace; 
		 font-size:15px;
	  }
</style>
</head>
<body>

<div class="box">
<table bgcolor="black" align="center" cellspacing="10">
    <tr>
		<td>ENROLLMENT NO</td>
		<td><input type="text" name="Eno" value="<?php echo $row['Eno']?>" readonly /></td>
	</tr>
<form method="POST">
 <h1>PROFILE EDIT</h1>
	
	<tr>
		<td>PASSWORD</td>
		<td><input type="text" name="Password" value="<?php echo $row['Password'] ?>"/></td>
	</tr>
	<tr>
		<td>NAME</td>
		<td><input type="text" name="Name" value="<?php echo $row['Name']?>" readonly /></td>
	</tr>
	<tr>	
		<td>EMAIL ID</td>
		<td><input type="text" name="Email" value="<?php echo $row['Email']?>" /></td>
	</tr>
	<tr>
		<td>PHONE</td>
		<td><input type="text" name="Phone" value="<?php echo $row['Phone']?>" /></td>
	</tr>
	<tr>
		<td>BRANCH</td>
		<td><input type="text" name="Branch" value="<?php echo $row['Branch']?>" readonly /></td>
	<tr>
		<td>BIRTH DATE</td>
		<td><input type="text" name="DOB" value="<?php echo $row['DOB']?>" readonly /></td>
	</tr>
    <tr>
		<td>SEMESTER</td>
		<td><input type="text" name="Sem" value="<?php echo $row['Sem']?>" readonly /></td>
	</tr>
	<tr>
		<td>ADDRESS</td>
	    <td><input type="text" name="Address" value="<?php echo $row['Address'] ?>"/></td>
	</tr>
	</table>
		<center><input type="submit" name="edit" id="button" value="Update"></center>
	</div>
	</form>
</body>
</html>