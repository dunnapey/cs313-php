<?php
    session_start();

    require 'herokudb.php';

    $id = $_GET['id'];

    //QUERY
    $query = $db->prepare("SELECT fname, lname FROM users WHERE class_id = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    $students = $query->fetchAll(PDO::FETCH_ASSOC);
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
    <div id="head"><?php require 'header.html'; ?></div>
    <script type="text/javascript">
        document.getElementById("classes").className = "active";
    </script>

    <div id="main">
        <h2>Class Details</h2>
        <table>
            <th>Students Enrolled:</th>
            <?php
                if (empty($students))
                    echo "<tr><td>No students in this class yet</td></tr>";
                else
                {
                    foreach ($students as $student) {
                        $fname = $student['fname'];
                        $lname = $student['lname'];
                        echo "<tr><td>$fname $lname</td></tr>";
                    }
                }
            ?>
        </table>
    </div>

    <div id="foot"><?php require 'footer.html'; ?></div>
</body>
</html>