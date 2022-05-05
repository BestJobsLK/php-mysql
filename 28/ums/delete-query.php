<?php require_once('inc/connection.php'); ?>
<?php 

	/*
		DELETE FROM table_name
		WHERE column_name = value
		LIMIT 1
	*/

	$query = "DELETE FROM user WHERE id = 14";

	$result = mysqli_query($connection, $query);

	if ($result) {
		echo mysqli_affected_rows($connection) . " Record deleted.";
	} else {
		echo "Database query failed.";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete Query</title>
</head>
<body>
	
</body>
</html>
<?php mysqli_close($connection); ?>