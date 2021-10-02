<?php

  $User_ID = $_GET['User_ID'];
  // do some validation here to ensure id is safe

  $db = mysql_connect("localhost", "root", "", "onlinebussystem");
  $sql = "SELECT * FROM updateprofile WHERE User_ID=$User_ID";
  $result = mysqli_query($db, $sql);
  $row = mysql_fetch_assoc($result);
  mysql_close($db);

  header("Content-type: image/jpeg");
  echo $row['profileImage'];
?>