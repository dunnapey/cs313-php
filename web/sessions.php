<?php
    session_start();
    $_SESSION["user"] = "Peyton";

    setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
?>

<!DOCTYPE html>
<html>
<head>
    <title>SESSIONS</title>
</head>

<body>
    <h1>SESSIONS</h1>
</body>
</html>