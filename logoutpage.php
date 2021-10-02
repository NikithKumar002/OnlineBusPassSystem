<?php
    session_start();
    unset($_SESSION["Email_ID"]);
    unset($_SESSION["User_ID"]);
    unset($_SESSION["First_Name"]);
    unset($_SESSION["Last_Name"]);
    header("Location:loginpage.php");
?>