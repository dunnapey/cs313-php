<?php
    session_start();
    $favorite = $_COOKIE["fav-text"];
    $user = $_SESSION["user"];

    if (isset($_SESSION["count"])) {
        $_SESSION["count"]++;
    } else {
        $_SESSION["count"] = 1;
    }

    $visits = $_SESSION["count"];
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
    <span>This is visit number: <?php echo $visits; ?></span>
</body>
</html>