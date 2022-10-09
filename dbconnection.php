<?php
$user = 'root';
$pass = '';
$db = 'mycollege';
$server = 'localhost';

$conn = mysqli_connect($server, $user, $pass, $db);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
