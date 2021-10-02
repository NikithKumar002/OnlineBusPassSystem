<?php
include_once 'config/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/onlinepassdetails.css">

</head>
<body>
<nav class="nav-bar" style="height: 50px;	background-color: #778899;">
	<ul><li><a class="" href="adminindex.php"><i class="fa fa-home" style="font-size:20px"></i>Home</a></li></ul>
	<ul><li><a href="adminprofile.php">Admin Details</a></li></ul>
	<ul><li><div class="inline"><a href="">User Details</a>
	<ul><div class="none"><span><a href="">Online Users</a></span>
	<span><a href="adminregister.php">Offline Users</a></span></ul></div></div></li></ul>
	<ul><li><a href="detailsbus.php">Bus Details</a></li></ul>
	<ul><li><div class="inline"><a href="">Pass Details</a>
	<ul><div class="none"><span><a href="onlinepassdetails.php">Online Pass Details</a></span>
	<span><a href="createofflinepass.php">Offline Pass Details</a></span></ul></div></div></li></ul>
	<ul><li><a href="adminlogout.php">Logout</a></li>
	</ul>
</nav>
<div class="page">
<?php
	
	$query = "SELECT * FROM passdetails";
	$query_run = mysqli_query($db, $query);
	
?>
<div class="tablecontainer">
<div>
<table>
<thead>
	<tr>
		<th>S.No</th>
		<th>USER ID</th>
		<th>PASS ID</th>
		<th>Create On</th>
		<th>Expiry Date</th>
		<th>Validity</th>
		<th>View</th>
		<th>Repass</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>
<?php
	if(mysqli_num_rows($query_run)>0)
	{
		while($row=mysqli_fetch_assoc($query_run))
		{
			$today = strtotime(date('Y-m-d H:i:s'));
			$expiry = strtotime($row['Expiry']);
	?>
	<tr>
		<th><?php echo $row['ID'];?></th>
		<th><?php echo $row['User_ID'];?></th>
		<th><?php echo $row['Pass_ID'];?></th>
		<th><?php echo $row['Date'];?></th>
		<th><?php echo $row['Expiry'];?></th>
		<th><?php if($today >= $expiry){
				echo "Expired";
			}else{
				echo "Active";
			}?></th>
		<th>			    
		  <form action="" method="POST">
		    <input type="hidden" name="view-id" value="<?php echo $row['Pass_ID']?>">
			<button type="submit" name="view_btn" class="viewbtn">VIEW</button></form>
		</th>
		<th>			    
		  <form action="" method="POST">
		    <input type="hidden" name="edit-id" value="<?php echo $row['Pass_ID']?>">
			<button type="submit" name="edit_btn" class="editbtn">RENEWAL</button></form>
		</th>
		<th>			    
		  <form action="" method="POST">
		    <input type="hidden" name="delete-id" value="<?php echo $row['Pass_ID']?>">
			<button type="submit" name="deletebtn" class="deletebtn">DELETE</button></form>
		</th>
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