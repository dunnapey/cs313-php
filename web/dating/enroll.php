<?php
    session_start();
    require '../herokudb.php';

    $classId = (int) $_GET['id'];

    if ($_SESSION['loggedIn'] == true) {
        //CHECK IF ALREADY ENROLLED
        $isEnrolled = $db->prepare("SELECT user_id FROM classesusers
                            WHERE class_id = :cid
                            AND user_id = :uid;");
        $isEnrolled->bindParam(':cid', $classId);
        $isEnrolled->bindParam(':uid', $_SESSION['userId']);
        $isEnrolled->execute();
        $dbRow = $isEnrolled->fetch(PDO::FETCH_ASSOC);
        if ($dbRow['class_id'] == $classId) {
            $fail = true;
            header("Location: classdetails.php?error=$fail");
            die();
        }

        //INSERT CLASSUSER RELATION
        $userId = $_SESSION['userId'];
        $insertClass = $db->prepare("INSERT INTO classesusers (user_id, class_id) VALUES (:u, :c);");
        $insertClass->bindParam(':u', $userId);
        $insertClass->bindParam(':c', $classId);
        $insertClass->execute();

        //REDIRECT TO CLASSDETAILS
        header("Location: classdetails.php?id=$classId");
        die();
    } else {
        //REDIRECT TO LOGIN
        header("Location: login.php");
        die();
    }
?>