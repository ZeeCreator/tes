<?php
$servername = "db"; // sesuai nama service docker-compose
$username = "user";
$password = "pass";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL!";
