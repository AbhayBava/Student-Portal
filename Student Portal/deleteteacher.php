<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_GET['Id'])){
$sql = "delete from teacher where Id='".$_GET['Id']."'";
$result = $conn->query($sql);
header("Location: manageteacher.php");
}  
?>