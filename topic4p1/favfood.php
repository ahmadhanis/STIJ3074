<html>

<head>
    <title>Your Favourites</title>
</head>

<body>
    <form action="fav.php" method="post">
        Please enter your name :<input type="text" name="username" size="45">
        <p>
            Please select your favourite colour : <input type="radio" name="colour" value="yellow"> Yellow
            <input type="radio" name="colour" value="magenta"> Magenta
            <input type="radio" name="colour" value="green"> Green
        <p>
            Please select your favourite food :
            <input type="checkbox" name="food[]" value="Laksa"> Laksa
            <input type="checkbox" name="food[]" value="Curry Mee"> Curry Mee
            <input type="checkbox" name="food[]" value="Chicken Chop"> Chicken Chop
        <p>
            <input type="submit" value=" Submit This Form ">
            <input type="reset" value=" Clear ">
    </form>
</body>

</html>