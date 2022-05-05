<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Associative Arrays</title>
</head>
<body>
	<?php 

		$student = array("first_name" => "Dileep", "last_name" => "Kariyawasam", "age" => 20);

	?>

	<pre><?php print_r($student); ?></pre>

	<?php echo $student["first_name"]; ?> <br>
	<?php echo $student["first_name"] . " " . $student["last_name"]; ?><br>

	<?php $student["age"] = 24; ?>

	<?php echo $student["age"]; ?>

</body>
</html>