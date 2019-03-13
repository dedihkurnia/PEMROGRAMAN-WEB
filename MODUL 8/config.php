<?php
  $host_NIM = "localhost";
  $user_NIM = "root";
  $password_NIM = "";
  $database_NIM = "db_NIM";
  $conn = mysqli_connect($host_NIM, $user_NIM, $password_NIM, $database_NIM);

  if (mysqli_connect_errno()){
    die("Disconnect. ".mysqli_connect_error());
  } 
?>