<?php
echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Team02</title>
    </head>

    <body>
        <form method='post' action='<?php echo htmlspecialchars($_SERVER('PHP_SELF'];?></form>
        Name: <input type="text" name="name">
        <br>
        Email: <input type="text" name="email">
        <br>
        Major: <br>
        <input type="radio" name="major" value="Computer Science"><span>Computer Science</span><br>
        <input type="radio" name="major" value="Web Design & Development"><span>Web Design & Development</span><br>
         <input type="radio" name="major" value="Computer Information Technology"><span>Computer Information Technology</span><br>
         <input type="radio" name="major" value="Computer Engineering"><span>Computer Engineering</span>
         <br>
        Comment: <textarea placeholder="Enter a comment:"></textarea>
        <br>
        <input type="submit" name="submit" value="SUBMIT">
    </body>
    </html>"

    $name = $email = $major = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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