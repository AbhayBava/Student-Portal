<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

 
$sql = "select * from event";    
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
    <h3><hr><center>Manage Events<center> <hr></h3>
	<table border="3" width="100%" style="border-collapse:collapse;">
	<tr>
		<th>Event</th>
		<th>Date</th>
        <th>Delete</th>
	</tr>
<tbody>    
<?php    
    while($row = mysqli_fetch_assoc($result)){    
    
    ?>  
    <tr>  
        <td align="center"><?php echo $row["Event"]; ?></td>
        <td align="center"><?php echo $row["Date"]; ?></td>
		
        <td align="center">
         <a href="deleteevent.php?Event=<?php echo $row["Event"]; ?>">Delete</a>
        </td>
     </tr>  
	  <?php } ?>  
</tbody>
</table>
</body>
</html>