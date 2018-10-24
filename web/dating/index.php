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
    <?php require 'header.html'; ?>
    <script type="text/javascript">
        document.getElementById("home").className = "active";
    </script>

    <div id="main">
        <h2>Dating Coaching Services</h2>
        <p>
            MakeItGreat.com is here to help you develop your relationships and love-life so that you can truly enjoy yourself and those you devote your time and self to.
        </p>
        <p>
            More to come...
        </p>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>