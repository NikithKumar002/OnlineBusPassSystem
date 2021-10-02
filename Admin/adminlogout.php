<?php
    session_start();
    unset($_SESSION["Email_ID"]);
    unset($_SESSION["Admin_ID"]);
    unset($_SESSION["Name"]);
    header("Location:\Project\loginpage.php");
?>