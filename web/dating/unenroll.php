<?php
    session_start();
    require '../herokudb.php';

    if ($_SESSION['loggedIn'] == true) {
        //DELETE USER FROM ALL CLASSES
        $userId = $_SESSION['userId'];
        $deleteClass = $db->prepare("DELETE FROM classesusers WHERE user_id = :u;");
        $deleteClass->bindParam(':u', $userId);
        $deleteClass->execute();

        //REDIRECT TO ACCOUNT INFO
        header("Location: account.php");
        die();
    } else {
        //REDIRECT TO LOGIN
        header("Location: login.php");
        die();
    }
?>