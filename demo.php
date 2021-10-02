<!--IMAGE UPLOAD-->
$file = addslashes(file_get_contents($_FILES["(filename)"["tmp_name"]))			
			
			
			
			<!--<div>
				<label for="">Gender</label>
				<input type="radio" name="Gender" class="" value="Male" id=""
				// <?php
				// if($data->Gender=="Male"){
					// ?>
					// checked
					// <?php
				// }
				// ?>>
				// Male
				// <input type="radio" name="Gender" class="" value="Female" id=""
				// <?php
				// if($data->Gender=="Female"){
					// ?>
					// checked
					// <?php
				// }
				// ?>>
				Female
			</div>-->
			
			////////////////////
						<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<?php foreach($errors as $error): ?>
				<li><?php echo $error; ?></li>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
						
//////////////////////////
<div>
<div class="row">
<div class="form-class col-md-6">
	<form action="updateprofile.php" id="userform" method="post" enctype="multipart/form-data">
		<h2 style="text-align:center;margin: 0px 95px 40px 0px;">UPDATE PROFILE FORM</h2>
		<div class="form-group">
		<div>		
			<label>User ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="number_format" id="user-id" name="User-ID" placeholder="" disabled> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>First Name&nbsp;&nbsp;</label>
			<input type="text" id="First_Name" name="First_Name" placeholder="" disabled> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Last Name&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="Last_Name" name="Last_Name" placeholder="" disabled> 
		</div>
		</div>
		<div class="form-group">
		<div class="left">
			<label>Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="Email" name="Email_ID" placeholder="" disabled>
		</div>
		</div>
		<div class="form-group">
		<label>Phone Number</label>
			<div class="formpage">
				<select id="formph">
				<option>+91</option>
				</select>&nbsp;
				<input type="number_format" name="Phone_Number" placeholder="" class="formph">
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
				<label>Upload Document &#129047;(for address proof)</label>
				<input type="file" name="Document" class="form-control" placeholder="">
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
					<input type="text" name="Zip" class="form-control address" id="inputZip" placeholder="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
				<button type="submit" name="cancel" class="form-control" id="can-btn">CANCEL</button>
				<button type="submit" name="update-btn" class="form-control" id="update-btn"> UPDATE </button>
			</div>
		</div>		
	</form>
</div>
</div>
</div>
	//////////////////////////////	
			
			
				$allowed = array('jpg', 'jpeg', 'png', 'pdf');
			if(in_array($fileActualExt, $allowed)){
				if($fileError===0){
					if($fileSize < 1000000){
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$fileDestination = 'uploads/profile'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
					}else{
						echo " Your file is too big!";
					}
				}else{
					echo "There was an error uploading your file!";
				}
			}else{
				echo "You cannot upload files of this type";
			}
		}
				#Upload Address
		if(!empty($AddressProof)){
			$AddressProof = $_FILES['file'];
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];

			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg', 'jpeg', 'png', 'pdf');
			if(in_array($fileActualExt, $allowed)){
				if($fileError===0){
					if($fileSize < 1000000){
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$fileDestination = 'uploads/AddressProof'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
					}else{
						echo " Your file is too big!";
					}
				}else{
					echo "There was an error uploading your file!";
				}
			}else{
				echo "You cannot upload files of this type";
			}
		}
			
			
			,$Phone_Number, $birthday, $Document, $Address, $Address2, $State, $City, $Zipcode
			issssssi
			
			Phone_Number, birthday, Document, Address, Address2, State, City, Zipcode
				$Phone_Number = $_POST['Phone_Number'];
	$birthday = $_POST['birthday'];
	$Document = $_POST['Document'];
	$Address = $_POST['Address'];
	$Address2 = $_POST['Address2'];
	$State = $_POST['State'];
	$City = $_POST['City'];
	$Zipcode = $_POST['Zipcode'];
	
	$_SESSION['User_ID'] = $user;		
			$_SESSION['Phone_Number'] = $Phone_Number;
			$_SESSION['birthday'] = $birthday;
			$_SESSION['Document'] = $destination_path;
			$_SESSION['Address'] = $Address;
			$_SESSION['Address2'] = $Address2;
			$_SESSION['State'] = $State;
			$_SESSION['City'] = $City;
			$_SESSION['Zipcode'] = $Zipcode;

			//set flash message 
			$_SESSION['message'] = "You are Successfully Updated!";
			$_SESSION['alert-class'] = "alert-success";
	
	
		// $stmt->bind_param(':Phone_Number', $Phone_Number);
		// $stmt->bind_param(':birthday', $birthday);
		// $stmt->bind_param(':Document', $Document);
		// $stmt->bind_param(':Address', $Address);
		// $stmt->bind_param(':Address2', $Address2);
		// $stmt->bind_param(':State', $State);
		// $stmt->bind_param(':City', $City);
		// $stmt->bind_param(':Zipcode', $Zipcode);
		// echo $_SESSION['$errors'];
	
	
	
	
	
	<form action="" id="verifyform" method="post" enctype="multipart/form-data">
		<div class="tab-verify" id="verify_details">
		<div class="verify">


		<div class="form-group">
			<div class="form-check">
				<button type="button" name="btn_back_personal" class="btn btn-details" id="btn_back btn_back_personal Back2">BACK</button>
				<button type="button" name="btn_verify_details" id="btn btn_verify_details Next3" class="btn btn-details">NEXT</button>
			</div>
		</div>
		</div>
		</div>
	</form>

	
	
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Login Details</a>
		</li>
		<li class="nav-item">
			<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_peronal_details">Personal Details</a>
		</li>
		<li class="nav-item">
			<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_verify_details">Verification</a>
		</li>
		<li class="nav-item">
			<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_upload_details">Upload Document</a>
		</li>
	</ul>
	
	
	
	
	
	
	
	
	
	<form action="" id="userform" method="post" enctype="multipart/form-data">
			<h2>MY PROFILE</h2>
			<div class="form-group">
				<div class="align"><label class="align">First Name</label></div>
				<div><input type="text" name="First_Name" class="form-control" 
				<?php if(isset($data->First_Name)){
					//print values
					?> value = "<?php=$data->First_Name;?>"
				<?php
				}else{
					?>
					placeholder="Enter First Name"
					<?php
				}
				?>
				>
					</div>
			</div>
			<div class="form-group">
				<div class="align"><label class="align">Last Name</label></div>
				<input type="text" name="Last_Name" class="form-control" 
				<?php if(isset($data->Last_Name)){
					//print values
				?>  value="<?php=$data->Last_Name;?>"
				<?php
				}else{
					?>
					placeholder="Enter Last Name"
					<?php
				}
				?>
				>
				</div>
			<div class="form-group">
			<div class="align"><label>Phone Number</label></div>
				<div class="formpage">
					<select id="formph">
					<option>+91</option>
					</select>
				<input type="text" name="Phone_Number" class="formph" 
				<?php
				if(isset($data->Phone_Number)){
					?>
				value="<?php=$data->Phone_Number;?>"
				<?php
				}else{?>
				placeholder="Enter Mobile number"
				<?php
				}
				?>
				>
				</div>
			</div>
			<div class="form-group">
				<div class="align"><label for="birthday">DOB :</label></div>
				<input type="date" id="birthday" name="birthday"
				<?php
				if(isset($data->birthday)){
					?>
				value="<?php=$data->birthday;?>"
				<?php
				}else{?>
				placeholder="Enter Your DOB"
				<?php
				}
				?>
				>
			</div>
			<div class="form-group">
				<div class="align"><label>Upload Document &#129047;(for address proof)</label></div>
				<input type="file" name="Document" class="form-control"
				<?php
				if(isset($data->Document)){
					?>
				value="<?php=$data->Document;?>"
				<?php
				}else{?>
				placeholder="Enter Mobile number"
				<?php
				}
				?>
				>
			</div>
			<div class="form-group">
				<div class="align"><label for="inputAddress">Address</label></div>
				<div><input type="text" class="form-control" id="inputAddress" name="Address" placeholder="1234 Main St"
				<?php if(isset($data->Address)){
					//print values
				?>  value="<?php=$data->Address;?>"
				<?php
				}else{?>
					placeholder="Enter Last Name"
					<?php
				}
				?>></div>
			</div>
			<div class="form-group">
				<div class="align"><label for="inputAddress2">Address 2</label></div>
				<input type="text" class="form-control" id="inputAddress2" name="Address2" placeholder="Apartment, studio, or floor" 
				<?php if(isset($data->Address2)){
					//print values
				?>  value="<?php=$data->Address2?>"
				<?php
				}else{?>
					placeholder="Enter Last Name"
					<?php
				}
				?>>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
				<div class="align"><label for="inputState">State</label></div>
			    <select id="inputState" name="State" class="form-control" 
				<?php if(isset($data->updatestate)){
					//print values
					
				?> value="<?php=$data->updatestate;?>"
				<?php
				}else{?>
					placeholder="Choose.."
					<?php
				}
				?>>
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
		<div class="form-group col-md-6">
			<div class="align"><label for="inputCity">City</label></div>
			<input type="text" name="City" class="form-control" id="inputCity"
			<?php if(isset($data->City)){
					//print values
				?> value="<?php=$data->City;?>"
				<?php
				}else{
					?>
					placeholder="Enter the City"
					<?php
				}
				?>>
		</div>
		<div class="form-group col-md-2">
			<div class="align"><label for="inputZip">Zip</label></div>
				<input type="text" name="Zip" class="form-control" id="inputZip"
				<?php if(isset($data->Zip)){
					//print values
				?> value="<?php=$data->Zip;?>"
				<?php
				}else{
					?>
					placeholder="Enter Zipcode"
					<?php
				}
				?>>
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
			  <div class="align">
				<button type="submit" name="update" class="form-control" id="sub-btn"> UPDATE </button>
			  </div>
			</div>
		</div>		
	</form>