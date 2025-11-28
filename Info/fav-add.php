<?php
require_once '../Config/db-connect.php';
session_start();

$userId = $_SESSION['user_id']; 
$hewanId = $_POST['hewan_id'];

$stmt = $conn->prepare("INSERT INTO favorite (user_id, hewan_id) VALUES (?, ?)");
$stmt->bind_param("ii", $userId, $hewanId);

if ($stmt->execute()) {
    echo "<script>alert('Berhasil ditambahkan ke favorit!'); history.back();</script>";
} else {
    echo "Error: " . $stmt->error;
}
?>
