<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags -->
<meta charset= "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BUS PASS REGISTRATION</title>
    <!-- CSS Links -->
<link rel="stylesheet" href="css\loginpage.css">
</head>
<body>
	<h1 class="center"> ONLINE BUS PASS SYSTEM </h1>

<div class="booking-form-box">
	<div class="customerlogin" id="customerlogin">
		<a href="" onclick="closeForm()"><img src="images/close.png" alt="close" class="close" style="width:20px;height:20px;margin-left:250px;"></a>
		<h3 class="center"> CUSTOMER LOGIN </h3>

		<form method="post" id="login" action="loginprocess.php">
			<div>
				<input type="text" name="Email_ID" id="Email_ID" required="required" placeholder="Email_ID"><br><br>
			</div>
			<div>
				<input type="password" name="Password" id="Password" required="required" placeholder="Password"><br><br>
			</div>
			<div>
				<label id="checkbox"><input type="checkbox"> Remember me </label><br>
			</div>
			<div class="btn-sub col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<button type="submit" name="loginbtn" id="btn-sub"> LOGIN </button>
			</div>
			<div class="">
				<span class="span">Forgot Password<a href="">Click Here</a></span>
			</div>		
			<div class="btn-register">
				<span class="span">Not Yet Member?<a href="registrationform.php"> REGISTER </a></span>
			</div>
		</form>

	</div>
	<div class="adminlogin" id="adminlogin">
		<a href="" onclick="closeForm()"><img src="images/close.png" alt="close" class="close" style="width:20px;height:20px;margin-left:250px;"></a>
		<h3 class="center"> ADMIN LOGIN </h3>

		<form method="post" id="login" action="loginprocess.php">
			<div>
				<input type="text" name="Admin_ID" id="name" placeholder="Admin ID"><br><br>		
			</div>
				<div>
				<input type="password" name="Password" id="name" placeholder="Password"><br><br>
			</div>
			<div>
				<label id="checkbox"><input type="checkbox"> Remember me</label><br>
			</div>
			<div class="btn-sub col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<button name="adminlogin" type="submit" id="btn-sub"> LOGIN </button>
			</div>
		</form>

	</div>
</div>

<div class="btn">
	<button class="admbtn" id="admbtn" onclick="openForm()"> ADMIN LOGIN </button>
</div>

<div class="btn">
	<button class="ctmrlogin" id="ctmrlogin" onclick="openForm1()"> CUSTOMER LOGIN </button>
</div>

<script>
	function openForm1(){
		document.getElementById("customerlogin").style.display = "block";
		document.getElementById("ctmrlogin").style.display = "none";
		document.getElementById("admbtn").style.display = "none";
	}
	function closeForm(){
		document.getElementById("customerlogin").style.display = "none";
	}
	function openForm(){
		document.getElementById("adminlogin").style.display = "block";
		document.getElementById("admbtn").style.display = "none";
		document.getElementById("ctmrlogin").style.display = "none";
	}
	function closeForm(){
		document.getElementById("adminlogin").style.display = "none";
	}
</script>
</body>
</html>