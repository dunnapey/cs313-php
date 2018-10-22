<?php
	require 'herokudb.php';

	$id = $_GET['id'];

	//QUERY
	$query = $db->prepare("SELECT fname, lname FROM users WHERE class_id = '$id'");
	$query->execute();
	$students = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>a05</title>
	<link rel="icon" type="image/png" href="assets/favicon2.png">
</head>

<body>
	<table>
		<th>Students</th>
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
</body>
</html>