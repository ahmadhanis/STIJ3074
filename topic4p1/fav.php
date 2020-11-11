<html>

<head>
    <title>Your Submission</title>
</head>

<body>
    <?php
    $username=$_POST["username"]; 
    if($username != null)
    { 
        echo "Thank you for your selection, $username ";}
        if(isset($_POST["colour"]))
        {  
            $colour=$_POST["colour"];
                if($colour == "yellow")    
                    echo"<body bgcolor='yellow'>"; 
                elseif ($colour == "magenta")   
                    echo"<body bgcolor='magenta'>";
                else   
                    echo"<body bgcolor='green'>";   }
                echo"<p> Hope you really enjoy --> ";
        
        if(isset($_POST["food"]))
        { 
            $food = array();
            $food=$_POST["food"];
            $arrlength = count($food);
        
        echo "Your favourite food: ";
        for($x = 0; $x < $arrlength; $x++) {
            echo $food[$x];
            echo ","; 
        }
    }
?>
</body>

</html>