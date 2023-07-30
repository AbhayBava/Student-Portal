 <?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "Student_portal";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  
  $Id = $_GET['Id'];
  $result =mysqli_query($conn,"SELECT * FROM teacher where Id='".$_GET["Id"]."'");
  $row = mysqli_fetch_array($result);
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
	  text-transform: uppercase;
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
	  }body
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
     top: 50%;
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
	  text-transform: uppercase;
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
<form action="proupdateteacher.php?Id=<?php echo $row["Id"]; ?>" method="POST">
 <div class="box">
  <h1>TEACHER PROFILE</h1>
	<table bgcolor="black" align="center" cellspacing="10">
    <tr>
		<td>TEACHER ID</td>
		<td><input type="text" name="Id" value="<?php echo $row['Id'] ?>" readonly /></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="Password" name="Password" value="<?php echo $row['Password'] ?>" readonly /></td>
	</tr>
	<tr>
		<td>NAME</td>
		<td><input type="text" name="Name" value="<?php echo $row['Name']?>" readonly /></td>
	</tr>
	<tr>
		<td>PHONE</td>
		<td><input type="text" name="Phone" value="<?php echo $row['Phone']?>" readonly /></td>
	</tr>
	<tr>
		<td>BRANCH</td>
		<td><input type="text" name="Branch" value="<?php echo $row['Branch']?>" readonly /></td>
	</tr>
	</table>
		<center><input type="submit" id="button" value="EDIT"></center>
	</div>
	</form>
</body>
</html>