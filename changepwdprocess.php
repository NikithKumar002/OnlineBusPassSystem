<?php
session_start();
extract($_POST);
include 'config/db.php';

if($_POST['update']){
if(count($_POST)>0){
	$result = mysqli_query($db,"SELECT *from registerusers WHERE User_ID ='" . $_SESSION['User_ID'] . "'");
	$row=mysqli_fetch_array($result);
	$Password = mysqli_real_escape_string($db, $_POST['newPassword']);
	$RePassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);
	if($_POST["currentPassword"] == $row["Password"] && $Password == $RePassword) {
		mysqli_query($db, "UPDATE registerusers SET Password = '$Password', RePassword = '$RePassword' WHERE User_ID = '" . $row['User_ID'] . "'");
		$message = "Password Changed Sucessfully";
	}else{
	 $message = "Password is not correct";
	}
}else{
	echo "no posts";
}
}
?>