<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

 
$sql = "select * from student";    
$result = $conn->query($sql);
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
h3
{
 color:white;
 background-image: url('back1.jpg');
 background-size: cover;
 background-size: 100% 100%;
}
table
{
color:black;
border-radius:10px;
}
a{
	background-color:Red;
	color:white;
}
th{
	background-color:Black;
	color:white;
}
td{
	background-color:#F5A9A9;
	color:Black;
}
</style>
</head>
  <body>
    <h3><hr><center>Manage Students<center> <hr></h3>
	<table border="3" width="100%" style="border-collapse:collapse;">
	<tr>
		<th>Eno</th>
		<th>Password</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Phone</th>
		<th>Branch</th>
		<th>DOB</th>
		<th>Sem</th>
		<th>Address</th>
		<th>Update</th>
        <th>Delete</th>
	</tr>
<tbody>    
<?php    
    while($row = mysqli_fetch_assoc($result)){    
    
    ?>  
    <tr>  
        <td align="center"><?php echo $row["Eno"]; ?></td>
        <td align="center"><?php echo $row["Password"]; ?></td>
		<td align="center"><?php echo $row["Name"]; ?></td>
		<td align="center"><?php echo $row["Email"]; ?></td>
        <td align="center"><?php echo $row["Phone"]; ?></td>
        <td align="center"><?php echo $row["Branch"]; ?></td>
        <td align="center"><?php echo $row["DOB"]; ?></td>
        <td align="center"><?php echo $row["Sem"]; ?></td>
        <td align="center"><?php echo $row["Address"]; ?></td>
		
		<td align="center">
         <a style="background-color:Green;" href="updatestudent.php?Eno=<?php echo $row["Eno"]; ?>">Update</a>
        </td>
	
        <td align="center">
         <a href="deletestudent.php?Eno=<?php echo $row["Eno"]; ?>">Delete</a>
        </td>
     </tr>  
	  <?php } ?>  
</tbody>
</table>
</body>
</html>

  