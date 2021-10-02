<?php
session_start();
include_once 'config/db.php';
	$query = "SELECT * FROM busdetails";
	$query_run = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css\BusDetails.css">
</head>
<body style="height: 620px">
	<nav class="nav-bar">
		<ul><li><a href="index.php"><i class="fa fa-home" style="font-size:20px"></i>Home</a></li></ul>
		<ul><li><a href="UserDetailPage.php">My Details</a></li></ul>
		<ul><li><a href="BusDetails.php">Bus Details</a></li></ul>
		<ul><li><div class="inline"><a href="#">PASS DETAILS</a>
		<ul><div class="none"><a href="Createpass.php">Create An Pass</a>
		<a href="Repass.php">Re-New An Pass</a></div></div></li></ul></ul>
		<ul><li><a href="changepwd.php">Change Password</a></li></ul>
		<ul style="display: block;"><li><a href="logoutpage.php">Logout</a></li></ul>
	</nav>
	<div class="container">
	<h1 class="text">BUS DETAILS</h1>
	<div class="tablecontainer" style="margin-top: 40px;">
	<div class="table">
	<table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;border-color: inherit;border-style: solid;margin-top: 35px;">
		<thead>
		<tr style="background-color: brown;">
			<th>S.No</th>
			<th>Bus Number</th>
			<th>Starts At</th>
			<th>First Bus is At</th>
			<th>Final Stop</th>
			<th>Last Bus is At</th>
			<th>Halt</th>
			<th>View</th>
		</tr>
		</thead>
		<tbody>	<?php
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

</body>
</html>