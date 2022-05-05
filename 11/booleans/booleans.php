<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booleans</title>
</head>
<body>
	<?php 

		$var1 = true;
		$var2 = false;
		$var3 = "book";

	?>

	<?php echo "Variable 1: " . $var1; ?> <br>
	<?php echo "Variable 2: " . $var2; ?> <br>

	<?php echo "Is Variable 1 boolean? " . is_bool($var1); ?> <br>
	<?php echo "Is Variable 3 boolean? " . is_bool($var3); ?> <br>

	<?php 

		if ($var2 == false) {
			echo "Variable 2 is False";
		}

	?>

</body>
</html>