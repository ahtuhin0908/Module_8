<?php
if(isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Validation checks
	if(empty($email) || empty($password)) {
		echo "Both fields are required.";
		exit;
	}
	
	// TODO: Implement database validation for email and password
	
	// Success message
	echo "Welcome back !";
}
?>