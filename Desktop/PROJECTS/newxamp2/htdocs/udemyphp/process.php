<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- This is the HTML form -->
<form method="POST" action="">
    <label for="name">Enter your name:</label>
    <input type="text" name="username" id="name">
    <input type="submit" value="Submit">
</form>

<?php
// This is PHP code that processes the form input
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $name = $_POST['username'];  // Getting user input
    if (!empty($name)) {
        echo "Hello, " . htmlspecialchars($name);  // Outputting user input safely
    } else {
        echo "Please enter your name.";
    }
}
?>

</body>
</html>
