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
    <script type="text/javascript">document.getElementById("home").className = "active";</script>

    <div id="main">
        <img src="assets/love1.png" alt="kiss" id="kiss1">
        <div id="intro">
            <h2>Dating Coaching Services</h2>
            <p>
                MakeItGreat.com is here to help you develop your relationships and love-life so that you can truly enjoy yourself and those you devote your time and self to.
            </p>
            <p>
                Register for one of our upcoming relationship classes, taught by a certified relationship specialist. Choose from a short overview course designed to give you a taste of the different aspects of relationship building, one class on a given topic, or take our full course that includes all topics. We offer both classes for dating or unmarried couples and courses for married couples. We also offer group classes and one-on-one sessions, or private couple's sessions.
            </p>
            <p>
                Feel free contact us by phone or email if you have any questions or concerns. We appreciate feeback from our students. Let us know how our classes are helping you and your significant other!
            </p>
            <p style="font-size: 10px;">
                ** Disclaimer: We do not offer full therapy services. Our instructors (dating coaches) are qualified to teach dating and relationship-building principles and offer suggestions to couples seeking help in their relationships. Our advice is offered based on the principles taught in our courses but is not a guarantee of success through their application nor a guarantee of our instructors being able to help your relationship.
            </p>
        </div>
        <img src="assets/love1.png" alt="kiss" id="kiss2">
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>