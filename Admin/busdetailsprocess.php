<?php
include 'config/db.php';

if(isset($_POST['addbtn'])){
	$Bus_No = mysqli_real_escape_string($db, $_POST["bus_number"]);
	$startstop =  mysqli_real_escape_string($db, $_POST["strstop"]);
	$endstop =  mysqli_real_escape_string($db, $_POST["endstop"]);
	$onestop =  mysqli_real_escape_string($db, $_POST['onestop']);
	$secondstop =  mysqli_real_escape_string($db, $_POST['secondstop']);
	$threestop =  mysqli_real_escape_string($db, $_POST['threestop']);
	$fourstop =  mysqli_real_escape_string($db, $_POST['fourstop']);
	$fivestop =  mysqli_real_escape_string($db, $_POST['fivestop']);
	$sixstop =  mysqli_real_escape_string($db, $_POST['sixstop']);
	$sevenstop =  mysqli_real_escape_string($db, $_POST['sevenstop']);
	$eightstop =  mysqli_real_escape_string($db, $_POST['eightstop']);
	$ninestop =  mysqli_real_escape_string($db, $_POST['ninestop']);
	$tenstop =  mysqli_real_escape_string($db, $_POST['tenstop']);
	$Frequency =  mysqli_real_escape_string($db, $_POST['frequency']);
	$StartTime =  mysqli_real_escape_string($db, $_POST['start']);
	$EndTime =  mysqli_real_escape_string($db, $_POST['last']);
	
	
	$query = "INSERT INTO busdetails (Bus_No, startstop, endstop, StartTime, EndTime, Frequency, onestop, secondstop, threestop, fourstop, fivestop, sixstop, sevenstop, eightstop, ninestop, tenstop) VALUES ('$Bus_No', '$startstop', '$endstop', '$StartTime', '$EndTime', '$Frequency', '$onestop', '$secondstop', '$threestop', '$fourstop', '$fivestop', '$sixstop', '$sevenstop', '$eightstop', '$ninestop', '$tenstop')";
	$query_run = mysqli_query($db, $query);
	
	if($query_run){
		// echo "Account Created Successfully";
		$_SESSION['success'] = "Bus Details Added Succesfully";
		header('Location: detailsbus.php');
	}else{
		$_SESSION['status'] = "Bus Details Not Added";
		header('Location: detailsbus.php');
		// echo "Not Saved";
	}
}

if(isset($_POST['updatebtn'])){
	$Bus_No = mysqli_real_escape_string($db, $_POST["bus_number"]);
	$startstop =  mysqli_real_escape_string($db, $_POST["strstop"]);
	$endstop =  mysqli_real_escape_string($db, $_POST["endstop"]);
	$onestop =  mysqli_real_escape_string($db, $_POST['onestop']);
	$secondstop =  mysqli_real_escape_string($db, $_POST['secondstop']);
	$threestop =  mysqli_real_escape_string($db, $_POST['threestop']);
	$fourstop =  mysqli_real_escape_string($db, $_POST['fourstop']);
	$fivestop =  mysqli_real_escape_string($db, $_POST['fivestop']);
	$sixstop =  mysqli_real_escape_string($db, $_POST['sixstop']);
	$sevenstop =  mysqli_real_escape_string($db, $_POST['sevenstop']);
	$eightstop =  mysqli_real_escape_string($db, $_POST['eightstop']);
	$ninestop =  mysqli_real_escape_string($db, $_POST['ninestop']);
	$tenstop =  mysqli_real_escape_string($db, $_POST['tenstop']);
	$Frequency =  mysqli_real_escape_string($db, $_POST['frequency']);
	$StartTime =  mysqli_real_escape_string($db, $_POST['start']);
	$EndTime =  mysqli_real_escape_string($db, $_POST['last']);
	
	
	$query = "UPDATE busdetails SET Bus_No = '".$Bus_No."',startstop = '".$startstop."',endstop = '".$endstop."',StartTime = '".$StartTime."',EndTime = '".$EndTime."',Frequency = '".$Frequency."',onestop = '".$onestop."',secondstop = '".$secondstop."',threestop = '".$threestop."',fourstop = '".$fourstop."',fivestop = '".$fivestop."',sixstop = '".$sixstop."',sevenstop = '".$sevenstop."',eightstop = '".$eightstop."',ninestop = '".$ninestop."',tenstop = '".$tenstop."' WHERE Bus_No = '$Bus_No'";
	
	
	$query_run = mysqli_query($db, $query);
	
	if($query_run){
		$_SESSION['success'] = "Your Data is Updated";
		header('Location: detailsbus.php');
	}else{
		$_SESSION['status'] = "Your Data is Not uploaded";
		header('Location: detailsbus.php');
	}
}

if(isset($_POST['deletebtn'])){
	$Bus_No = $_POST['delete-id'];
	
	$query = "DELETE FROM busdetails WHERE Bus_No = '$Bus_No'";
	$query_run = mysqli_query($db, $query);
	
	if($query_run){
		$_SESSION['success'] = "Your Data is DELETED";
		header('Location: detailsbus.php');
	}else{
		$_SESSION['status'] = "Your Data is Not DELETED";
		header('Location: detailsbus.php');
	}
}
?>