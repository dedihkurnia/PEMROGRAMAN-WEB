<?php
  $host_1301164077 = "localhost";
  $user_1301164077 = "root";
  $password_1301164077 = "";
  $database_1301164077 = "db_1301164077";
  $conn = mysqli_connect($host_1301164077, $user_1301164077, $password_1301164077, $database_1301164077);

  if (mysqli_connect_errno()){
    die("Disconnect. ".mysqli_connect_error());
  } 
?>