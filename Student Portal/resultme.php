<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "Student_portal";
  $conn=mysqli_connect($servername,$username,$password,"$dbname");
  $Eno = $_GET['Eno'];
  $sql=mysqli_query($conn,"SELECT * FROM mechanicaleng where Eno='".$_GET["Eno"]."' ");
  $row  = mysqli_fetch_array($sql);
?>
<html>
  <head>
   <title> Results </title>
    <style> 
    body
	{
	  background-color:#d8cef6;
    }
	fieldset 
	{
	  background-color: #ACDAFC;
	}
    legend 
	{
	  background-color: blue;
	  color: white;
	  padding: 5px 10px;
	}
	h3
	{
	  background-image: url('back1.jpg');
	  color:white;
	}
	#Button
	{
      background-color:black;
	  color:white;
      height:40px;
	  width:150px;
	}
	input
	{
	  background-color:white;
	  color:black;
	  height:30px;
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
<h3><hr><center>Mechanical Engineer Mid Exam Results<center> <hr></h3>
<form action="" method="post">
<table border="3" width="80%" style="border-collapse:collapse;" >
        <tr>
          <th>Eno</th>
          <th>Name</th>
          <th>SEED</th>
          <th>ME-3</th>
		  <th>DME</th>
		  <th>IE</th>
		  <th>TE-2</th>
		  <th>PROJECT 1</th>
        </tr>
<tbody>		
<tr>
   <td align="center"><?php echo $row['Eno'];?></td>
   <td align="center"><?php echo $row['Name'];?></td>
   <td align="center"><?php echo $row['Seed'];?></td>
   <td align="center"><?php echo $row['Me3'];?></td>
   <td align="center"><?php echo $row['Dme'];?></td>
   <td align="center"><?php echo $row['Ie'];?></td>
   <td align="center"><?php echo $row['Te2'];?></td>
   <td align="center"><?php echo $row['Project1'];?></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>