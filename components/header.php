<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include(__DIR__ . '/../Config/db-connect.php');
session_start();

// Cek login pakai SESSION user_id (BENAR)
$isLogin = isset($_SESSION['user_id']);
$user = $_SESSION['user'] ?? null;
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
    <!-- NAVBAR LOGIN -->
    <div class="navbar-top">
        <div class="logo-section">
            <a href="/index.php">
                <img src="../foto/pawfect.png" class="brand-logo">
            </a>
        </div>

        <div class="menu-section">
            <a href="/Homepage/fav.php">
                <img src="../foto/paww.png" class="btn-img hamburger-btn">
            </a>

            <!-- MASUK PROFILE -->
            <a href="/login/profile.php" class="profile-btn">
                <span><?= htmlspecialchars($user['name']); ?></span>
            </a>
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
    <!-- NAVBAR BELUM LOGIN -->
    <div class="navbar-top">
        <div class="logo-section">
            <a href="/Homepage/homepage.php">
                <img src="../foto/pawfect.png" class="brand-logo">
            </a>
        </div>

        <div class="menu-section">
            <a href="/fav/fav.html">
                <img src="../foto/paww.png" class="btn-img hamburger-btn">
            </a>

            <a href="/signup/signup.php" class="signup-btn"><span>Sign Up</span></a>
            <a href="/login/loginn.php" class="login-btn"><span>Log In</span></a>
        </div>    
    </div>

    <div class="navbar-bottom">
        <a href="/Homepage/cage.php"><h2>Pet cages</h2></a>
        <a href="/Homepage/dogs.php"><h2>Dogs & Puppies</h2></a>
        <a href="/Homepage/cats.php"><h2>Cats & Kittens</h2></a>
        <a href="/Homepage/food.php"><h2>Pet Foods</h2></a>
        <a href="/Homepage/toys.php"><h2>Pet Toys</h2></a>
        <a href="/Homepage/other.php"><h2>Other Pets</h2></a>
    </div>
<?php endif; ?>

</body>
</html>