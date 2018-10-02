<!DOCTYPE html>
<html>
<head>
    <title>Team02</title>
</head>

<body>
<?php

    $name = $email = $major = $comment = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $major = test_input($_POST["major"]);
        $comment = test_input($_POST["comment"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<table>
    <tr>
    <th>Name</th><th>Email</th><th>Major</th><th>Comment</th>
    </tr>

    <tr>
        <td>
            <?php $name ?>
        </td>
        <td>
            <?php $email ?>
        </td>
        <td>
            <?php $major ?>
        </td>
        <td>
            <?php $comment ?>
        </td>
    </tr>
</table>

</body>
</html>
