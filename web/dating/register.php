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
    <script type="text/javascript">document.getElementById("classes").className = "active";</script>

    <div id="main">
        <div>
            <h2>Create an Account</h2>
            <form action="createuser.php" method="post">
                First Name: <input type="text" name="fname">
                Last Name: <input type="text" name="lname">
                Username: <input type="text" name="uname">
                Password: <input type="password" name="pwd">
                Email: <input type="text" name="email">
                <input type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>