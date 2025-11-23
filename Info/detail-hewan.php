<?php
require_once '../Config/db-connect.php';

$hewanId = $_GET['id'];


$query = 'SELECT * from hewan where id = ?';

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
      <?php include '../components/header.php';?>


<!-- Isi -->
<div class="main-content-wrapper">
  <div class="adoption-card">
        <!-- Favorite icon -->
         
    <form action="fav-add.php" method="POST">
        <input type="hidden" name="hewan_id" value="<?= $hewan['id']; ?>">
        <button type="submit" class="fav-btn">♥</button>
    </form>


      <img src="/<?= $hewan['gambar']?>" alt="<?= $hewan['nama']?>" class="cat-image">

      <div class="card-content">
          <div class="text-content">
              <h1>
                <?= $hewan['nama']?>
              </h1>
              <p><strong>Pemilik: </strong><?= $hewan['pemilik']?></p>
              <p><strong>Type: </strong><?= $hewan['tipe']?></p>
              <p><strong>Age: </strong><?= $hewan['umur']?></p>
              
              <p class="description">
                  <?= $hewan['deskripsi']?>
              </p>
          </div>

          <div class="button-container">
              <a href="../../payment/metode.html"><button class="btn btn-adopt">Adopt</button></a>
              <a href="../Homepage/catalog.php"><button class="btn btn-cancel">Cancel</button></a>
          </div>
      </div>
  </div>
</div>












<!-- footer -->

<footer class="footer">
  <div class="footer-content">
    
    <div class="footer-top">
  <!-- Logo -->
  <div class="footer-logo">
    <img src="../../foto/paw.png" alt="Pawfect Match Logo">

  </div>

  <!-- Chart -->
  <div class="footer-chart">
    <img src="../../foto/statistic.png" alt="Statistics">
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
        <a href="#"><img src="../../foto/wa.png" alt="WhatsApp"></a>
        <a href="#"><img src="../../foto/ig.png" alt="Instagram"></a>
        <a href="#"><img src="../../foto/tt.png" alt="TikTok"></a>
        <a href="#"><img src="../../foto/tele.png" alt="Telegram"></a>
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