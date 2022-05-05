<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach Loop</title>
</head>
<body>
	<?php 

		$job_categories = array("Accounting", "Finance", "IT", "Marketing", "Sales");

		foreach ($job_categories as $job_category) {
			echo $job_category . "<br>";
		}

	 ?>
	 <br>
	 <?php 

	 	$student = array("first_name"=>"Dileep", "surname"=>"Kariyawasam", "age"=>18, "grade"=>13);

	 	foreach ($student as $label => $mystudent) {
			echo $label . " : " . $mystudent . "<br>";
		}

	  ?>
</body>
</html>