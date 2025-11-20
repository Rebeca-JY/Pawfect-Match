<?php
session_start();

// Jika belum login → redirect
if (!isset($_SESSION['user'])) {
    header("Location: login/loginn.php");
    exit();
}

$user = $_SESSION['user'];
$nama = $user['username'] ?? $user['email']; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pawfect Match - Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="container">

    <div class="top-section">
        <div class="logo">
            <span>PawFect<br>Match</span>
        </div>
        <a href="logout.php" class="close-btn">✕</a>
    </div>

    <div class="profile">
        <div class="avatar"></div>

        <!-- Tampilkan nama user -->
        <h2 class="username">
            <?php echo htmlspecialchars($nama); ?>
        </h2>
    </div>

    <div class="form-section">
        <div class="field">
            <label>Edit Nama</label>
            <input type="text">
            <button class="done-btn">Done</button>
        </div>

        <div class="field">
            <label>Tanggal Lahir</label>
            <input type="text">
            <button class="done-btn">Done</button>
        </div>

        <div class="field">
            <label>Alamat</label>
            <textarea></textarea>
            <button class="done-btn">Done</button>
        </div>
    </div>

    <div class="side-buttons">
        <button class="side-btn">🐾Favorite</button>
        <button class="side-btn">History</button>
    </div>

    <div class="logout">
        <a href="logout.php">
            <button class="logout-btn">Sign Out</button>
        </a>
    </div>

</div>

</body>
</html>
