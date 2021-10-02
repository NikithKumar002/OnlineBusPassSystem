<?php
session_start();
include 'config/db.php';

if(isset($_GET['verify_token'])){
	$verify_token = $_GET['verify_token'];
	
	$updatequery = "UPDATE registerusers SET status='active' WHERE verify_token = '$verify_token'";
	
	$query = mysqli_query($db, $updatequery);
	
	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account Updated Successfully";
			header("Location: loginpage.php");
		}else{
			$_SESSION['msg'] = "Account not updated";
			header("Location: loginpage.php");
		}
	}else{
		$_SESSION['msg'] = "Account not updated";
		header("Location: registerpage.php");
	}
}
?>