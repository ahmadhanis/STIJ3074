<?php
$servername = "localhost";
$username = "slumber6_adminsenang";
$passworddb = "D32p+I8Xl3JB";
$database = "slumber6_senangmy";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $passworddb);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>