<?php
    session_start();
    require '../herokudb.php';

    //HASH PASSWORD
    $hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    //INSERT NEW USER
        $insert = $db->prepare("INSERT INTO users (username, fName, lName, password, email) VALUES (:user, :fname, :lname, :pwd, :email);");
        $insert->bindParam(':user', $_POST['uname']);
        $insert->bindParam(':fname', $_POST['fname']);
        $insert->bindParam(':lname', $_POST['lname']);
        $insert->bindParam(':pwd', $hash);
        $insert->bindParam(':email', $_POST['email']);
        $insert->execute();

        header("Location: index.php");
        die();
    }
?>