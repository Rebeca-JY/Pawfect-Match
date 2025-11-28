<?php
$conn = new mysqli("localhost", "root", "", "pawfect-match");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
