<?php
    session_start();
    require '../herokudb.php';

    $id = (int) $_GET['id'];

    //QUERY
    $query = $db->prepare("SELECT u.fname, u.lname, c.name, c.cost FROM users AS u JOIN classesusers as cu
        ON (u.id = cu.user_id) 
        JOIN classes as c
        ON (cu.class_id = c.id)
        WHERE cu.class_id = :class");
    $query->bindParam(':class', $id);
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
    <?php require 'header.php'; ?>
    <script type="text/javascript">document.getElementById("classes").className = "active";</script>

    <div id="main">
        <div>
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
            </table><br>
            <a id="register" href="enroll.php?id=<?php echo $id; ?>">REGISTER FOR THIS CLASS</a>
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>