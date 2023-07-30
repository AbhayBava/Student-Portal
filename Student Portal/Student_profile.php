 <?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "Student_portal";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $Eno = $_GET['Eno'];
  $sql=mysqli_query($conn,"SELECT * FROM student where Eno='".$_GET["Eno"]."' ");
  $row  = mysqli_fetch_array($sql);
  ?>
  <html>
  <head>
     <title>Profile</title>
  </head>
  <body>
   <style>
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
	  }
   </style>
  <form action="proupdate.php?Eno=<?php echo $row["Eno"]; ?>" method="POST">
  <div class="box">
  <h1>PROFILE</h1>
  <table bgcolor="black" align="center" cellspacing="10">
    <tr>
		<td>ENROLLMENT NO</td>
		<td><input type="text" name="Eno" value="<?php echo $row['Eno']?>" readonly /></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="Password" name="Password" value="<?php echo $row["Password"] ?>" readonly /></td>
	</tr>
	<tr>
		<td>NAME</td>
		<td><input type="text" name="Name" value="<?php echo $row['Name'] ?>" readonly /></td>
	</tr>
	<tr>	
		<td>EMAIL ID</td>
		<td><input type="text" name="Email" value="<?php echo $row['Email']?>" readonly /></td>
	</tr>
	<tr>
		<td>MOBILE NO</td>
		<td><input type="text" name="Phone" value="<?php echo $row['Phone']?>" readonly /></td>
	</tr>
	<tr>
		<td>BRANCH</td>
		<td><input type="text" name="Branch" value="<?php echo $row['Branch']?>" readonly /></td>
	</tr>
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
	    <td><input type="text" name="Address" value="<?php echo $row['Address'] ?>" readonly /></td>
	</tr>
	</table>
	<input type="submit" name="button" value="EDIT">
   </div>
  </form>
  </body>
  </html>