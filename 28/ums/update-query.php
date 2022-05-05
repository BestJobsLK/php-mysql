<?php require_once('inc/connection.php'); ?>
<?php 

	/*
		UPDATE table_name
		SET column_1 = value_1, column_2 = value_2
		WHERE column_name = value
		LIMIT 1
	*/

	$query = "UPDATE user SET first_name = 'Lasantha' WHERE id = 6";

	$result = mysqli_query($connection, $query);

	if ($result) {
		echo mysqli_affected_rows($connection) . " Record updated.";
	} else {
		echo "Database query failed.";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Query</title>
</head>
<body>
	
</body>
</html>
<?php mysqli_close($connection); ?>