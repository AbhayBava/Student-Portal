<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_GET['Eno'])){
$sql = "delete from student where Eno='".$_GET['Eno']."'";
$result = $conn->query($sql);
header("Location: managestudent.php");
}  
?>