<?php
session_start();
	include 'config/db.php';
	$User_ID= $_SESSION["User_ID"];
	$sql=mysqli_query($db,"SELECT * FROM registerusers where User_ID='$User_ID'");
	$row  = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css\index.css">
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
<div class="container">
	<div>
	 <div>
	  <?php if(isset($_SESSION['success'])): ?>
	  
	  <div class="error success">
		<?php 
		  echo $_SESSION['success']; 
		  unset($_SESSION['success']);		  
		?>
	  </div>
	<?php endif; ?>
    <?php if(isset($_SESSION['First_Name'])):?>
		<p style="font-size: xx-large;text-align: center;"> Welcome <strong><?php echo $_SESSION['First_Name'];?></strong></p>
	<?php endif; ?>
	
	  </div>
    </div>
</div>
</body>
</html>