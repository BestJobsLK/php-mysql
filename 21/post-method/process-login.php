<?php 

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'dileep' && $password == 'pass') {
		echo "Login Successful";
	} else {
		echo "Invalid Username or Password";
	}

 ?>
 