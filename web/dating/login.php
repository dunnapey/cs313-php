<?php
    session_start();
    require '../herokudb.php';

    $fail;

    if ($_SESSION['loggedIn'] == true) {
        $fail = false;
        header("Location: index.php");
        die();
    }
    else (isset($_POST['submit']))
    {
        $user = $_POST['username'];

        //RETURN USER DATA
        $query = $db->prepare("SELECT id, username, password FROM users
            WHERE username = :user");
        $query->bindParam(':user', $user);
        $query->execute();
        $dbRow = $query->fetch(PDO::FETCH_ASSOC);

        if ($dbRow['username'] == $user && password_verify($_POST['pwd'], $dbRow['password']))
        {
            //LOGIN USER
            $_SESSION['username'] = $dbRow['username'];
            $_SESSION['userId'] = $dbRow['id'];
            $_SESSION['loggedIn'] = true;

            $fail = false;

            //redirect to HOME
            header("Location: index.php");
            die();
        } else {
            //LOGIN FAIL -> TRY AGAIN
            $_SESSION = array();
            $_SESSION['loggedIn'] = false;
            $fail = true;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>MYRGA</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- viewPort width adjusts for mobile device sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/png" href="../assets/favicon2.png">
    <link rel="stylesheet" type="text/css" href="dating.css">
</head>

<body>
    <?php require 'header.php'; ?>
    <script type="text/javascript">document.getElementById("signin").className = "active";</script>

    <div id="main">
        <div id="kiss1">
            <img src="assets/love1.png" alt="kiss">
        </div>

        <div id="loginBox">
            <form method="post" action="login.php">
                <?php
                    if ($fail == true) {
                        echo "<p style='color: red; font-weight: bold; text-align: center;'>* Username or password is invalid.</p>";
                    }
                ?>
                Username: <input type="text" name="username">
                Password: <input type="password" name="pwd">
                <input type="submit" name="submit" value="LOG IN"><br>
                <a href="register.php">Create an Account</a>
            </form>
        </div>

        <div id="kiss2">
            <img src="assets/love1.png" alt="kiss">
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>