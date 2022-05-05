<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While Loops</title>
</head>
<body>
	<?php 

		$i = 1;

		while ($i <= 12) {
			echo "12 x {$i} = " . 12*$i . "<br>";
			$i++;
		}

		echo "I is now: " . $i;

	 ?>
</body>
</html>