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
    <h3><hr><center>Insert Students<center> <hr></h3>
	<form method="post" action="insertstudent.php">
	<table border="1" bgcolor="black" align="center" cellspacing="10">
	<tr>
		<td>Eno:</td>
		<td><input type="number" name="Eno"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="text" name="pass"></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>	
		<td>Email Id:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Phone:</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td>Branch:</td>
		<td><input type="text" name="Branch"></td>
	<tr>
		<td>DOB:</td>
		<td><input type="text" name="Date"></td>
	</tr>
    <tr>
		<td>Sem:</td>
		<td><input type="text" name="sem"></td>
	</tr>
	<tr>
		<td>Address:</td>
	    <td><input type="text" name="Add"></td>
	</tr>
	</table>
		<center><input type="submit" name="save" id="button" value="Insert"></center>
	</form>
  </body>
</html>