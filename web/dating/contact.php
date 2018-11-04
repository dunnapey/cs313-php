<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>MYRGA</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- viewPort width adjusts for mobile device sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/png" href="../assets/favicon2.png">
    <link rel="stylesheet" type="text/css" href="dating.css">
</head>

<body>
    <?php require 'header.php'; ?>
    <script type="text/javascript">document.getElementById("contact").className = "active";</script>

    <div id="main">
        <div>
            <h2>Contact Us</h2>
            <ul>
                <li><a href="mailto:pjdunnaway@sbcglobal.net">Email Us</a></li>
                <li><a href="tel:555-555-5555">Call Us</a></li>
            </ul>
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>