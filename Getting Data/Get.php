<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET ASSIGNMENT</title>
    <link rel="stylesheet" href="css/main.css"> 
    
</head>
<body>

<?php

if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])) {
    $firstname = htmlspecialchars($_GET['firstname']);
    $lastname = htmlspecialchars($_GET['lastname']);
    $age = intval($_GET['age']);
    echo "<div class='output'>Hello, my name is $firstname $lastname.</div>";

    if ($age >= 18) {
        echo "<div class='output'>I am $age years old and I am old enough to vote in the United States.</div>";
    } else {
        echo "<div class='output'>I am $age years old and I am not old enough to vote in the United States.</div>";
    }

    
    $days = $age * 365;
    echo "<div class='output'>I have been alive for $days days.</div>";
    echo "<div class='output'>Today's date is " . date("Y-m-d") . ".</div>";
} else {
    
    echo "<div class='output'>Please provide the required parameters: firstname, lastname, and age.</div>";
}
?>

</body>
</html>