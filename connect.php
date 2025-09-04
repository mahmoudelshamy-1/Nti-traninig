<?php
$host = "localhost" ;
$user = "root" ;
$pass = ""; 
$db   = "test_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die(" error " . mysqli_connect_error());

 echo "successful";
}
