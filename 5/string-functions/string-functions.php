<?php 

	$first = "the five boxing wizard ";
	$second = "jumps quickly.";

	$sentence = $first;
	$sentence .= $second;

	echo $sentence;

?>
<br>
All simple: <?php echo strtolower($sentence); ?><br>
All capital: <?php echo strtoupper($sentence); ?><br>
First letter capital: <?php echo ucfirst($sentence); ?><br>
First letter capital in all words: <?php echo ucwords($sentence); ?><br>
Number of characters: <?php echo strlen($sentence); ?><br>
Search for a string or character: <?php echo strstr($sentence, "box"); ?><br>
Replace: <?php echo str_replace("five", "seven", $sentence); ?><br>