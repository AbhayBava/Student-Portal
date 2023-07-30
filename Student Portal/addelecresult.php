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
    <h3><hr><center>Add Electrical Engineer Result<center> <hr></h3>
	<form method="POST" action="insertelecresult.php">
	<table border="1" bgcolor="black" align="center" cellspacing="10">
	<tr>
		<td>Eno:</td>
		<td><input type="number" name="Eno"></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>	
		<td>ES OR EM</td>
		<td><input type="text" name="em"></td>
	</tr>
	<tr>
		<td>EC-2</td>
		<td><input type="text" name="EC2"></td>
	</tr>
	<tr>
		<td>PED</td>
		<td><input type="text" name="pe"></td>
	</tr>
	<tr>
		<td>MII</td>
		<td><input type="text" name="Mii"></td>
	</tr>
	<tr>
		<td>PROJECT 1</td>
		<td><input type="text" name="Project1"></td>
	</tr>
	</table>
		<center><input type="submit" name="save" id="button" value="Insert"></center>
	</form>
  </body>
</html>