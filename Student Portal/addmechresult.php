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
    <h3><hr><center>Add Mechanical Engineer Result<center> <hr></h3>
	<form method="post" action="insertmechresult.php">
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
		<td>SEED</td>
		<td><input type="text" name="seed"></td>
	</tr>
	<tr>
		<td>ME-3</td>
		<td><input type="text" name="me"></td>
	</tr>
	<tr>
		<td>DME</td>
		<td><input type="text" name="dme"></td>
	<tr>
		<td>IE</td>
		<td><input type="text" name="ie"></td>
	</tr>
	<tr>
		<td>TE-2</td>
		<td><input type="text" name="Te"></td>
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