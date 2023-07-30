<?php
$Eno = $_POST['Eno'];
$Password = $_POST['Password'];

$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,$dbname);
	$sql = mysqli_query($conn,"SELECT * FROM student where Eno='$Eno' and Password='$Password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
?>
<html>
<body>
<style type="text/css">
body 
{
 background-image: url('back1.jpg');
 background-size: cover;
 background-size: 100% 100%;
}
h1{
	background-color:black;
	color:white;
    font-weight: 500;
	background-image: url('back1.jpg');
}
/* Add a black background color to the top navigation */
.topnav {
  background-color:black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: orange;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
footer {
    display: flex;
    justify-content: center;
    padding: 0px;
    background-color: black;
    color: #fff;
}
</style>
<body>
<center><h1>Student Portal</h1></center>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="Student_profile.php?Eno=<?php echo $Eno ?>">Profile</a>
  <a href="result1.php">Result</a>
  <a href="Material.php">Material</a>
  <a href="teacherinfoselect.php">Teacher Info</a>
  <a href="Events.php">Events</a>
  <a href="aboutpage.php">About</a>
  <a style="float: left;" href="Studentlogout.php">Logout</a>
</div>
<center><img src="welcome.png" width="1000" height="300"></center>
<center><img src="photo.png" width="300" height="300"></center>
<footer>
<p>©2021 Student portal
Developed by Jaimin Suthar, Abhay Bawa, Krina Patel </p>
</footer>
</body>
</html>
<?php
    }
    else
    {
		echo '<script>alert("Invalid Email ID/Password")</script>';
    }
?>