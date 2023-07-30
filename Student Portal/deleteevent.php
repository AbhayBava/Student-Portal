<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Student_portal";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_GET['Event'])){
$sql = "delete from event where Event='".$_GET['Event']."'";
$result = $conn->query($sql);
header("Location: manageevent.php");
}  
?>