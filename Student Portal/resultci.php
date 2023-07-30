<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "Student_portal";
  $conn=mysqli_connect($servername,$username,$password,"$dbname");
  $Eno = $_GET['Eno'];
  $sql = mysqli_query($conn,"SELECT * FROM civileng where Eno='".$_GET["Eno"]."' ");
  $row = mysqli_fetch_array($sql);
?>
<html>
  <head>
    <title> Results </title>
    <style> 
    body
	{
	  background-color:#d8cef6;
    }
	h3
	{
	  color:white;
	  background-image: url('back1.jpg');
	}
	th
	{
	  background-color:Black;
      color:white;
    }
    td
	{
	  background-color:#F5A9A9;
	  color:Black;
	}
    </style>
  </head>
<body>
<h3><hr><center>Civil Engineer Mid Exam Results<center> <hr></h3>
<form action="" method="post">
<table border="3" width="80%" style="border-collapse:collapse;" >
        <tr>
          <th>Eno</th>
          <th>Name</th>
          <th>DSS</th>
          <th>ACT</th>
		  <th>WS&SE </th>
		  <th>ECV</th>
		  <th>PROJECT 1</th>
        </tr>
<tbody>		
<tr>
   <td align="center"><?php echo $row['Eno'];?></td>
   <td align="center"><?php echo $row['Name'];?></td>
   <td align="center"><?php echo $row['Dss'];?></td>
   <td align="center"><?php echo $row['Act'];?></td>
   <td align="center"><?php echo $row['Wsse'];?></td>
   <td align="center"><?php echo $row['Ecv'];?></td>
   <td align="center"><?php echo $row['Project1'];?></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>