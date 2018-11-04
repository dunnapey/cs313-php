<?php
    session_start();
    require '../herokudb.php';

    $user = htmlspecialchars($_POST['uname']);
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $email = htmlspecialchars($_POST['email']);

    //HASH PASSWORD
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    //INSERT NEW USER
    $insert = $db->prepare("INSERT INTO users (username, fName, lName, password, email) VALUES (:user, :fname, :lname, :pwd, :email);");
    $insert->bindParam(':user', $user);
    $insert->bindParam(':fname', $fname);
    $insert->bindParam(':lname', $lname);
    $insert->bindParam(':pwd', $hash);
    $insert->bindParam(':email', $email);
    $insert->execute();

    //GET ID of NEW USER
    $userId = (int) $db->lastInsertId(users_id_seq);

    //LOGIN NEW USER
    $_SESSION['username'] = $user;
    $_SESSION['userId'] = $userId;
    $_SESSION['loggedIn'] = true;

    header("Location: login.php");
    die();
?>