<?php
session_start();
include_once("dbconnect.php");
$matric = $_GET['matric']; 
$name = $_GET['name'];

// if (isset($_COOKIE["email"])){
//   echo "Value is: " . $_COOKIE["email"];
// }
echo "<head><link rel='stylesheet' href='styles.css'><link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"></head>";

echo "<p>Welcome " . $_SESSION["name"] . ".<br></p>";
if (isset($_SESSION["name"])){

//delete operation
if (isset($_COOKIE["timer"])){
    if (isset($_GET['operation'])) {
      $courseid = $_GET['courseid'];
      try {
        $sql = "DELETE FROM courses WHERE matric='$matric' AND courseid='$courseid'";
        $conn->exec($sql);
        echo "<script> alert('Delete Success')</script>";
      } catch(PDOException $e) {
        echo "<script> alert('Delete Error')</script>";
      }
    }

    try {
        if (isset($_GET['subject'])) {
            $subject = $_GET['subject'];
            $sql = "SELECT * FROM courses WHERE matric = '$matric' AND coursename LIKE '%$subject%' ORDER BY sem ASC";
        }else{
            $sql = "SELECT * FROM courses WHERE matric = '$matric' ORDER BY sem ASC";    
        }
        
        $stmt = $conn->prepare($sql );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $courses = $stmt->fetchAll(); 
        echo "<p><h1 align='center'>Your Current Courses</h1></p>";
        echo "
        <form class=\"example\" action=\"mainpage.php\" style=\"margin:auto;max-width:300px\">
        <input type=\"text\" placeholder=\"Search by subject name..\" name=\"subject\">
        <input type=\"hidden\" name=\"matric\" value=$matric>
        <input type=\"hidden\" name=\"name\" value=$name>
        <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
        </form><br>";
        
        echo "<table border='1' align='center'>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Gred</th>
          <th>Semester</th>
          <th>Operation</th>
        </tr>";
        
        foreach($courses as $courses) {
            echo "<tr>";
            echo "<td>".$courses['courseid']."</td>";
            echo "<td>".$courses['coursename']."</td>";
            echo "<td>".$courses['gred']."</td>";
            echo "<td>".$courses['sem']."</td>";
            echo "<td><a href='mainpage.php?matric=".$matric."&name=".$name."&courseid=".$courses['courseid']."&operation=del' onclick= 'return confirm(\"Delete. Are your sure?\");'>Delete</a><br>
            <a href='update.php?matric=".$matric."&name=".$name."&courseid=".$courses['courseid']."&coursename=".$courses['coursename'].
            "&grade=".$courses['gred']."&semester=".$courses['sem']." '>Update</a></td>";
            echo "</tr>";
        } 
        echo "</table>";
        echo "<button onclick=\"window.print()\">Print this page</button>";
        echo "<p align='center'><a href='newgrade.php?matric=".$matric."&name=".$name."'>Insert new grade</a></p>";
        echo "<p align='center'><a href='profile.php?matric=".$matric."&name=".$name."'>Your Profile</a></p>";
        echo "<p align='center'><a href='index.html'>Login</a></p>";

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}else{
  echo "<script> alert('Timer expired!!!')</script>";
  echo "<script> window.location.replace('index.html') </script>;";
}
}else{
  echo "<script> alert('Session Expired!!!')</script>";
  echo "<script> window.location.replace('index.html') </script>;";
}
  $conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>

</body>

</html>