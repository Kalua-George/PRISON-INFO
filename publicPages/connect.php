<?php
// Database connection
$host = 'localhost';  
$dbname = 'prison_database'; 
$username = 'root';  
$password = '';        

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    echo 'Connection failed: ' . $conn->connect_error;
} 
?>
