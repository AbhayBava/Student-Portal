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
	  color:white;
	  background-image: url('back1.jpg');
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
<h3><hr><center>Electrical Engineer Mid Exam Results<center> <hr></h3>
<form action="resultel.php" method="get">
      <fieldset background-color="pink">
      <legend>Enter Your Details</legend>
      <br>
      <table border="0">
	   <tr>
	      <td> Enter Your Enrollment Number - </td>
          <td><input type="text" name="Eno" placeholder="Value To Search"></td>
	   </tr>
	  </table>
      <center><td><input type="submit" id="Button" value="Search"></td></center>
      </fieldset>
	  <br>
	  <br>
</form>
</body>