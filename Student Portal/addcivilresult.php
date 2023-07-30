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
    <h3><hr><center>Add Civil Engineer Result<center> <hr></h3>
	<form method="post" action="insertcivilresult.php">
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
		<td>DSS</td>
		<td><input type="text" name="dss"></td>
	</tr>
	<tr>
		<td>ACT</td>
		<td><input type="text" name="act"></td>
	</tr>
	<tr>
		<td>WS&SE </td>
		<td><input type="text" name="wsse"></td>
	</tr>
	<tr>
		<td>ECV</td>
		<td><input type="text" name="ecv"></td>
	</tr>
	<tr>
		<td>PROJECT 1</td>
		<td><input type="text" name="pro"></td>
	</tr>
	</table>
		<center><input type="submit" name="save" id="button" value="Insert"></center>
	</form>
  </body>
</html>