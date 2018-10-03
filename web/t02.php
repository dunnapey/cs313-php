<!DOCTYPE html>
<html>
<head>
    <title>Team02</title>
    <style type="text/css">
        td { border: 1px solid black; }
        table { border-collapse: collapse; }
    </style>
</head>

<body>
<?php

    $name = $email = $major = $comment = $continents"";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $major = test_input($_POST["major"]);
        $comment = test_input($_POST["comment"]);
        $continents = test_input($_POST["continents"]);
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
            <?php echo $name; ?>
        </td>
        <td>
            <?php echo $email; ?>
        </td>
        <td>
            <?php echo $major; ?>
        </td>
        <td>
            <?php echo $comment; ?>
        </td>
        <td>
            <?php echo $continents; ?>
        </td>
    </tr>
</table>

</body>
</html>
