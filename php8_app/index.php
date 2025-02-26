<?php

$host = "mariadb";
$user = "user";
$password = "userpassword";
$dbname = "mydatabase";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "We are up and running on PHP 8";