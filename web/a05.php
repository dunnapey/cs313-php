<?php
    require 'herokudb.php';

    //QUERY
    $query = $db->prepare('SELECT id, name, cost FROM classes');
    $query->execute();
    $classes = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>a05</title>
    <link rel="icon" type="image/png" href="assets/favicon2.png">
    <link rel="stylesheet" type="text/css" href="a05.css">
</head>

<body>
    <h1>Project PHP DB Query Test</h1>
    <h2>Click A Class to See Enrolled Students:</h2>
    <ul>
        <?php
            foreach ($classes as $class) {
                $id = $class['id'];
                $name = $class['name'];
                $cost = $class['cost'];
                echo "<li><a href='a05details.php?id=$id'>$name (\$$cost)</a></li>";
            }
        ?>
    </ul>
</body>
</html>