<?php
    session_start();
    require '../herokudb.php';

    if ($_SESSION['loggedIn']) {
        $user = $_SESSION['username'];
    }
?>

<div id="head">
    <h1>Make It Great</h1>
    <br>
    <span id="nav">
        <a href="index.php" id="home">HOME</a>
        <a href="classes.php" id="classes">CLASSES</a>
        <a href="contact.php" id="contact">CONTACT US</a>
    </span>
    <?php
        if ($user)
            echo "<span style='color: white; text-decoration: none; margin-left: 20px;'>WELCOME $user!</span>";
        else
            echo "<a href='login.php' style='color: white; text-decoration: none; margin-left: 20px;'>SIGN IN</a>";
    ?>
</div>