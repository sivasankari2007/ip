<?php

$host = "localhost";
$username = "root";
$password = "Srim@thi2004";
$database = "portfolio_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

?>