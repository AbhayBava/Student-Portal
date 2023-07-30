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
    <h3><hr><center>Add Computer Engineer Result<center> <hr></h3>
	<form method="post" action="insertcompresult.php">
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
		<td>Java</td>
		<td><input type="text" name="java"></td>
	</tr>
	<tr>
		<td>CNS</td>
		<td><input type="text" name="cns"></td>
	</tr>
	<tr>
		<td>DWPD</td>
		<td><input type="text" name="dwpd"></td>
	<tr>
		<td>CMNT</td>
		<td><input type="text" name="cmnt"></td>
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