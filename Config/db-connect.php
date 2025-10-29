<?php
$connection = new mysqli("localhost", "root", "", "pawfect_match");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
