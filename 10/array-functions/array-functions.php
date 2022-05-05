<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Functions</title>
</head>
<body>
	<?php 

		$mynumbers = array(13, 17, 19, 23, 29, 11, 26);

	?>

	Maximum Value: <?php echo max($mynumbers); ?><br>
	Minimum Value: <?php echo min($mynumbers); ?><br>
	Count: <?php echo count($mynumbers); ?><br>
	<br>
	Sort: <pre><?php sort($mynumbers); print_r($mynumbers); ?></pre>
	Reverse Sort: <pre><?php rsort($mynumbers); print_r($mynumbers); ?></pre>
	<br>
	Implode:
	<?php 
		$string = implode(" | ", $mynumbers);
		echo $string;
	 ?>
	 <br>
	Explode:
	<pre>
	<?php 
		$newarray = explode(" | ", $string);
		print_r($newarray);
	 ?>
	</pre>
	Search: <?php echo in_array(15, $mynumbers); ?>
</body>
</html>