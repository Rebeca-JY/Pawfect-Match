<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login/loginn.php");
    exit();
}

$user = $_SESSION['user'];

$nama_tampilan = $user['username'] ?? $user['email'] ?? "Pengguna Tanpa Nama";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Match - Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="profile-card">
    
    <div class="header">
        <div class="logo"><h2>PawFect<br>Match</h2></div>
        <button class="close-btn">&times;</button>
    </div>

    <div class="profile-info">
        <div class="avatar"></div>
        <h2><?= htmlspecialchars($nama_tampilan); ?></h2>
    </div>

    <div class="form-section">
        
        <label>Edit Nama</label>
        <div class="input-group">
            <input type="text" placeholder="Masukkan Nama Baru">
            <button class="done-btn">Done</button>
        </div>

        <label>Tanggal Lahir</label>
        <div class="input-group">
            <input type="date"> <button class="done-btn">Done</button>
        </div>

        <label>Alamat</label>
        <div class="input-group">
            <textarea placeholder="Masukkan Alamat"></textarea>
            <button class="done-btn">Done</button>
        </div>
    </div>
    
    <div class="side-buttons">
        <a href= "../Homepage/fav.php"><button class="side-btn">🐾Favorite</button></a>
        <button class="side-btn">History</button>
    </div>

    <div class="logout-container">
        <a href="signout.php">
            <button class="signout-btn">Sign Out</button>
        </a>
    </div>

</div>

<script>
document.querySelector(".close-btn").addEventListener("click", () => {
    window.location.href = "/index.php"; 
});
</script>

</body>
</html>