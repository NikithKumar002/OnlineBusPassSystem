<?php
include 'registerprocess.php';
?>
<!DOCTYPE html>
<html lang="En">
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width = device-width, initial-scale  = 1">
<title> REGISTRATION FORM </title>
<link rel="stylesheet" href="adminregistration">
</head>
<body>
<div class="container">
<h1 class="head"> REGISTRATION FORM </h1>
<div class="register">
<form method="post" id="register" action="adminregistration.php">		
	<div>
		<label id="firstname">Name :</label><br>
		<input type="text" name="Name" id="fname" placeholder="Enter your first name" required><br><br>
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
		<button type="submit" name="adminbtn" onclick="" id="sub"> REGISTER </button>
	</div>
	<div class="signin">
		<p>Already an Member? <a href="loginpage.php">Sign In</a></p>
	</div>
</form>
</div>
</div>
</body>
</html>