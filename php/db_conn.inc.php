<?php
$servername = "mysql.hostinger.co.uk";
$database = "u209710757_ncwd";
$username = "u209710757_nano";
$password = "******";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
