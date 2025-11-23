<!DOCTYPE html>
<html lang="en">
<head>
    <title>Favorite Pets</title>
    <link rel="stylesheet" href="fav.css">
</head>
<body>
    
 <?php include '../components/header.php';

  $userId = $_SESSION['user_id'];

  $query = "SELECT h.* FROM hewan_user h
          JOIN favorite f ON h.id = f.hewan_id
          WHERE f.user_id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $result = $stmt->get_result();
 ?>
 

<div class="fav-text">
  <h1>Favorite Pets</h1>
</div>

<?php while ($row = $result->fetch_assoc()): ?>
<div class="card">

  <div class="card-left">
    <img src="../foto/<?= $row['gambar1'] ?>" alt="">
    <div class="card-info">
      <h3><?= $row['nama_pengirim'] ?></h3>
      <p><?= mb_strimwidth($row['deskripsi_hewan'], 0, 40, '...'); ?></p>
    </div>
  </div>

  <div class="card-right-group">
    <div class="card-location">
      <img src="../foto/location.png" alt="Lokasi">
      <span><?= $row['alamat'] ?></span>
    </div>

    <div class="card-buttons">
      <a href="../payment/metode.html"><span class="btn btn-adopt">Adopt</span></a>
      <a href="delete-fav.php?id=<?= $row['id'] ?>" 
      onclick="return confirm('Apakah kamu yakin ingin menghapus dari favorite?')"class="delete-btn">Cancel
</a>
      </a>
    </div>
  </div>

</div>
<?php endwhile; ?>





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