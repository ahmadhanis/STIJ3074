<?php
include_once("dbconnect.php");

$matric = $_GET['matric']; 
$sql = "SELECT * FROM user WHERE matric = '$matric'";
$stmt = $conn->prepare($sql );
$stmt->execute();
$user = $stmt->fetchAll(); 
echo "<head></head><link rel='stylesheet' href='styles.css'></head>";
echo "<p><h1 align='center'>Your Profile</h1></p>";
echo "<table border='1' align='center'>";

 foreach($user as $user) {
    echo "<tr><td colspan='2' > <img src='profileimages/$matric.jpg' width='150' height='250' class = 'center'> </td></tr>";
    echo "<tr><td>Name</td><td>".$user['name']."</td></tr>";
    echo "<tr><td>Matric</td><td>".$user['matric']."</td></tr>";
    echo "<tr><td>Email</td><td>".$user['email']."</td></tr>";
    echo "<tr><td>Registration Date</td><td>".date_format(date_create($user['timereg']),"d/m/Y H:i a")."</td></tr>"; 
 }
 echo "</table><br>";
 echo "<p align=\"center\"><a href=\"mainpage.php?matric=$matric&name=$name\">Cancel</a></p>";
?>