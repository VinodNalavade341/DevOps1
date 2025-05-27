<?php
session_start(); // Make sure it's the first line

define('SITEURL', 'http://localhost/'); // or your actual domain

// Use correct DB credentials for Docker
$conn = mysqli_connect('db', 'food_user', 'food_pass', 'food_ordering');

// Add connection check (optional)
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
