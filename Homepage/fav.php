<!DOCTYPE html>
<html lang="en">
<head>
    <title>Favorite Pets</title>
    <link rel="stylesheet" href="fav.css">
</head>
<body>
    
 <?php include '../components/header.php';?>

<div class="fav-text">
  <h1>Favorite Pets</h1>
</div>


<!-- card 1 -->
<div class="card">
  <div class="card-left">
    <img src="../foto/kucing1.jpg" alt="Foto Kucing">
    <div class="card-info">
      <h3>Sumedang El Beraq</h3>
      <p>Pemilik: Marsha Lenathea Lapian</p>
      <p>Tipe: Kucing Kampung</p>
      <p>Umur: 5 Bulan</p>
    </div>
  </div>

  <div class="card-right-group">
    <div class="card-location">
      <img src="../foto/location.png" alt="Lokasi">
      <span>Siantan Pride</span>
    </div>

    <div class="card-buttons">
      <span class="btn btn-adopt">Adopt</span>
      <span class="btn btn-cancel">Cancel</span>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-left">
    <img src="../foto/kucing2.jpg" alt="Foto Kucing">
    <div class="card-info">
      <h3>Bobby</h3>
      <p>Pemilik: Prabowo Subianto</p>
      <p>Tipe: Kucing Planga Plongo</p>
      <p>Umur: 2 Tahun</p>
    </div>
  </div>

  <div class="card-right-group">
    <div class="card-location">
      <img src="../foto/location.png" alt="Lokasi">
      <span>Jakarta Sanak Sikit</span>
    </div>

    <div class="card-buttons">
      <span class="btn btn-adopt">Adopt</span>
      <a href="index.php"><span class="btn btn-cancel">Cancel</span></a>
    </div>
  </div>
</div>



<div class="fav-textbot">
  <h3>Ups, You have no more favorite pet! Add more pets and find your dream pets!</h3>
  <a href="catalog.php"><span class="btn-check">Check</span></a>
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