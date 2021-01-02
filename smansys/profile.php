<?php
include_once("dbconnect.php");

$matric = $_GET['matric']; 
$sql = "SELECT * FROM user WHERE matric = '$matric'";
$stmt = $conn->prepare($sql );
$stmt->execute();
$user = $stmt->fetchAll(); 

echo "<p><h1 align='center'>Your Profile</h1></p>";
echo "<table border='1' align='center'>";

 foreach($user as $user) {
    echo "<tr><td> <img src='profileimages/$matric.jpg' width='400' height='300'> </td></tr>";
    echo "<tr><td>".$user['name']."</td></tr>";
    echo "<tr><td>".$user['email']."</td></tr>";
    echo "<tr><td>".$user['timereg']."</td></tr>"; 
 }
 echo "</table>";
?>