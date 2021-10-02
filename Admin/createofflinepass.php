<?php
include_once 'config/db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Pass Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/createofflinepass.css">
<style>
</style>
</head>
<body>
<div class="container">
<div class="popup">
<div class="popup-content">
<h2 style="text-align: center;">CREATE A PASS</h2>
		<img src="css/images/close.png" alt="close" class="close" style="width:10px;">

<form action="offlinepassprocess.php" method="post">
	<div class="form-group">
		<label>User Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="userid" class="form-control" value="" required>
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
	<div class="formbtn">
		<div class="align">
			<button type="submit" name="createbtn" class="createbtn" id="sub-btn">CREATE</button>
		</div>
	</div>
</form>
</div>
</div>
</div>
<nav class="nav-bar" style="height: 50px;	background-color: #778899;">
	<ul><li><a class="" href="adminindex.php"><i class="fa fa-home" style="font-size:20px"></i>Home</a></li></ul>
	<ul><li><a href="adminprofile.php">Admin Details</a></li></ul>
	<ul><li><div class="inline"><a href="">User Details</a>
	<ul><div class="none"><span><a href="">Online Users</a></span>
	<span><a href="adminregister.php">Offline Users</a></span></ul></div></div></li></ul>
	<ul><li><a href="detailsbus.php">Bus Details</a></li></ul>
	<ul><li><div class="inline"><a href="">Pass Details</a>
	<ul><div class="none"><span><a href="onlinepassdetails.php">Online Pass Details</a></span>
	<span><a href="createofflinepass.php">Offline Pass Details</a></span></ul></div></div></li></ul>
	<ul><li><a href="adminlogout.php">Logout</a></li>
	</ul>
</nav>
<div class="buttoncontainer">
<h1 style="display: inline;text-align: center;margin: 0px 0px 0px 20px">PASS DETAILS</h1>
	<a href="#" class="button" id="button" style="
    padding: 10px 15px;
	display: inline;
    color: #34495e;
    font-weight: bolder;
    font-size: 18px;
    border-radius: 5px;
    border: 2px solid;
    text-decoration: none;
    transition: 0.4s;
    margin: 0px 0px 0px 850px;">CREATE A NEW PASS</a>
</div>
<div class="page">
<?php
	
	$query = "SELECT * FROM offline_pass";
	$query_run = mysqli_query($db, $query);
	
?>
<div class="tablecontainer">
<div>
<table>
<thead>
	<tr>
		<th>S.No</th>
		<th>USER ID</th>
		<th>PASS ID</th>
		<th>Create On</th>
		<th>Expiry Date</th>
		<th>Validity</th>
		<th>View</th>
		<th>Repass</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>
<?php
	if(mysqli_num_rows($query_run)>0)
	{
		while($row=mysqli_fetch_assoc($query_run))
		{
			$today = strtotime(date('Y-m-d H:i:s'));
			$expiry = strtotime($row['Expiry']);
	?>
	<tr>
		<th><?php echo $row['ID'];?></th>
		<th><?php echo $row['User_ID'];?></th>
		<th><?php echo $row['Pass_ID'];?></th>
		<th><?php echo $row['Date'];?></th>
		<th><?php echo $row['Expiry'];?></th>
		<th><?php if($today >= $expiry){
				echo "Expired";
			}else{
				echo "Active";
			}?></th>
		<th>			    
		  <form action="" method="POST">
		    <input type="hidden" name="view-id" value="<?php echo $row['Pass_ID']?>">
			<button type="submit" name="view_btn" class="viewbtn">VIEW</button></form>
		</th>
		<th>			    
		  <form action="offlinerenewal.php" method="POST">
		    <input type="hidden" name="edit-id" value="<?php echo $row['Pass_ID']?>">
			<button type="submit" name="edit_btn" class="editbtn">RENEWAL</button></form>
		</th>
		<th>			    
		  <form action="offlinepassprocess.php" method="POST">
		    <input type="hidden" name="delete-id" value="<?php echo $row['Pass_ID']?>">
			<button type="submit" name="deletebtn" class="deletebtn">DELETE</button></form>
		</th>
	</tr>
	<?php
		}
	}else{
		echo "No Record Founded";
	}		  
	?>
</tbody>
</table>
</div>
</div>
</div>

<script>

document.getElementById("button").addEventListener("click", function(){
	document.querySelector(".popup").style.display = "flex";
})
document.querySelector(".close").addEventListener("click", function(){
	document.querySelector(".popup").style.display = "none";
})

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#select_option').on('change', function() {
	$('.input_price').val($(this).val());
});
</script>

</body>
</html>