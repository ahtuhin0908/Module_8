<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="register.php">
<label for="firstname">First Name:</label>
<input type="text" id="firstname" name="firstname" required><br><br>

<label for="lastname">Last Name:</label>
<input type="text" id="lastname" name="lastname" required><br><br>

<label for="email">Email Address:</label>
<input type="email" id="email" name="email" required><br><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required><br><br>

<label for="confirmpassword">Confirm Password:</label>
<input type="password" id="confirmpassword" name="confirmpassword" required><br><br>

<input type="submit" name="register" value="Register">
</form>


<h1>Login Form</h1>
<form method="post" action="login.php">
<label for="email">Email Address:</label>
<input type="email" id="email" name="email" required><br><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required><br><br>

<input type="submit" name="login" value="Login">
</form> 


</body>
</html>