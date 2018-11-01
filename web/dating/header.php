<?php
    session_start();
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
        if ($_SESSION['loggedIn'] == true)
        {
            $user = $_SESSION['username'];
            echo "<div class='drop'>
                    <span>WELCOME $user!</span>
                    <div class='dropContent'>
                        <a href=''>Account</a>
                        <a href='logout.php'>Log Out</a>
                    </div>
                </div>";
        } else {
            echo "<a href='login.php' style='color: white; text-decoration: none; margin-left: 20px;'>SIGN IN</a>";
        }
    ?>
</div>