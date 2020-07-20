<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'myforumdb';

$conn = mysqli_connect($server, $username, $password, $db);
if ($conn->connect_error) {
    die('Connection failed: '. $conn->connect_error);
}
?>
