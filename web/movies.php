<?php
    try
    {
        //CONNECT
        $dbUrl = getenv('DATABASE_URL');
        $dbOpts = parse_url($dbUrl);
        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"],'/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex)
    {
        echo 'Error!: ' . %ex->getMessage();
        die();
    }

    //QUERY
    $query = $db->prepare('SELECT id, title, year FROM movie');
    $query->execute();
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <ul>
        <?php
            foreach ($movies as $movie) {
                $title = $movie['title'];
                $year = $movie['year'];
                echo "<li><p>$title ($year)</p></li>";
            }
        ?>
    </ul>
</body>

</html>