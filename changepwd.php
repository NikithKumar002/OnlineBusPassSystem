<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css\changepwd.css">
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

<h2 align="center" style="margin: 100px 0px 0px 0px;">CHANGE PASSWORD</h2>
<div><?php if(isset($message)) { echo $message; } ?></div>
<div class="form">
<form method="post" action="changepwdprocess.php" align="center">
<div><span class="span">Current Password</span><br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span></div>

<div><span class="span">New Password</span><br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span></div>

<div><span class="span">Confirm Password</span><br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span></div>
<br>
<input type="submit" name="update">
</form>
<br>
<br>
</div>
</body>
</html>