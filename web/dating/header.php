<?php
    session_start();
?>

<div id="head">
    <h1>Make It Great</h1>
    <br>
    <ul id="nav">
        <li><a href="index.php" id="home">HOME</a></li>
        <li><a href="classes.php" id="classes">CLASSES</a></li>
        <li><a href="contact.php" id="contact">CONTACT US</a></li>
    <?php
        if ($_SESSION['loggedIn'] == true)
        {
            $user = $_SESSION['username'];
            echo "<li class='drop'>
                    <span>WELCOME $user!</span>
                    <div class='dropContent'>
                        <a href=''>Account</a>
                        <a href='logout.php'>Log Out</a>
                    </div>
                </li>";
        } else {
            echo "<li><a href='login.php' style='color: white; text-decoration: none; margin-left: 20px;'>SIGN IN</a></li>";
        }
    ?>
    </ul>
</div>