<?php
$server = "mysql";
$user = "user";
$password = "123456";
$db = "vendingmachine";

$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
