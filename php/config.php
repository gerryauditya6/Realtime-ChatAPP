<?php
  $hostname = "localhost";
  $username = "admin";
  $password = "Komplikasibegal6@";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
