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
	<link rel="stylesheet" href="css/adminonlineregister.css">
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
<div class="container" style="margin: 150px 0px 0px 0px;">

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

<div class="row">
	<?php
		
		$query = "SELECT * FROM registerusers";
		$query_run = mysqli_query($db, $query);
		
	?>
	<div class="formpage">
	<h2 style="margin: 112px 0px 0px 20px;text-transform:UPPERCASE;"> User Details </h2>
	<table>
		<thead>
		<tr>
			<th>ID</th>
			<th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email ID</th>
			<th>View</th>
			<th>EDIT</th>
			<th>DELETE</th>
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
				<td><?php echo $row['User_ID'];?></td>
				<td><?php echo $row['First_Name'];?></td>
				<td><?php echo $row['Last_Name'];?></td>
				<td><?php echo $row['Email_ID'];?></td>
				<td>
					<form action="" method="POST">
					<input type="hidden" name="view-id" value="<?php echo $row['User_ID']?>">
					<button type="submit" name="view_btn" class="editbtn">VIEW</button></form>
				</td>			  
				<td>
					<form action="" method="POST">
					<input type="hidden" name="edit-id" value="<?php echo $row['User_ID']?>">
					<button type="submit" name="edit_btn" class="editbtn">EDIT</button></form>
				</td>
				<td>
					<form action="" method="POST">
					<input type="hidden" name="delete-id" value="<?php echo $row['User_ID']?>"><button type="submit" name="deletebtn" class="delete_btn">DELETE</button></form>
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