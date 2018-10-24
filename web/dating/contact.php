<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Make It Great</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- viewPort width adjusts for mobile device sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/png" href="../assets/favicon2.png">
    <link rel="stylesheet" type="text/css" href="dating.css">
</head>

<body>
    <div id="head"><?php require 'header.html'; ?></div>
    <script type="text/javascript">
        document.getElementById("contact").className = "active";
    </script>

    <div id="main">
        <h2>Contact Us</h2>
    </div>

    <div id="foot"><?php require 'footer.html'; ?></div>
</body>
</html>