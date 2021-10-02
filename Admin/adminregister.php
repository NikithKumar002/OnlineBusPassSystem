<?php
include_once 'config/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/adminregister.css">

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
<!-- Button trigger modal -->
<div class="buttoncontainer">
	<a href="#" class="button" id="button" style="">ADD USERS</a>
</div>

<!-- Modal -->
<div class="popup">
<div class="popup-content">
	<form action="manageuserprocess.php" method="POST" class="form-container">
	<h1 style="text-transform: UPPERCASE;text-align: center;margin: 0px 0px 0px -60px"> Add Users details</h1>
		<img src="css/images/close.png" alt="close" class="close" style="width:10px;">
		<div class="form-group">
		<div class="left">
			<label>First Name&nbsp;&nbsp;</label>
			<input type="text" id="First_Name" name="First_Name" value="" required> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Last Name&nbsp;&nbsp;</label>
			<input type="text" id="Last_Name" name="Last_Name" value="" required> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="Email" name="Email_ID" value="">
		</div>
		</div>
		<div class="form-group">
		<label>Phone Number</label>
			<div class="formpage">
				<select id="formph">
				<option>+91</option>
				</select>&nbsp;
				<input type="number_format" name="Phone_Number" class="formph">
			</div>
		</div>
		<div class="form-group">
		<div class="align">
			<label for="gender">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" id="gender" name="gender" value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" id="gender" name="gender" value="Female">Female
		</div>
		</div>		
		<div class="form-group">
		<div class="align">
			<label for="birthday">Date Of Birth&nbsp;&nbsp;</label>
			<input type="date" id="birthday" name="birthday" placeholder="">
		</div>
		</div>
		<div class="form-group">
			<div class="align">
				<label for="inputAddress">Address</label><br>
				<input type="text" class="form-control" id="inputAddress" name="Address" placeholder="1234 Main St">
			</div>
		</div>
		<div class="form-group">
			<div class="align">
				<label for="inputAddress2">Address 2</label><br>
				<input type="text" class="form-control" id="inputAddress" name="Address2" placeholder="Apartment, studio, or floor">
			</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-4">
		<div class="align">
			<label for="inputState">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		    <select id="inputState" name="State" class="form-control address">
				<option selected>Choose...</option>
				<option>Andhra Pradesh</option>
				<option>Arunachal Pradesh</option>
				<option>Assam</option>
				<option>Andaman and Nicobar</option>
				<option>Bihar</option>
				<option>Chhattisgarh</option>
				<option>Chandigarh</option>
				<option>Dadra and Nagar Haveli</option>
				<option>Daman and Diu</option>
				<option>Delhi</option>
				<option>Goa</option>
				<option>Gujarat</option>
				<option>Haryana</option>
				<option>Himachal Pradesh</option>
				<option>Jammu and Kashmir</option>
				<option>Jharkhand</option>
				<option>Karnataka</option>
				<option>Kerala</option>
				<option>Lakshadweep</option>
				<option>Madhya Pradesh</option>
				<option>Maharashtra</option>
				<option>Manipur</option>
				<option>Meghalaya</option>
				<option>Mizoram</option>
				<option>Nagaland</option>
				<option>Orissa</option>
				<option>Pondicherry</option>
				<option>Punjab</option>
				<option>Rajasthan</option>
				<option>Sikkim</option>
				<option>Tamil Nadu</option>
				<option>Telangana</option>
				<option>Tripura</option>
				<option>Uttar Pradesh</option>
				<option>Uttarakhand</option>
				<option>West Bengal</option>
			</select>
		</div>
		</div>
			<div class="form-group col-md-6">
				<div class="align">
					<label for="inputCity">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="City" class="form-control address" id="inputCity" placeholder="">
				</div>
			</div>
			<div class="form-group col-md-2">
				<div>
					<label for="inputZip">Zipcode</label>
					<input type="text" name="Zipcode" class="form-control address" id="inputZip" placeholder="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="align">
				<label>Upload Profile &#129047;(for address proof)</label>
				<input type="file" name="profileImage" class="form-control">
			</div>
		</div>	
		<div class="form-group">
			<div class="align">
				<label>Upload Document &#129047;(for address proof)</label>
				<input type="file" name="AddressProof" class="form-control">
			</div>
		</div>
		<div class="formbutton">
			<div class="form-check">
				<button type="submit" name="registerbtn" class="form-control" id="update-btn"> UPDATE </button>
			</div>
		</div>		
	</form>
</div>
</div>
<div class="container" style="margin: 100px 0px 0px 0px;">
<?php 
if(isset($_SESSION['success']) && $_SESSION['success'] != '')
{
	echo '<h2>'.$_SESSION['success'].'</h2>';
	unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] != '')
{
	echo '<h2>'.$_SESSION['status'].'</h2>';
	unset($_SESSION['status']);
}
?>
<div class="row">
<?php
	
	$query = "SELECT * FROM offline_register";
	$query_run = mysqli_query($db, $query);
	
?>
<div class="formpage">
<h2 style="margin: 120px 0px 0px 20px;text-transform:UPPERCASE;"> User Details </h2>
	<table>
	  <thead>
	  <tr>
	    <th>ID</th>
		<th>User ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email ID</th>
		<th>EDIT</th>
		<th>DELETE</th>
	  </tr>
	  </thead>
	  <tbody>
	  <?php
		if(mysqli_num_rows($query_run)>0)
		{
			while($row=mysqli_fetch_assoc($query_run))
			{
			?>
			<tr>
			  <td><?php echo $row['ID'];?></td>
			  <td><?php echo $row['User_ID'];?></td>
			  <td><?php echo $row['First_Name'];?></td>
			  <td><?php echo $row['Last_Name'];?></td>
			  <td><?php echo $row['Email_ID'];?></td>
			  <td>
			    <form action="edituserprofile.php" method="POST">
			    <input type="hidden" name="edit-id" value="<?php echo $row['User_ID']?>">
				<button type="submit" name="edit_btn" class="editbtn">EDIT</button></form>
			  </td>
			  <td>
			    <form action="manageuserprocess.php" method="POST">
			    <input type="hidden" name="delete-id" value="<?php echo $row['User_ID']?>"><button type="submit" name="deletebtn" class="delete_btn">DELETE</button></form>
			  </td>
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

</body>
</html>