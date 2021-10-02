<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags -->
<meta charset= "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>BUS PASS REGISTRATION</title>

    <!-- CSS Links -->
<style>
body {
  background-image: url('images/auto-2583230_1920.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  background-size: 1366px 790px;
}
body {
	background-size: cover;	
	background-color: #4d4d4d;
}
.center {
	text-align: center;
}
div.booking-form-box {
	max-width: 700px;
	margin: 80px 0px 20px 850px;
	margin-right: 276px;
}
#login {
	height: 300px;
}

.customerlogin {
	height: 330px;
	padding: 1px 20px 0px 22px;
	border: none;
	border-radius: 10px;
	font-family: Arial, Helvetica, sans-serif;
	border: none;
	border-radius: 10px;
	display: none;
	width: 270px;
}
.adminlogin{
	height: 330px;
	padding: 1px 20px 0px 22px;
	border: none;
	border-radius: 10px;
	font-family: Arial, Helvetica, sans-serif;
	border: none;
	border-radius: 10px;
	display: none;
	width: 270px;
}
input[type=text], input[type=password], input[type=email]{
  width: 100%;
  background-color: white;
  padding: 9px 15px 9px 15px;
  margin: 9px 0px 9px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.btn-sub {
	width: 100%;
	margin-right: 5px;
}
div.btn-register {
	padding: 8px 0px 0px 0px;
	width: 210px;
}
#btn-register {
	width: 100%;
	height: 15.5;
	float: left;
	display: inline;
	background-color: white;
	color: #4d4d4d;
	padding: 8px 10px 8px 10px;
	margin: 7px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	text-transform: UPPERCASE;
}
#btn-sub {
	width: 100%;
	float: left;
	color: #4d4d4d;
	padding: 8px 10px 8px 10px;
	margin: 7px 0;
	border: none;
	border-radius: 4px;
    cursor: pointer;
}
div.btn button.ctmrlogin:hover{
	background-color: gray;
	text-color: black;
}
button.ctmrlogin{
	position: relative;
    left: 860px;
    top: 80px;
    border: 2px solid;
    padding: 10px 10px;
    border-radius: 50px;
    text-decoration: none;
    color: black;
    background-color: transparent;
}
div.btn button.admbtn:hover{
	background-color: gray;
	text-color: black;
}
button.admbtn{
	position: relative;
    left: 1060px;
    top: 120px;
    border: 2px solid;
    padding: 10px 10px;
    border-radius: 50px;
    text-decoration: none;
    color: black;
    background-color: transparent;
}
</style>
</head>
<body>
<h1 class="center"> ONLLINE BUS PASS SYSTEM </h1>
<div class="booking-form-box">
	<div class="customerlogin" id="customerlogin">
		<a href="" onclick="closeForm()"><img src="images/close.png" alt="close" class="close" style="width:20px;height:20px;margin-left:250px;"></a>
	<h3 class="center"> CUSTOMER LOGIN </h3>
	<form method="post" id="login" action="">
		<div>
			<input type="text" name="Email_ID" id="Email_ID" required="required" placeholder="Email_ID"><br><br>
		</div>
		<div>
			<input type="password" name="Password" id="Password" required="required" placeholder="Password"><br><br>
		</div>
		<div>
			<label id="checkbox"><input type="checkbox"> Remember me </label><br>
		</div>
		<div class="btn-sub col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<button type="submit" name="loginbtn" id="btn-sub"> LOGIN </button>
		</div>
		<div class="btn-register">
			<span class="span">Not Yet Member?<a href="registrationform.php"> REGISTER </a></span>
		</div>
	</form>
	</div>
	<div class="adminlogin" id="adminlogin">
	<a href="" onclick="closeForm()"><img src="images/close.png" alt="close" class="close" style="width:20px;height:20px;margin-left:250px;"></a>
	<h3 class="center"> ADMIN LOGIN </h3>
	<form method="post" id="login" action="">
	<div>
		<input type="text" name="userid" id="name" placeholder="Admin ID"><br><br>		
	</div>
	<div>
		<input type="password" name="pwd" id="name" placeholder="Password"><br><br>
	</div>
	<div>
		<label id="checkbox"><input type="checkbox"> Remember me</label><br>
	</div>
	<div class="btn-sub col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<button type="submit" id="btn-sub"> LOGIN </button>
	</div>
	</form>
	</div>
</div>



<div class="btn">
<button class="admbtn" id="admbtn" onclick="openForm()"> ADMIN LOGIN </button>

</div>
<div class="btn">
<button class="ctmrlogin" id="ctmrlogin" onclick="openForm1()"> CUSTOMER LOGIN </button>
</div>
<script>
function openForm1(){
	document.getElementById("customerlogin").style.display = "block";
	document.getElementById("ctmrlogin").style.display = "none";
	document.getElementById("admbtn").style.display = "none";
}
function closeForm(){
  document.getElementById("customerlogin").style.display = "none";
}
function openForm(){
	document.getElementById("adminlogin").style.display = "block";
	document.getElementById("admbtn").style.display = "none";
	document.getElementById("ctmrlogin").style.display = "none";
}
function closeForm(){
  document.getElementById("adminlogin").style.display = "none";
}
</script>
</body>
</html>