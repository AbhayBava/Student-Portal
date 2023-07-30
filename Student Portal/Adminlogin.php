<?php
$Id= $_POST['Id'];
$Password = $_POST['Password'];

$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
	 $sql=mysqli_query($conn,"SELECT * FROM admin where Id='$Id' and Password='$Password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION['Id'] = $row['Id'];
        $_SESSION['Password']=$row['Password'];

        header("Location: menu_admin.php");
    }
    else
    {
		echo '<script>alert("Invalid Email ID/Password")</script>';
    }
?>