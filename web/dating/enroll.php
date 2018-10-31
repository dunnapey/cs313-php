<?php
    session_start();
    require '../herokudb.php';
    
    $classId = htmlspecialchars($_GET['id']);

    //INSERT CLASSUSER RELATION
    $userId = $_SESSION['userId'];
    $insertClass = $db->prepare("INSERT INTO classesusers (user_id, class_id) VALUES (:u, :c);");
    $insertClass->bindParam(':u', $userId);
    $insertClass->bindParam(':c', $classId);
    $insertClass->execute();

    header("Location classdetails.php");
    die();
?>