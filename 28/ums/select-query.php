<?php require_once('inc/connection.php'); ?>
<?php 

	$query = "SELECT first_name, last_name, email FROM user";

	$result_set = mysqli_query($connection, $query);

	if ($result_set) {
		// checking how many records returned from the query
		echo mysqli_num_rows($result_set) . " Records found.<hr>";

		$table = '<table>';
		$table .= '<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)) {
			$table .= '<tr>';
			$table .= '<td>' . $record['first_name'] . '</td>';
			$table .= '<td>' . $record['last_name'] . '</td>';
			$table .= '<td>' . $record['email'] . '</td>';
			$table .= '</tr>';
		}

		$table .= '</table>';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select Query</title>
	<style>
		table { border-collapse: collapse; }
		td, th { border: 1px solid black; padding: 10px; }
	</style>
</head>
<body>
	<?php echo $table; ?>
</body>
</html>
<?php mysqli_close($connection); ?>