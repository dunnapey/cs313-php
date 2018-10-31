<?php
    session_start();
    require '../herokudb.php';

    $classId = htmlspecialchars($_GET['id']);

    if ($_SESSION['loggedIn'] == true) {
        //INSERT CLASSUSER RELATION
        $userId = $_SESSION['userId'];
        $insertClass = $db->prepare("INSERT INTO classesusers (user_id, class_id) VALUES (:u, :c);");
        $insertClass->bindParam(':u', $userId);
        $insertClass->bindParam(':c', $classId);
        $insertClass->execute();

        //REDIRECT TO CLASSDETAILS
        header("Location: classdetails.php");
        die();
    } else {
        //REDIRECT TO LOGIN
        header("Location: login.php");
        die();
    }
?>