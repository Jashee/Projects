<?php

$servername="localhost";
$username="root";
$password="";
$dbname="shoppings";
$conn=new mysqli($servername,$username,$password,$dbname) or die("Connection Failure:\n".$conn->connect_error);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 // echo "Connected successfully";
?>