<?php
include_once("dbconnect.php");
$matric = $_GET['matric']; 
$name = $_GET['name'];

//delete operation
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

    $sql = "SELECT * FROM courses WHERE matric = '$matric' ORDER BY sem ASC";
    $stmt = $conn->prepare($sql );
    $stmt->execute();
     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $courses = $stmt->fetchAll(); 
    echo "<p><h1 align='center'>Your Current Courses</h1></p>";
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
        echo "<td><a href='mainpage.php?matric=".$matric."&name=".$name."&courseid=".$courses['courseid']."&operation=del'>Delete</a><br>
        <a href='update.php?matric=".$matric."&name=".$name."&courseid=".$courses['courseid']."&coursename=".$courses['coursename']."&grade=".$courses['gred']."&semester=".$courses['sem']."'>Update</a></td>";
        echo "</tr>";
    } 
    echo "</table>";
    echo "<p align='center'><a href='newgrade.php?matric=".$matric."&name=".$name."'>Insert new grade</a></p>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
  $conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>

</body>

</html>