<?php
    session_start();
    $_SESSION = array();
    $_SESSION['loggedIn'] = false;
    header("Location: index.php");
    die();
?>