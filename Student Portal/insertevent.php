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
    <h3><hr><center>Add Event<center> <hr></h3>
	<form method="post" action="addevent.php">
	<table border="1" bgcolor="black" align="center" cellspacing="20">
	<tr>
		<td>Event Name</td>
		<td><input type="text" size="50" name="Event"></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="text" size="12" name="Date"></td>
	</tr>
	</table>
		<center><input type="submit" name="save" id="button" value="Add"></center>
	</form>
  </body>
</html>