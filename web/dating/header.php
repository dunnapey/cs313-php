<?php
    session_start();
?>

<div id="head">
    <h1>Make It Great</h1>
    <br>
    <ul id="nav">
        <li id="home"><a href="index.php">HOME</a></li>
        <li id="classes"><a href="classes.php">CLASSES</a></li>
        <li id="contact"><a href="contact.php">CONTACT US</a></li>
    <?php
        if ($_SESSION['loggedIn'] == true)
        {
            $user = $_SESSION['username'];
            echo "<li id='account' class='drop'>
                    <span>WELCOME $user!</span>
                    <div class='dropContent'>
                        <a href=''>Account</a>
                        <a href='logout.php'>Log Out</a>
                    </div>
                </li>";
        } else {
            echo "<li id='signin'><a href='login.php'>SIGN IN</a></li>";
        }
    ?>
    </ul>
</div>