<?php
$host = "localhost";
$user = "root"; // Change if you have a different username
$password = "alex"; // Change if you have a database password
$database = "student_management";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
