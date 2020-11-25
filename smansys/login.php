<?php
include_once("dbconnect.php");

$email = $_POST['email']; 
$password = sha1($_POST['password']);

try {
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $stmt = $conn->prepare($sql );
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();

    if ($count > 0){
        echo "<script> alert('Login Success')</script>";
        echo "<script> window.location.replace('mainpage.php') </script>;";
    }else{
        echo "<script> alert('Login Failed')</script>";
        echo "<script> window.location.replace('index.html') </script>;";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>