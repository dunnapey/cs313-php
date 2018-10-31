<?php
    session_start();
    require '../herokudb.php';

    if (isset($_POST['submit']))
    {
        $user = $_POST['user'];

        //login user
        $query = $db->prepare("SELECT id, user, pwd FROM users
            WHERE user = :user");
        $query->bindParam(':user', $user);
        $query->execute();
        $signedIn = $query->fetch(PDO::FETCH_ASSOC);

        if (!$signedIn['user'] == $user && password_verify($_POST['pwd']))
        {
            $_SESSION['username'] = $signedIn['user'];
            $_SESSION['userId'] = $signedIn['id'];
            $_SESSION['loggedin'] = true;
        }
        else
            $fail = true;
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
    <?php require 'header.html'; ?>
    <script type="text/javascript">document.getElementById("home").className = "active";</script>

    <div id="main">
        <div id="kiss1">
            <img src="assets/love1.png" alt="kiss">
        </div>

        <div id="loginBox">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <?php
                    if ($fail)
                        echo "<p style='color: red;'>* Username or password is invalid.</p>";
                ?>
                <input type="text" name="username">
                <input type="password" name="pwd">
                <input type="submit" name="submit" value="LOG IN">
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