<?php
$host = "localhost";
$email = "root";
$password = "";
$database = "bis";


$conn = new mysqli($host, $email, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>