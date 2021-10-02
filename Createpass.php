<?php 
session_start();
include 'config/db.php';
	$result = mysqli_query($db,"SELECT * FROM registerusers");
	$row  = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css\Createpass.css">
</head>

<body style="height: 620px">
	
	<?php
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result)
	?>

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
	<?php if(isset($_SESSION['message'])): ?>
		<div class="alert <?php echo $_SESSION['alert-class']; ?>">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
			unset($_SESSION['alert-class']);
		?>
		</div>
		<?php endif; ?>
	<div class="box">
	<h1 class="text">Create A New Bus Pass</h1>
	<div class="row">
	<div class="form-class col-md-6">
	<form action="createpassprocess.php" method="post">
		<div class="form-group">
			<label>User Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="userid" class="form-control" value="<?php echo $_SESSION['User_ID'];?>" required>
		</div>
		<div class="form-group">
			<label>Bus No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="BusNo" class="form-control" value="" required>
		</div>
		<div class="form-group">
			<label>Start Stop&nbsp;&nbsp;</label>
				<input type="text" name="Start" class="form-control" value="" required>
		</div>
		<div class="form-group">
			<label>End Stop&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="Stop" class="form-control" value="" required>
		</div>
		<div class="form-group">
			<label for="option">Pass Type&nbsp;&nbsp;</label>
			<select id="select_option" name="option" class="form-control" value="" required>
				<option selected>Choose..</option>
				<option value="300">One Month</option>
				<option value="850">Three Months</option>
				<option value="1600">Six Months</option>
				<option value="3150">Year</option>
			</select>
		</div>
		<div class="form-group">
			<label for="price">Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="price" class="form-control input_price" value="" readonly>
		</div>
		<div class="form-check">
			<div class="align">
				<button type="submit" name="createbtn" class="form-control" id="sub-btn">PAY</button>
			</div>
		</div>
	</form>
	</div>
	</div></div>
	</div>

<!-- SCRIPT TAGS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#select_option').on('change', function() {
	$('.input_price').val($(this).val());
});
</script>
<!-- END OF SCRIPT TAGS -->

<?php
}
else{
    echo "No result found";
}
?>

</body>
</html>