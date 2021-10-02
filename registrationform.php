<?php
include 'registerprocess.php';
?>
<!DOCTYPE html>
<html lang="En">
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width = device-width, initial-scale  = 1">
<title> REGISTRATION FORM </title>
<link rel="stylesheet" href="css\registrationform.css">
</head>

<body>
<div class="container">
<h1 class="head"> REGISTRATION FORM </h1>
<div class="register">
<form method="post" id="register" action="registrationform.php">		
	<div>
		<label id="firstname"> First Name :</label><br>
		<input type="text" name="First_Name" id="fname" placeholder="Enter your first name" required><br><br>
	</div>
	<div>
	   	<label> Last Name  :</label><br>
		<input type="text" name="Last_Name" id="lname" placeholder="Enter your last name" required><br><br>
	</div>
	<div>
		<label> Email ID :</label><br>
   		<input type="email" name="Email_ID" id="userEmail" value="" placeholder="Enter your Mail ID" required><br><br>
	</div>
	<div>
		<label> Password :</label><br>
		<input type="password" name="Password" id="userPassword" placeholder="Enter your password" required><br><br>
	</div>
	<div>
		<label> Re-enter Password :</label><br>
		<input type="password" name="RePassword" id="confirmPassword" placeholder="Re-Enter the Password" required><br><br>
	</div>
	<div>
		<button type="submit" name="signup-btn" onclick="" id="sub"> REGISTER </button>
	</div>
	<div class="signin">
		<p>Already an Member? <a href="loginpage.php">Sign In</a></p>
	</div>
</form>
</div>
</div>


</body>
</html>