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
            <a href="mailto:pjdunnaway@sbcglobal.net" style="max-width: 220px; ">
                <img src="assets/email.png" id="email">
                <span style="max-width: fit-content;">Email Us</span>
            </a>
        </div>

        <div>
            <h2>Contact Us</h2>
            <p>
                For private session appointments or for questions, please call or email us at the links below. We look forward to working with you to improve your dating and marriage relationships!
            </p>
            <p>
                Thank you for visiting!
            </p>
            <br>
            <p>
                ~ Peyton Dunnaway, <b>Site Manager</b>
            </p>
            <br>
        </div>

        <div>
            <a href="tel:555-555-5555" style="max-width: 220px;">
                <img src="assets/phone.png" id="phone">
                <span style="max-width: fit-content;">Call Us</span>
            </a>
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>