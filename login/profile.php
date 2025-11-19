<?php
session_start();
include '../Config/db-connect.php';

// Cek login
if (!isset($_SESSION['user_id'])) {
    header("Location: loginn.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Ambil nama user
$query = mysqli_query($conn, "SELECT name FROM users WHERE id='$user_id'");
$data = mysqli_fetch_assoc($query);
$name = $data['name'] ?? "User";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>PawFect Match - Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="profile-card">

    <div class="header">
        <div class="logo"><h2>PawFect<br>Match</h2></div>
        <button class="close-btn">&times;</button>
    </div>

    <div class="profile-info">
        <div class="avatar"></div>
        <h2><?= htmlspecialchars($name); ?></h2>
    </div>

    <div class="form-section">
        <label>Edit Nama</label>
        <div class="input-group">
            <input type="text">
            <button class="done-btn">Done</button>
        </div>

        <label>Tanggal Lahir</label>
        <div class="input-group">
            <input type="text">
            <button class="done-btn">Done</button>
        </div>

        <label>Alamat</label>
        <div class="input-group">
            <textarea></textarea>
            <button class="done-btn">Done</button>
        </div>
    </div>

    <div class="button-section">
        <button class="fav-btn">Favorite</button>
        <button class="history-btn">History</button>
    </div>

    <form method="post" action="signout.php">
        <button class="signout-btn">Sign Out</button>
    </form>

</div>

<script>
document.querySelector(".close-btn").addEventListener("click", () => {
    window.location.href = "/index.php"; 
});
</script>

</body>
</html>
