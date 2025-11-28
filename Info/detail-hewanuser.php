<?php
require_once '../Config/db-connect.php';

$hewanId = $_GET['id'];

// ambil data dari tabel hewan_user
$query = 'SELECT * FROM hewan_user WHERE id = ?';
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $hewanId);
$stmt->execute();
$result = $stmt->get_result();
$hewan = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pawfect-Match</title>
    <link rel="stylesheet" href="mainecoon.css">
</head>
<body>

<?php include '../components/header.php'; ?>

<div class="main-content-wrapper">
    <div class="adoption-card">

        <form action="fav-add.php" method="POST">
         <input type="hidden" name="hewan_id" value="<?= $hewan['id']; ?>">
         <button type="submit" class="fav-btn">♥</button>
        </form>


        <!-- Gambar 1 -->
        <img src="/foto/<?= $hewan['gambar1'] ?>" 
             alt="<?= $hewan['nama_pengirim'] ?>" 
             class="cat-image">

        <div class="card-content">
            <div class="text-content">

                <h1><?= $hewan['nama_pengirim'] ?></h1>

                <p><strong>Alamat: </strong><?= $hewan['alamat'] ?></p>
                <p><strong>No HP: </strong><?= $hewan['no_hp'] ?></p>

                <p><strong>Deskripsi Hewan:</strong></p>
                <p class="description"><?= $hewan['deskripsi_hewan'] ?></p>

                <!-- Jika ingin menampilkan gambar lain -->
                <?php if ($hewan['gambar2']) : ?>
                    <img src="/<?= $hewan['gambar2'] ?>" class="cat-image">
                <?php endif; ?>

                <?php if ($hewan['gambar3']) : ?>
                    <img src="/<?= $hewan['gambar3'] ?>" class="cat-image">
                <?php endif; ?>

                <?php if ($hewan['gambar4']) : ?>
                    <img src="/<?= $hewan['gambar4'] ?>" class="cat-image">
                <?php endif; ?>

            </div>

            <div class="button-container">
                <a href="../../payment/metode.html"><button class="btn btn-adopt">Adopt</button></a>
                <a href="../Homepage/catalog.php"><button class="btn btn-cancel">Cancel</button></a>
            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-content">

        <div class="footer-top">
            <div class="footer-logo">
                <img src="../../foto/paw.png" alt="Pawfect Match Logo">
            </div>

            <div class="footer-chart">
                <img src="../../foto/statistic.png" alt="Statistics">
            </div>
        </div>

        <div class="footer-links">
            <h2>Company</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>

        <div class="footer-members">
            <h2>Member</h2>
            <ul>
                <li>Deven</li>
                <li>Lionel</li>
                <li>Rebeca</li>
            </ul>
        </div>

        <div class="footer-social">
            <h4>Social Media</h4>
            <div class="social-icons">
                <a href="#"><img src="../../foto/wa.png" alt="WhatsApp"></a>
                <a href="#"><img src="../../foto/ig.png" alt="Instagram"></a>
                <a href="#"><img src="../../foto/tt.png" alt="TikTok"></a>
                <a href="#"><img src="../../foto/tele.png" alt="Telegram"></a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2025 PawFect-Match</p>
    </div>
</footer>

</body>
</html>
