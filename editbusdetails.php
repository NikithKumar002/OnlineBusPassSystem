<!DOCTYPE html>
<html>
<head>
<style>
input.inputform{
    width: 50%;
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
	margin: 9px 0px 9px 0px;
}

div.formpage{
	width: 100%;
}
div.row{
	margin: 0px 330px 0px 340px;
	border: 1px solid;
	border-radius: 100px;
	box-shadow: 5px 15px 45px -5px;
	
}
div.content{
	margin: 70px 0px 0px 170px;
	width: 400px;
}
button.add{
	width: 100px;
	height: 40px;
	margin: 30px 0px 30px 300px;
}
.buttoncontainer{
	margin: 40px 0px -50px 1145px;
}
</style>
</head>
<body>
<div class="container">
<!--Edit Button-->
	<?php
	session_start();
	extract($_POST);
	include_once 'config/db.php';
	if(isset($_POST['edit_btn']))
	{
		$Bus_No = mysqli_real_escape_string($db, $_POST['edit-id']);
	
		$query = "SELECT * FROM busdetails WHERE Bus_No = '$Bus_No'";
		$query_run = mysqli_query($db, $query);
		$row = mysqli_fetch_array($query_run);

		foreach($query_run as $row)
		{
			?>
<h2 style="text-align: center;margin: 60px 0px 50px 0px;">UPDATE BUS DETAILS</h2>
<div class="row">

<div class="content">
<form action="busdetailsprocess.php" method="POST">
	<div><label for="first">First Bus is At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="time" name="start" class="inputform"style="width: 30%;height: 27px;border-radius: 9px;text-decoration: none;border: 1px solid #ccc;" value="<?php echo $row['StartTime'];?>"></div><br>	
	<div><label for="last">Last Bus is At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="time" name="last" class="inputform" style="width: 30%;height: 27px;border-radius: 9px;text-decoration: none;border: 1px solid #ccc;" value="<?php echo $row['LastTime'];?>" ></div><br>
	<div><label for="frequency">Bus Frequency :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="number_format" name="frequency" class="inputform" style="width: 30%;height: 27px;border-radius: 9px;text-decoration: none;border: 1px solid #ccc;" value="<?php echo $row['Frequency'];?>"></div><br>
	<div><label>Enter the Bus Number&nbsp;&nbsp;</label>
	<input type="text" name="bus_number" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['Bus_No'];?>"></div>	
	<div><label>Enter the Starting Stop&nbsp;</label>
	<input type="text" name="strstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['startstop'];?>"></div>
	<div><label>Enter the Ending Stop&nbsp;&nbsp;</label>
	<input type="text" name="endstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['endstop'];?>"></div>
	<div><label>Enter the 1st Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="onestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['onestop'];?>"></div>		
	<div><label>Enter the 2nd Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="secondstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['secondstop'];?>"></div>	
	<div><label>Enter the 3rd Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="threestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['threestop'];?>"></div>
	<div><label>Enter the 4th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="fourstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['fourstop'];?>"></div>
	<div><label>Enter the 5th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="fivestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['fivestop'];?>"></div>	
	<div><label>Enter the 6th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="sixstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['sixstop'];?>"></div>	
	<div><label>Enter the 7th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="sevenstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['sevenstop'];?>"></div>	
	<div><label>Enter the 8th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="eightstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['eightstop'];?>"></div>		
	<div><label>Enter the 9th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="ninestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['ninestop'];?>"></div>
	<div><label>Enter the 10th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="tenstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;" value="<?php echo $row['tenstop'];?>"></div>
	<a href="detailsbus.php"> CANCEL </a>
	<button class="add" name="updatebtn"> UPDATE </button>
</form>
</div>
</div>
	<?php
		}
	}
?>	
</div>
</body>
</html>