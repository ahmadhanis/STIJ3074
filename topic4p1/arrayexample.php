<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $CarInfo = array("Unser", "2002", 34500,"ANN", 45.66, true, "X70"); 
        // echo $CarInfo[1];  //display value of index 2 (or third element)
        // echo "<br>";
        // echo count($CarInfo);
        // echo "<p>";
        // print_r($CarInfo); //display all index and its value
        $carsize = count($CarInfo);
        echo "<center><table style='width:50%' border = '1'>";
        for ($i=0; $i < $carsize; $i++) {
            echo "<tr><td>";
            echo $CarInfo[$i];
            echo "</td></tr>";
        }
        echo "</table>";

        $user["username"] = "abc@gmail.com";
        $user["password"] = "abc123";
        $user["address"] = "Jalan ABC, Taman CDE";

        echo $user["username"];
        echo $user["password"];
        echo $user["address"];

?>

</body>

</html>