<?php
    session_start();

    require '../herokudb.php';

    $id = $_GET['id'];
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
        document.getElementById("classes").className = "active";
    </script>

    <div id="main">
        <h2>Sign Up for a Class</h2>
        <form action="classdetails.php?id=<php $id ?>" method="post">
            First Name: <input type="text" name="fname">
            Last Name: <input type="text" name="lname">
            Username: <input type="text" name="uname">
            Password: <input type="text" name="pwd">
            Email: <input type="text" name="email">
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>