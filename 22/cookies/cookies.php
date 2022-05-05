<?php 

	//setcookie(name, value, expiration);
	

	// if (isset($_COOKIE['language'])) {
	// 	$language = $_COOKIE['language'];
	// 	echo "Selected language: {$language}";
	// } else {
	// 	setcookie('language', 'Sinhala', time()+60*60*24*7);
	// }

	// how to remove a cookie
	setcookie('language',NULL,-time()+60*60*24*7);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>
	
</body>
</html>