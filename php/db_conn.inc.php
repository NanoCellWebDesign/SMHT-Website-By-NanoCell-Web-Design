<?php
$user = 'root';
$password = 'root';
$db = 'smht';
$host = 'localhost';
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}
?>
