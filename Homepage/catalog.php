<?php
require_once '../Config/db-connect.php';

$query = 'select * from hewan';

$daftarHewan = [];

$stmt = $conn->prepare($query);
$stmt->execute();

$results = $stmt->get_result();

while ($hewan = $results->fetch_assoc()) {
  $daftarHewan[] = $hewan;
}

$result = $conn->query("SELECT nama_pengirim, deskripsi_hewan, gambar1 FROM hewan_user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pawfect-Match</title>
    <link rel="stylesheet" href="catalog.css">

</head>
<body>
  <?php include '../components/header.php';?>
<div class="search-bar">
  <!-- Logo + Judul -->
  <div class="logo-title">
    <img src="../foto/logohitam.png" alt="Cat Logo" class="logo-img">
    <h2>Pets</h2>
  </div>

  <!-- Input + Tombol -->
  <div class="search-box">
    <input type="text" placeholder="What type of cat do you want?">
    <button class="search-btn">
      <img src="../foto/search.png" alt="Search">
    </button>
    <button class="send-btn"><a href="../send-data/data.php">Send Pet Data</a></button>
  </div>
</div>

<div class="card-container">
  <?php foreach($daftarHewan as $hewan):?>
    <a href="/info/detail-hewan.php?id=<?= $hewan['id']?>" class="card">
      <img src="/<?= $hewan['gambar']?>" alt="<?= $hewan['nama']?>">
      <div class="card-caption">
        <?= $hewan['nama']?>
      </div>
    </a>
  <?php endforeach?>
</div>

<?php
require_once '../Config/db-connect.php';

$query = 'select * from hewan_user';

$daftarHewan = [];

$stmt = $conn->prepare($query);
$stmt->execute();

$results = $stmt->get_result();

while ($hewan = $results->fetch_assoc()) {
  $daftarHewan[] = $hewan;
}

$result = $conn->query("SELECT nama_pengirim, deskripsi_hewan, gambar1 FROM hewan_user");

?>

<div class="card-container">
  <?php foreach($daftarHewan as $hewan):?>
    <a href="/info/detail-hewanuser.php?id=<?= $hewan['id']?>" class="card">
      <img src="../foto/<?= $hewan['gambar1']?>" alt="<?= $hewan['nama_pengirim']?>">
      <div class="card-caption">
        <?= $hewan['nama_pengirim']?>
      </div>
    </a>
  <?php endforeach?>
</div>

<!-- footer -->

<footer class="footer">
  <div class="footer-content">
    
    <div class="footer-top">
  <!-- Logo -->
  <div class="footer-logo">
    <img src="../foto/paw.png" alt="Pawfect Match Logo">

  </div>

  <!-- Chart -->
  <div class="footer-chart">
    <img src="../foto/statistic.png" alt="Statistics">
  </div>
</div>

    <!-- Company Links -->
    <div class="footer-links">
      <h2>Company</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>

    <!-- Members -->
    <div class="footer-members">
      <h2>Member</h2>
      <ul>
        <li>Deven</li>
        <li>Lionel</li>
        <li>Rebeca</li>
      </ul>
    </div>

    <!-- Social Media -->
    <div class="footer-social">
      <h4>Social Media</h4>
      <div class="social-icons">
        <a href="#"><img src="../foto/wa.png" alt="WhatsApp"></a>
        <a href="#"><img src="../foto/ig.png" alt="Instagram"></a>
        <a href="#"><img src="../foto/tt.png" alt="TikTok"></a>
        <a href="#"><img src="../foto/tele.png" alt="Telegram"></a>
      </div>
    </div>

  </div>

  <!-- Copyright -->
  <div class="footer-bottom">
    <p>© 2025 PawFect-Match</p>
  </div>
</footer>
</body>
</html>