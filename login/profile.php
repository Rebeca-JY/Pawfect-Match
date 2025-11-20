<?php
session_start();
<<<<<<< HEAD

// Jika belum login → redirect
if (!isset($_SESSION['user'])) {
    header("Location: login/loginn.php");
    exit();
}

$user = $_SESSION['user'];
$nama = $user['username'] ?? $user['email']; 
=======
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
>>>>>>> 9f49fe91022fe8a93de491dd2f6ed66f4a49a7c7
?>

<!DOCTYPE html>
<html lang="id">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <title>Pawfect Match - Profile</title>
=======
    <title>PawFect Match - Profile</title>
>>>>>>> 9f49fe91022fe8a93de491dd2f6ed66f4a49a7c7
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<<<<<<< HEAD
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
=======
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
>>>>>>> 9f49fe91022fe8a93de491dd2f6ed66f4a49a7c7
            <input type="text">
            <button class="done-btn">Done</button>
        </div>

<<<<<<< HEAD
        <div class="field">
            <label>Tanggal Lahir</label>
=======
        <label>Tanggal Lahir</label>
        <div class="input-group">
>>>>>>> 9f49fe91022fe8a93de491dd2f6ed66f4a49a7c7
            <input type="text">
            <button class="done-btn">Done</button>
        </div>

<<<<<<< HEAD
        <div class="field">
            <label>Alamat</label>
=======
        <label>Alamat</label>
        <div class="input-group">
>>>>>>> 9f49fe91022fe8a93de491dd2f6ed66f4a49a7c7
            <textarea></textarea>
            <button class="done-btn">Done</button>
        </div>
    </div>

<<<<<<< HEAD
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

=======
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

>>>>>>> 9f49fe91022fe8a93de491dd2f6ed66f4a49a7c7
</body>
</html>
