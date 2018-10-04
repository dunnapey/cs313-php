<?php
    $favorite = $_COOKIE["fav_text"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>COOKIE LOAD</title>
</head>

<body>
    <h1>LOADING COOKIE!</h1>
    <span>Your favorite text was <?php $favorite; ?></span>
</body>
</html>