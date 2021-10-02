<?php
include_once 'config/db.php';

if(isset($_POST['createbtn'])){
	$User_ID = mysqli_real_escape_string($db, $_POST['userid'] ?? "");
	$BusNo = mysqli_real_escape_string($db, $_POST['BusNo']);
	$Start = mysqli_real_escape_string($db, $_POST['Start']);
	$Stop = mysqli_real_escape_string($db, $_POST['Stop']);
	$option = mysqli_real_escape_string($db, $_POST['option']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	if(!empty($BusNo) && !empty($Start) && !empty($Stop) && !empty($option) && !empty($price))
	{
		$duplicate=mysqli_query($db,"select * from passdetails where User_ID='$User_ID'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo "Pass Id is already created!";
			header("location: Createpass.php");
		}else{
			function create_passid($length)
			{
				$text = "";
				if($length < 5)
				{
					$length = 5;
				}
				$len = rand(4, $length);
				for($i=0; $i < $len; $i++) {
					$text .= rand(0,9);
				}
				return $text;
			}
			$Pass_ID = create_passid(4);
			$startdate = date('Y-m-d H:i:s');
			$enddate = date('Y-m-d H:i:s');
			if($price=="300"){
				$enddate = date('Y-m-d H:i:s', strtotime($enddate."+1 months") ?? "");
			}elseif($price=="850"){
				$enddate = date('Y-m-d H:i:s', strtotime($enddate."+3 months") ?? "");
			}elseif($price=="1600"){
				$enddate = date('Y-m-d H:i:s', strtotime($enddate."+6 months") ?? "");
			}else{
				$enddate = date('Y-m-d H:i:s', strtotime($enddate."+12 months") ?? "");
			}
			$sql = "INSERT INTO passdetails (User_ID, Pass_ID, busno, start, end, option, price, Date, Expiry) VALUES ('$User_ID', '$Pass_ID', '$BusNo', '$Start', '$Stop', '$option', '$price', '$startdate', '$enddate')";
			if(mysqli_query($db, $sql)){
				echo "New record created!";
			}else{
				echo "Error: ".$sql."".mysqli_error($db);
			}
			mysqli_close($db);
		}
	}
}

?>