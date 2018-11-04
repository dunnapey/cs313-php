<?php
    session_start();
    require '../herokudb.php';

    if ($_SESSION['loggedIn'] == false) {
        header("Location: index.php");
        die();
    }

    $id = (int) $_SESSION['userId'];

    //QUERY
    $query = $db->prepare("SELECT c.id, c.name, c.cost FROM users AS u JOIN classesusers as cu
        ON (u.id = cu.user_id) 
        JOIN classes as c
        ON (cu.class_id = c.id)
        WHERE cu.user_id = :user");
    $query->bindParam(':user', $id);
    $query->execute();
    $classes = $query->fetchAll(PDO::FETCH_ASSOC);
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
    <script type="text/javascript">document.getElementById("account").className = "active";</script>

    <div id="main">
        <div id="kiss1">
            <img src="assets/love1.png" alt="kiss">
        </div>

        <div class="mainContent">
            <h2>Account Details</h2>
            <table style="border: none;">
                <tr><th>You are Enrolled in these courses:</th></tr>
                <?php
                    if (empty($classes))
                        echo "<tr><td>You haven't enrolled in any courses yet</td></tr>";
                    else
                    {
                        $total = 0;
                        foreach ($classes as $class) {
                            $name = $class['name'];
                            $cost = $class['cost'];
                            echo "<tr><td>$name</td><td>\$$cost</td></tr>";
                            $total += $cost;
                        }
                        echo "<tr><td><b>Total:</b></td><td><b>\$$total<b></td></tr>";
                    }
                ?>
            </table><br>
            <a id="register" href="unenroll.php">Unenroll</a>
        </div>

        <div id="kiss2">
            <img src="assets/love1.png" alt="kiss">
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>