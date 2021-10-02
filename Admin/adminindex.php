<?php
session_start();
	include 'config/db.php';
	$Admin_ID= $_SESSION["Admin_ID"];
	$sql=mysqli_query($db,"SELECT * FROM admin where Admin_ID='$Admin_ID'");
	$row  = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/adminindex.css">

</head>
<body>

<nav class="nav-bar" style="height: 50px;	background-color: #778899;">
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

<br>
<div class="container">
	<div style="margin: 131px 0px 0px 0px;">
	<div  style="text-align: center;font-size:x-large;">
	  <?php if(isset($_SESSION['success'])): ?>
	  
	  <div class="error success">
		<?php 
		  echo $_SESSION['success']; 
		  unset($_SESSION['success']);		  
		?>
	  </div><br><br>
	<?php endif; ?>
    <?php if(isset($_SESSION['Name'])):?>
		<p> Welcome <strong><?php echo $_SESSION['Name'];?></strong></p>
	<?php endif; ?>
	
	</div>
    </div>
</div>
</body>
</html>