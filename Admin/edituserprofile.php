<!DOCTYPE html>
<html>
<head>
<title> User Edit Page </title>

<style>
.form-class {
	width: 500px;
	height:950px;
    margin: 150px 0px 100px 470px;
}
form#userform{
    padding: 0px 0px 0px 25px;
}
input#Userid{
	width: 59.5%;
    height: 34px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
#inputAddress{
  width: 81%;
  height: 50px;
  background-color: white;
  display: inline;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.address {
	width: 67.5%;
	height: 35px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
    background-color: white;
}
#birthday {
	width: 56.4%;
	height: 35px;
	background-color: white;
	display: inline;
	border: 1px solid #ccc;
	border-radius: 4px;
	text-transform: UPPERCASE;
}
.form-group {
	margin: 20px 0px 20px 0px;
	font-size: larger;
	text-align: left;
}
input[type=file] {
    padding: 4px 0px 4px 3px;
	width: 80%;
    height: 30px;
	border: 1px solid beige;
	border-radius: 3px;
}
.formph {
  width: 67.5%;
  height: 35px;
  background-color: white;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
select#formph{
	height: 35px;
	width: 56px;
	background-color: white;
	display: inline;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
#user-id{
	height: 34px;
	width: 58.5%;
}
input#First_Name {
    width: 59.5%;
    height: 35px;
	border: 1px solid #ccc;
	border-radius: 3px;
}
#Last_Name{
	height: 34px;
	width: 59.1%;
	border: 1px solid #ccc;
	border-radius: 3px;
}
#Email{
	height: 34px;
	width: 59.5%;
	border: 1px solid #ccc;
	border-radius: 3px;
}

.form-check{
	height: 150px;
}
button#update-btn {
    height: 35px;
    width: 100px;
    margin: 30px 0px 0px 222px;
}
</style>
</head>
<body>
<div class="form-class">
<div class="row">
<div class="formedit">
<form action="manageuserprocess.php" method="POST" class="form-container">
	<h1 style="text-transform: UPPERCASE;text-align: center;margin: 0px 0px 50px -95px"> Edit User details</h1>
	<!--Edit Button-->
		<?php
		session_start();
		extract($_POST);
		include_once 'config/db.php';
		if(isset($_POST['edit_btn']))
		{
			$User_ID = mysqli_real_escape_string($db, $_POST['edit-id']);
			
			$query = "SELECT * FROM offline_register WHERE User_ID = '$User_ID'";
			$query_run = mysqli_query($db, $query);
			$row  = mysqli_fetch_array($query_run);

			foreach($query_run as $row)
			{
				?>
		<div class="form-group">
		<div class="left">
			<label>User_ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="Userid" name="edit_ID" value="<?php echo $row['User_ID'];?>" readonly> 
		</div>
		</div>		
		<div class="form-group">
		<div class="left">
			<label>First Name&nbsp;&nbsp;</label>
			<input type="text" id="First_Name" name="editFirst_Name" value="<?php echo $row['First_Name'];?>" required> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Last Name&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="Last_Name" name="editLast_Name" value="<?php echo $row['Last_Name'];?>" required> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="Email" name="editEmail_ID" value="<?php echo $row['Email_ID'];?>" readonly>
		</div>
		</div>
		<div class="form-group">
		<label>Phone Number</label>
		<div class="formpage">
			<select id="formph">
			<option>+91</option>
			</select>&nbsp;
			<input type="number_format" name="editPhone_Number" class="formph" value="<?php echo $row['Phone_Number'];?>">
		</div>
		</div>
		<div class="form-group">
		<div class="align">
			<label for="gender">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" id="gender" name="editgender" value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" id="gender" name="editgender" value="Female">Female
		</div>
		</div>		
		<div class="form-group">
		<div class="align">
			<label for="birthday">Date Of Birth&nbsp;&nbsp;</label>
			<input type="date" id="birthday" name="editbirthday" placeholder="" value="<?php echo $row['birthday'];?>">
		</div>
		</div>
		<div class="form-group">
		<div class="align">
			<label for="inputAddress">Address</label><br>
			<input type="text" class="form-control" id="inputAddress" name="editAddress" placeholder="1234 Main St" value="<?php echo $row['Address'];?>">
		</div>
		</div>
		<div class="form-group">
		<div class="align">
			<label for="inputAddress2">Address 2</label><br>
			<input type="text" class="form-control" id="inputAddress" name="editAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $row['Address2'];?>">
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-4">
		<div class="align">
		<label for="inputState">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		    <select id="inputState" name="editState" class="form-control address">
				<option selected><?php echo $row['State'];?></option>
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
			<input type="text" name="editCity" class="form-control address" id="inputCity" placeholder="" value="<?php echo $row['City'];?>">
		</div>
		</div>
		<div class="form-group col-md-2">
		<div>
			<label for="inputZip">Zipcode</label>
			<input type="text" name="editZipcode" class="form-control address" id="inputZip" placeholder="" value="<?php echo $row['Zipcode'];?>">
		</div>
		</div>
		</div>

		<div class="form-group">
		<div class="form-check">
			<a href="adminregister.php">CANCEL</a>
			<button type="submit" name="updatebtn" class="form-control" id="update-btn"> UPDATE </button>
		</div>
		</div>
		<?php
			}
		}
?>		
</form>
</body>
</html>
	