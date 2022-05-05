<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
	<?php 

		$mycars = array("Toyota", "Nissan", "Kia", "Mazda");

		echo $mycars[0];

	?>
	<br>
	<h3>Before</h3>
	<pre>
		<?php print_r($mycars); ?>
	</pre>

	<?php $mycars[4] = "Suzuki"; ?>
	<?php $mycars[] = "Mitsubishi"; ?>
	<?php $mycars[3] = "Honda"; ?>

	<h3>After</h3>
	<pre>
		<?php print_r($mycars); ?>
	</pre>
</body>
</html>