<?php
include_once("dbconnect.php");

$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql );
$stmt->execute();
// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$products = $stmt->fetchAll(); 

echo "<table border='1' align='center'>";
        
        foreach($products as $products) {
            echo "<tr><td> <img src='products/".$products['primage'].".jpg' width='150' height='100' class = 'center'> </td>";
            echo "<td>".$products['prname']."</td>";
            echo "<td> RM".$products['prprice']."</td>";
            echo "<td>".$products['prdescription']."</td>";
            echo "<td>".$products['prtype']."</td>";
            echo "</tr>";
        } 
        echo "</table>";


?>