<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'discuss_project';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die('db not connected' . $conn->connect_error);
}
