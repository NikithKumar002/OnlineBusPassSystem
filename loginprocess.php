<?php
session_start();
$message = "";
// extract($_POST);
// include 'config/db.php'
if(isset($_POST['loginbtn']))
{
    if(count($_POST)>0)
    {
        include_once 'config/db.php';
        $sql=mysqli_query($db,"SELECT * FROM registerusers WHERE Email_ID='".$_POST["Email_ID"]."' and Password='".$_POST["Password"]."'");
        $row = mysqli_fetch_array($sql);
        if(is_array($row))
        {
            $_SESSION["User_ID"] = $row['User_ID'];
            $_SESSION["Email_ID"]=$row['Email_ID'];
            $_SESSION["First_Name"]=$row['First_Name'];
            $_SESSION["Last_Name"]=$row['Last_Name']; 
            header("Location: index.php"); 
        }
        else
        {
            echo "Invalid Email ID/Password";
        }
    }
}
if(isset($_POST['adminlogin'])){
if(count($_POST)>0)
{
	include_once 'config/db.php';
    $sql=mysqli_query($db,"SELECT * FROM admin WHERE Admin_ID='".$_POST["Admin_ID"]."' and Password='".$_POST["Password"]."'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Admin_ID"] = $row['Admin_ID'];
        $_SESSION["Email_ID"]=$row['Email_ID'];
        $_SESSION["Name"]=$row['Name'];
        header("Location: Admin\adminindex.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
}
?>