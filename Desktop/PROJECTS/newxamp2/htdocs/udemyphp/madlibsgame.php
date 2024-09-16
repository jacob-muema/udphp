<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php ?>
    <form action="madlibsgame.php" method="get">
    color: <input type="text" name="color"><br>
    plural noun: <input type="text" name="pluralNoun"><br>
    celebrity: <input type="text" name="celebrity"><br>
    <input type="submit">


    </form>
    <br>
    <?php 
    $color= $_GET ["color"];
    $pluralNoun= $_GET ["pluralNoun"];
    $celebrity= $_GET ["celebrity"];

    echo "I love $color <br>";
    echo "This is Red in $pluralNoun <br>";
    echo "I love $celebrity";
  
    
    
    ?>
</body>
</html>