<?php 
session_start();
include 'config/db.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/adminprofile.css">
</head>

<body>
<nav class="nav-bar">
	<ul><li><a class="" href="adminindex.php"><i class="fa fa-home" style="font-size:20px"></i>Home</a></li></ul>
	<ul><li><a href="adminprofile.php">Admin Details</a></li></ul>
	<ul><li><div class="inline"><a href="">User Details</a>
	<ul><div class="none"><span><a href="adminonlineregister.php">Online Users</a></span>
	<span><a href="adminregister.php">Offline Users</a></span></ul></div></div></li></ul>
	<ul><li><a href="detailsbus.php">Bus Details</a></li></ul>
	<ul><li><div class="inline"><a href="">Pass Details</a>
	<ul><div class="none"><span><a href="onlinepassdetails.php">Online Pass Details</a></span>
	<span><a href="createofflinepass.php">Offline Pass Details</a></span></ul></div></div></li></ul>
	<ul><li><a href="adminlogout.php">Logout</a></li>
	</ul>
</nav>

<h2>MY PROFILE</h2>
<div style="margin: 170px 0px 0px 0px">
<div class="row">
<div class="form-class col-md-6">
	<form action="" id="userform" method="post" enctype="multipart/form-data">
		<?php
			$image="SELECT * FROM admin";
			$res = mysqli_query($db, $image);
			$row = mysqli_fetch_array($res);
		?>
		<div class="form-group">
		<div class="left"><label>Admin ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<span class="value"><?php echo $_SESSION['Admin_ID'];?></span>
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<span class="value"><tr><?php echo $_SESSION['Name'];?></span>
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<span class="value"><?php echo $_SESSION['Email_ID'];?></span>
		</div>
		</div>
	</form>
</div>
</div>
</div>
</body>
</html>