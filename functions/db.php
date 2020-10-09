<?php
//creating the database to use
$con = mysqli_connect("localhost","root","","online_form");

if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  
?>