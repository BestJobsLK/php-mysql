<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Floating Points</title>
</head>
<body>
	<?php 

		$float = 6.28;

	?>
	<?php echo $float; ?><br>
	<?php $float += 5; echo $float; ?><br>
	<?php echo 10/3; ?><br>
	<?php echo 10/0; ?>

	<h2>Functions</h2>
	Round: <?php echo round($float,1); ?><br>
	Round Up: <?php echo ceil($float); ?><br>
	Round Down: <?php echo floor($float); ?>

	<h2>How to check if a number is an Integer or a Float</h2>

	<?php 
		$myfloat = 7.34;
		$myinteger = 20;
	 ?>

	 <?php echo "Is {$myfloat} an Integer? " . is_int($myfloat); ?><br>
	 <?php echo "Is {$myinteger} an Integer? " . is_int($myinteger); ?><br>
	 <br>
	 <?php echo "Is {$myfloat} a Float? " . is_float($myfloat); ?><br>
	 <?php echo "Is {$myinteger} a Float? " . is_float($myinteger); ?><br>
	 <br>
	 <?php echo "Is {$myfloat} a Number? " . is_numeric($myfloat); ?><br>
	 <?php echo "Is {$myinteger} a Number? " . is_numeric($myinteger); ?><br>

</body>
</html>