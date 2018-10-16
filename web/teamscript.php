<html>
<head>
    <title>Awesome</title>
</head>
<body>

<?php
    // $user = 'postgres';
    // $pwd = 'hmooBhwJchiM';
    // $db = new PDO('psql:host=localhost;dbname=localtestdb', $user, $pwd);
    try
    {
        $dburl = getenv('DATABASE_URL');
        $dbOpts = parse_url($dburl);
        $dbHost = $dbOpts['host'];
        $dbPort = $dbOpts['port'];
        $dbUser = $dbOpts['user'];
        $dbPwd = $dbOpts['pass'];
        $dbName = ltrim($dbOpts['path'], '/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPwd);

        echo "<h1>Scriptures Resources</h1><br>";

        foreach ($db->query('SELECT * FROM scriptures;') as $row) {
            echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b> - ' . '\"' . $row['content'] . '\"<br>';
        }
    }
    catch(PDOException $ex)
    {
        echo 'ERROR!: ' . $ex->getMessage();
        die();
    }
?>
    
</body>
</html>