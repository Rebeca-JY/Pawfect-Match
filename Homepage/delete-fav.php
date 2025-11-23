<?php
require_once '../Config/db-connect.php';
session_start();

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$hewanId = $_GET['id'];
$userId  = $_SESSION['user_id'];

// Hapus dari tabel favorite
$query = "DELETE FROM favorite WHERE hewan_id = ? AND user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $hewanId, $userId);
$stmt->execute();

header("Location: fav.php");
exit;
?>
