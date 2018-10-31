<?php
    session_start();
    require '../herokudb.php';

    if (isset($_POST['submit']))
    {
        $user = $_POST['username'];

        //login user
        $query = $db->prepare("SELECT id, username, password FROM users
            WHERE user = :user");
        $query->bindParam(':user', $user);
        $query->execute();
        $signedIn = $query->fetch(PDO::FETCH_ASSOC);

        if ($signedIn['username'] == $user && password_verify($_POST['pwd'], $signedIn['password']))
        {
            $_SESSION['username'] = $signedIn['username'];
            $_SESSION['userId'] = $signedIn['id'];
            $_SESSION['loggedIn'] = true;

            $fail = false;

            //redirect to HOME
            header("Location: index.php");
            die();
        } else {
            $_SESSION = array();
            $_SESSION['loggedIn'] = false;
            $fail = true;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Make It Great</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- viewPort width adjusts for mobile device sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/png" href="../assets/favicon2.png">
    <link rel="stylesheet" type="text/css" href="dating.css">
</head>

<body>
    <?php require 'header.php'; ?>
    <script type="text/javascript">document.getElementById("home").className = "active";</script>

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