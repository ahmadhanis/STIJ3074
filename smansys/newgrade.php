<?php
include_once("dbconnect.php");
$matric = $_GET['matric'];
$name = $_GET['name'];

// if (isset($_COOKIE["email"])){
//   echo "Value is: " . $_COOKIE["email"];
// }
echo "<head></head><link rel='stylesheet' href='styles.css'></head>";

if (isset($_GET['courseid'])) {
  $courseid = $_GET['courseid'];
  $coursename = $_GET['coursename'];
  $grade = $_GET['grade'];
  $semester = $_GET['semester'];

  try {
    $sql = "INSERT INTO courses(courseid, coursename, gred,sem,matric)
    VALUES ('$courseid', '$coursename', '$grade','$semester','$matric')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert('Insert Success')</script>";
    echo "<script> window.location.replace('mainpage.php?matric=".$matric."&name=".$name."') </script>;";

  } catch(PDOException $e) {
    echo "<script> alert('Insert Error')</script>";
    //echo "<script> window.location.replace('register.html') </script>;";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<p>
<h2 align='center'><?php echo $name?></h2>
</p>

<body>
    <h2 align="center">Insert New Grade</h2>

    <form action="newgrade.php" method="get" align="center" onsubmit="return confirm('Insert new grade?');">
        <input type="hidden" id="name" name="name" value="<?php echo $name;?>"><br>
        <input type="hidden" id="matric" name="matric" value="<?php echo $matric;?>"><br>
        <label for="Course ID">Course ID:</label><br>
        <input type="text" id="courseid" name="courseid" value="" required><br>
        <label for="email">Course Name:</label><br>
        <input type="text" id="coursename" name="coursename" value="" required><br>
        <label for="matric">Gred:</label><br>
        <input type="text" id="grade" name="grade" value="" required><br>
        <label for="password">Semester</label><br>
        <input type="text" id="semester" name="semester" value="" required><br><br>
        <input type="submit" value="Submit" class="button">
    </form>
    <p align="center"><a href="mainpage.php?matric=<?php echo $matric.'&name='.$name?>">Cancel</a></p>
</body>

</html>