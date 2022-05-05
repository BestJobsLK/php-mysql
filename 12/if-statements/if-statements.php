<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If Statements</title>
</head>
<body>
	<?php 

		$avg_score = 80;
		echo "Score: " . $avg_score;
		echo "<br>";

		if ( $avg_score >= 70 ) {
			echo "You are qualified. Grade: A";
		} elseif ( $avg_score >= 40 ) {
			echo "You are qualified. Grade: B";
		} else {
			echo "Please try again.";
		}


	?>
</body>
</html>