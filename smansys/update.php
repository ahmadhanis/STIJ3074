<?php
include_once("dbconnect.php");
$matric = $_GET['matric'];
$name = $_GET['name'];
$courseid = $_GET['courseid'];
$coursename = $_GET['coursename'];
$grade = $_GET['grade'];
$semester = $_GET['semester'];

if (isset($_GET['operation'])) {
    try {
        $sqlupdate = "UPDATE courses SET coursename = '$coursename', gred = '$grade', sem = '$semester' WHERE matric = '$matric' AND courseid = '$courseid'";
        $conn->exec($sqlupdate);
        echo "<script> alert('Update Success')</script>";
        echo "<script> window.location.replace('mainpage.php?matric=".$matric."&name=".$name."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update Error')</script>";
      }
    }
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
<p>
<h2 align='center'><?php echo $name?></h2>
</p>

   <h3 align="center">Update <?php echo $courseid?> </h3>

    <form action="update.php" method="get" align="center" onsubmit="return confirm('Update?');">
        <input type="hidden" id="name" name="name" value="<?php echo $name;?>"><br>
        <input type="hidden" id="matric" name="matric" value="<?php echo $matric;?>"><br>
        <input type="hidden" id="courseid" name="courseid" value="<?php echo $courseid;?>" required><br>
        <input type="hidden" id="operation" name="operation" value="update"><br>
        <label for="email">Course Name:</label><br>
        <input type="text" id="coursename" name="coursename" value="<?php echo $coursename;?>" required><br>
        <label for="Grade">Grade:</label><br>
        <input type="text" id="grade" name="grade" value="<?php echo $grade;?>" required><br>
        <label for="password">Semester</label><br>
        <input type="text" id="semester" name="semester" value="<?php echo $semester;?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <p align="center"><a href="mainpage.php?matric=<?php echo $matric.'&name='.$name?>">Cancel</a></p>
</body>

</html>