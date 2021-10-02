<?php 
session_start();
include 'config/db.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css\UserDetailPage.css">
</head>
<body style="height: 620px">
	<nav class="nav-bar">
		<ul><li><a class="" href="index.php"><i class="fa fa-home" style="font-size:20px"></i>Home</a></li></ul>
		<ul><li><a href="UserDetailPage.php">My Details</a></li></ul>
		<ul><li><a href="BusDetails.php">Bus Details</a></li></ul>
		<ul><li><div class="inline"><a href="#">PASS DETAILS</a>
		<ul><div class="none"><a href="Createpass.php">Create An Pass</a>
		<a href="Repass.php">Re-New An Pass</a></div></div></li></ul></ul>
		<ul><li><a href="changepwd.php">Change Password</a></li></ul>
		<ul style="display: block;"><li><a href="logoutpage.php">Logout</a></li></ul>
	</nav>

	<div>
	<div class="row">
		<div class="form-class col-md-6">
			<form action="" id="userform" method="post" enctype="multipart/form-data" style="font-weight: 800;">
				<h2>MY PROFILE</h2>
					<?php
						$image="SELECT * FROM updateprofile";
						$res = mysqli_query($db, $image);
						$row = mysqli_fetch_array($res);
					?>
				<div class="form-group">
					<div class="left"><div class="Head"><label>User ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></div>
						<div class="value"><?php echo $_SESSION['User_ID'];?></div>
					</div></div>
					<div class="form-group">
					<div class="left">
						<div class="Head"><label>First Name&nbsp;&nbsp;&nbsp;</label></div>
						<span class="value"><tr><?php echo $_SESSION['First_Name'];?></span>
					</div></div>
					<div class="form-group">
					<div class="left">
						<div class="Head"><label>Last Name&nbsp;&nbsp;&nbsp;</label></div>
						<span class="value"><tr><?php echo $_SESSION['Last_Name'];?></span>
					</div></div>
					<div class="form-group">
					<div class="left">
						<div class="Head"><label>Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></div>
						<span class="value"><?php echo $_SESSION['Email_ID'];?></span>
					</div></div>
					<div class="form-check">
						<div class="button"><button type="submit" name="update-btn" class="form-control"><div class="abtn"><br><a href="updateprofile.php" style="text-decoration: none;">Add More Details/Update Details</a></div></button></div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>







</body>
</html>