<?php
include_once 'config/db.php';
session_start();
	$query = "SELECT * FROM busdetails";
	$query_run = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>BUS DETAILS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/detailsbus.css">
</head>
<body style="height: 620px">

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


<div class="popup" id="popup">
<div class="popup-content" id="popup-content">
<h2 style="text-align: center;margin: 30px 55px 30px 0px;">Enter BUS DETAILS</h2>
<img src="images/close.png" onclick="closeForm()" alt="close" class="close" style="width:10px;">
<form action="busdetailsprocess.php" method="POST">
	<div><label for="first">First Bus is At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="time" name="start" class="inputform"style="width: 30%;height: 27px;border-radius: 9px;text-decoration: none;border: 1px solid #ccc;"></div><br>	
	<div><label for="last">Last Bus is At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="time" name="last" class="inputform" style="width: 30%;height: 27px;border-radius: 9px;text-decoration: none;border: 1px solid #ccc;"></div><br>
	<div><label for="frequency">Bus Frequency :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="number_format" name="frequency" class="inputform" style="width: 30%;height: 27px;border-radius: 9px;text-decoration: none;border: 1px solid #ccc;"></div><br>
	<div><label>Enter the Bus Number&nbsp;&nbsp;</label>
	<input type="text" name="bus_number" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>	
	<div><label>Enter the Starting Stop&nbsp;</label>
	<input type="text" name="strstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>
	<div><label>Enter the Ending Stop&nbsp;&nbsp;</label>
	<input type="text" name="endstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>
	<div><label>Enter the 1st Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="onestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>		
	<div><label>Enter the 2nd Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="secondstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>	
	<div><label>Enter the 3rd Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="threestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>
	<div><label>Enter the 4th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="fourstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>
	<div><label>Enter the 5th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="fivestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>	
	<div><label>Enter the 6th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="sixstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>	
	<div><label>Enter the 7th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="sevenstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>	
	<div><label>Enter the 8th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="eightstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>		
	<div><label>Enter the 9th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="ninestop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>
	<div><label>Enter the 10th Stop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="tenstop" class="inputform" style="width: 50%;height: 25px;border:1px solid #ccc;border-radius: 5px;margin: 9px 0px 9px 0px;"></div>
	<button class="add" name="addbtn"> ADD </button>
</form>
</div>
</div>
	


<div class="buttoncontainer">
<h2 style="margin: 150px 0px 0px 10px;"> BUS DETAILS </h2>
	<a href="" class="button" id="button" onclick="openForm()"> ADD BUS DETAILS </a>
</div>


<div class="infotable">
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
<?php
	$query = "SELECT * FROM busdetails";
	$query_run = mysqli_query($db, $query);
?>
<div class="tablecontainer" style="margin-top: 100px;">
<div class="table">
<table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;border-color: inherit;border-style: solid;margin-top: 35px;">
	<thead>
	<tr>
		<th>S.No</th>
		<th>Bus Number</th>
		<th>Starts At</th>
		<th>First Bus is At</th>
		<th>Final Stop</th>
		<th>Last Bus is At</th>
		<th>Halt</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
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
			<td><?php echo $row['Bus_No'];?></td>
			<td><?php echo $row['startstop'];?></td>
			<td><?php echo $row['StartTime'];?></td>
			<td><?php echo $row['endstop'];?></td>
			<td><?php echo $row['EndTime'];?></td>
			<td><?php echo $row['Frequency'];?></td>
			<td>
			    <form action="viewbuses.php" method="POST">
			    <input type="hidden" name="view-id" value="<?php echo $row['Bus_No']?>">
				<button type="submit" name="view_btn" class="editbtn">View</button></form>
			</td>			
			<td>
			    <form action="editbusdetails.php" method="POST">
			    <input type="hidden" name="edit-id" value="<?php echo $row['Bus_No']?>">
				<button type="submit" name="edit_btn" class="editbtn">EDIT</button></form>
			</td>
			<td>
				<form action="busdetailsprocess.php" method="POST">
				<input type="hidden" name="delete-id" value="<?php echo $row['Bus_No']?>">
				<button type="submit" name="deletebtn" class="delete_btn">DELETE</button></form>
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
<!--Script Tags-->
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