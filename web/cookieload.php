<?php
    session_start();
    $favorite = $_COOKIE["fav_text"];
    $user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>COOKIE LOAD</title>
</head>

<body>
    <h1>LOADING COOKIE!</h1>
    <span>Your favorite text was <?php echo $favorite; ?></span>
    <span>Your username is <?php echo $user; ?></span>
</body>
</html>