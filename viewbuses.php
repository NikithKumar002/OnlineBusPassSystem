<?php
include_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BUS INFORMATION</title>
<link rel="stylesheet" href="css\viewbuses.css">
</head>
<body>
<div>
<?php
session_start();
extract($_POST);
	$busid = mysqli_real_escape_string($db, $_POST['view-id']);
	$query = "SELECT * FROM busdetails WHERE Bus_No = '$busid'";
	$query_run = mysqli_query($db, $query);
	$row=mysqli_fetch_assoc($query_run);
	
?>
<div>
<div>
<h1 style="text-align: center;"> BUS INFORMATION </h1>
<a href="BusDetails.php">BACK</a>
<table><tr><th  style="border-bottom: none;border-bottom-color: white;text-align: center;">Bus Number <?php echo $row['Bus_No'];?> - Route Details<br>
First Bus is at : <?php echo $row['startstop'];?>	-	 Last Bus is at : <?php echo $row['endstop'];?>    -     Bus Frequency : <?php echo $row['Frequency'];?></th></tr>
</table>
<table>
<tr><th style="text-align: center;">Start At : <?php echo $row['StartTime'];?> With Final Stop At : <?php echo $row['EndTime'];?></th></tr>
</table>
<table>
<thead>

	<tr>
	<th>S.No</th>
	<th>Stop Names</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>1.</td>
		<td><?php echo $row['startstop'];?></td>
	</tr>	
	<tr>
		<td>2.</td>
		<td><?php echo $row['onestop'];?></td>
	</tr>	
	<tr>
		<td>3.</td>
		<td><?php echo $row['secondstop'];?></td>
	</tr>	
	<tr>
		<td>4.</td>
		<td><?php echo $row['threestop'];?></td>
	</tr>	
	<tr>
		<td>5.</td>
		<td><?php echo $row['fourstop'];?></td>
	</tr>	
	<tr>
		<td>6.</td>
		<td><?php echo $row['fivestop'];?></td>
	</tr>	
	<tr>
		<td>7.</td>
		<td><?php echo $row['sixstop'];?></td>
	</tr>	
	<tr>
		<td>8.</td>
		<td><?php echo $row['sevenstop'];?></td>
	</tr>	
	<tr>
		<td>9.</td>
		<td><?php echo $row['eightstop'];?></td>
	</tr>	
	<tr>
		<td>10.</td>
		<td><?php echo $row['ninestop'];?></td>
	</tr>	
	<tr>
		<td>11.</td>
		<td><?php echo $row['tenstop'];?></td>
	</tr>	
	<tr>
		<td>12.</td>
		<td><?php echo $row['endstop'];?></td>
	</tr>	
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>