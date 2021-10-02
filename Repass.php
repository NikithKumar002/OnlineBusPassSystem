<?php 
session_start();
include 'config/db.php';

$query = mysqli_query($db, "SELECT * FROM passdetails WHERE User_ID = '".$_SESSION['User_ID']."'") or die(mysql_error());
$arr = mysqli_fetch_array($query);
$num = mysqli_num_rows($query);


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css\Repass.css">

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


<h1 class="text">Renewal Bus Pass</h1>
<div>
<div class="row">
<div class="form-class col-md-6">
<form>
	<div class="form-group">
		<label>User Id :- </label>
			<input type="text" name="User_Id" class="form-control" placeholder="<?php echo $_SESSION['User_ID'];?>" value="" readonly>
	</div>
	<div class="form-group">
		<label>Pass Id</label>
			<input type="text" name="passid" class="form-control" value="<?php echo $arr['Pass_ID'];?>">
	</div>
	<div class="form-group">
		<label>Bus Number</label>
			<input type="text" name="updatebusno" class="form-control" value="<?php echo $arr['busno'];?>">
	</div>
	<div class="form-group">
		<label>Valid Till :- </label>
			<input type="text" name="updatedate" class="form-control" value="<?php echo $arr['Expiry'];?>">
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
		<label>Amount :- </label>
			<input type="text" name="amount" class="form-control input_price" value="<?php echo $arr['price'];?>">
	</div>
	<div class="form-group">
		<div class="form-check">
		  <div class="align">
			<button type="submit" name="submit-btn" class="form-control" id="sub-btn"> SUBMIT </button>
			</div>
		</div>
	</div>
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#select_option').on('change', function() {
	$('.input_price').val($(this).val());
});
</script>
</body>
</html>