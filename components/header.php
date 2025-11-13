<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include(__DIR__ . '/../Config/db-connect.php');
session_start();

// Cek apakah user sudah login
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $isLogin = true;
} else {
    $user = null;
    $isLogin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Match Header</title>
    <link rel="stylesheet" href="../components/header.css">
</head>
<body>

<?php if ($isLogin): ?>
    <div class="navbar-top">
        <div class="logo-section">
            <a href="/Homepage/homepage.php">
                <img src="../foto/pawfect.png" alt="Pawfect-Match" class="brand-logo">
            </a>
        </div>

        <div class="menu-section">
            <a href="/Homepage/fav.php">
                <img src="../foto/paww.png" alt="Hamburger Menu" class="btn-img hamburger-btn">
            </a>
            <!-- Contoh menampilkan email user jika sudah login -->
            <!-- <span style="color: white; font-size: larger;"><?= htmlspecialchars($user['email'] ?? '') ?></span> -->
            <a href="/logout/logout.php" class="logout-btn"><span>Log Out</span></a>
        </div>
    </div>

    <div class="navbar-bottom">
        <a href="/Homepage/cages.php"><h2>Pet cages</h2></a>
        <a href="/Homepage/dogs.php"><h2>Dogs & Puppies</h2></a>
        <a href="/Homepage/cats.php"><h2>Cats & Kittens</h2></a>
        <a href="/Homepage/food.php"><h2>Pet Foods</h2></a>
        <a href="/Homepage/toys.php"><h2>Pet Toys</h2></a>
        <a href="/Homepage/other.php"><h2>Other Pets</h2></a>
    </div>

<?php else: ?>
    <div class="navbar-top">
        <div class="logo-section">
            <a href="/Homepage/homepage.html">
                <img src="../foto/pawfect.png" alt="Pawfect-Match" class="brand-logo">
            </a>
        </div>

        ...
<div class="menu-section">
    <a href="/fav/fav.html">
        <img src="../foto/paww.png" alt="Hamburger Menu" class="btn-img hamburger-btn">
    </a>
            <a href="/signup/signup.php" class="signup-btn"><span>Sign Up</span></a>
            <a href="/login/loginn.php" class="login-btn"><span>Log In</span></a>
        </div>    
    </div>

    <div class="navbar-bottom">
        <a href="/cage/cage.html"><h2>Pet cages</h2></a>
        <a href="/Dogs/dogs.html"><h2>Dogs & Puppies</h2></a>
        <a href="/Cats/cats.html"><h2>Cats & Kittens</h2></a>
        <a href="/Foods/food.html"><h2>Pet Foods</h2></a>
        <a href="/toys/toys.html"><h2>Pet Toys</h2></a>
        <a href="/other/other.html"><h2>Other Pets</h2></a>
    </div>
<?php endif; ?>

</body>
</html>
