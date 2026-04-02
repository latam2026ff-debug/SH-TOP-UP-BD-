<?php
// Database configuration settings
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; // update with your password
$db_name = 'ff_topup';

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>