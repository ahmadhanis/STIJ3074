<?php
//get data first
$name = $_GET['name'];
$email = $_GET['email']; 
$matric = $_GET['matric'];
$password = sha1($_GET['password']);

//connect to db
$servername = "localhost";
$username = "root";
$passworddb = "";
$dbname = "smansys";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passworddb);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user(name, email, password,matric)
    VALUES ('$name', '$email', '$password','$matric')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;




?>