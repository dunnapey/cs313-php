<?php
    session_start();
    require '../herokudb.php';

    //QUERY
    $query = $db->prepare('SELECT id, name, cost FROM classes');
    $query->execute();
    $classes = $query->fetchAll(PDO::FETCH_ASSOC);
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
    <script type="text/javascript">document.getElementById("classes").className = "active";</script>

    <h2>Classes Available</h2>
    <div id="main">
        <ul>
            <?php
                foreach ($classes as $class) {
                    $id = $class['id'];
                    $name = $class['name'];
                    $cost = $class['cost'];
                    echo "<li><a href='classdetails.php?id=$id'>$name (\$$cost)</a></li>";
                }
            ?>
        </ul>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>