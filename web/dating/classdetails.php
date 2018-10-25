<?php
    session_start();

    require '../herokudb.php';

    $id = $_GET['id'];

    //QUERY
    $query = $db->prepare("SELECT u.fname, u.lname FROM users AS u JOIN classesusers as c
        ON (u.id = c.user_id) WHERE c.class_id = :class");
    $query->bindParam(':class', $id);
    $query->execute();
    $students = $query->fetchAll(PDO::FETCH_ASSOC);

    //REGISTER STUDENT IN CURRENT CLASS
    if (!empty($_POST))
    {
        //INSERT NEW USER
        $insert = $db->prepare("INSERT INTO users (username, fName, lName, password, email) VALUES (:user, :fname, :lname, :pwd, :email);");
        $insert->bindParam(':user', $_POST['uname']);
        $insert->bindParam(':fname', $_POST['fname']);
        $insert->bindParam('::lname', $_POST['lname']);
        $insert->bindParam(':pwd', $_POST['pwd']);
        $insert->bindParam(':email', $_POST['email']);
        $insert->execute();

        //INSERT CLASSUSER RELATION
        $lastId = $db->lastInsertId();
        $insertClass = $db->prepare("INSERT INTO classesusers (user_id, class_id) VALUES (:user, :class);");
        $insertClass->bindParam(':user', $lastId);
        $insertClass->bindParam(':class', $_POST['class']);
        $insertClass->execute();
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
        <a href="register.php?id=<?php echo $id; ?>">REGISTER FOR THIS CLASS</a>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>