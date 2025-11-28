<!DOCTYPE html>
<html lang="id">
<head> 
  <title>Pawfect-Match</title>
  <link rel="stylesheet" href="data.css">
</head>
<body>

<?php include '../components/header.php'; ?>

<div class="container">
  <h1>Send Data</h1>
  <div class="form-wrapper">
    <form class="form" method="POST" action="insert-data.php" enctype="multipart/form-data">
      <label for="nama">Nama Pengirim</label>
      <input type="text" id="nama" name="nama_pengirim" required>

      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" required>

      <label for="nohp">No HP (yang dapat dihubungi)</label>
      <input type="text" id="nohp" name="no_hp" required>

      <label for="deskripsi">Deskripsi Hewan</label>
      <textarea id="deskripsi" name="deskripsi_hewan" required></textarea>

      <div class="button-group">
        <button type="submit" class="send">Send</button>
        <button type="button" class="cancel" onclick="window.location.href='../Homepage/other.php'">Cancel</button>
      </div>

      <div class="upload-section">
        <label class="upload-box">
          + 
          <input type="file" name="gambar1" hidden>
        </label>
        <label class="upload-box">
          + 
          <input type="file" name="gambar2" hidden>
        </label>
        <label class="upload-box">
          + 
          <input type="file" name="gambar3" hidden>
        </label>
        <label class="upload-box">
          + 
          <input type="file" name="gambar4" hidden>
        </label>
      </div>
    </form>
  </div>
</div>

<footer class="footer">
  <div class="footer-content">
    <div class="footer-top">
      <div class="footer-logo">
        <img src="../foto/paw.png" alt="Pawfect Match Logo">
      </div>
      <div class="footer-chart">
        <img src="../foto/statistic.png" alt="Statistics">
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
        <a href="#"><img src="../foto/wa.png" alt="WhatsApp"></a>
        <a href="#"><img src="../foto/ig.png" alt="Instagram"></a>
        <a href="#"><img src="../foto/tt.png" alt="TikTok"></a>
        <a href="#"><img src="../foto/tele.png" alt="Telegram"></a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 PawFect-Match</p>
  </div>
</footer>
</body>
</html>
