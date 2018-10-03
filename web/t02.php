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
    <th>Name</th><th>Email</th><th>Major</th><th>Comment</th><th>Continents</th>
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
        <td style="width: 300px;">
            <?php foreach ($_POST["continents"] as $continent) echo $continent; ?>
        </td>
    </tr>
</table>

</body>
</html>
