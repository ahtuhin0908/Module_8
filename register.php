<?php
if(isset($_POST['register'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
	// Validation checks
	if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)) {
		echo "All fields are required.";
		exit;
	}
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Email address is not in a valid format.";
		exit;
	}
	
	if($password !== $confirmpassword) {
		echo "Passwords do not match.";
		exit;
	}
	
	// Success message
	echo "Registration successful. Welcome, $firstname!";
}
?>
  