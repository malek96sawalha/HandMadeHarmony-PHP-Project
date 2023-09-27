<?php 
$servername = 'localhost';
$dbname = 'ecommerce_project';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die('Failed to connect: ' . mysqli_connect_error());
}








?>

