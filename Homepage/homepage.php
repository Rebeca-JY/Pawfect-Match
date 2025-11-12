<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pawfect-Match</title>
    <link rel="stylesheet" href="../Homepage/index.css">
</head>
<body>
  
  <?php include '../components/header.php';?>

<!-- Body bagian search -->
  <div class="hero">
    <div class="overlay">
      <div class="search-bar">
        <input type="text" placeholder="What animal do you want?">
        <button type="submit">
          <img src="../foto/search.png" alt="search">
        </button>
      </div>
      <h1>Welcome to Pawfect-Match!</h1>
      <p>find your best partner</p>
    </div>
  </div>

  <div class="navbarbody"></div>

  <div class="cards">
    <a href="dogs.php" class="card">
      <img src="../foto/Dog.png" alt="Dogs">
    </a>

    <a href="other.php" class="card">
      <img src="../foto/other.png" alt="Other Pets">
    </a>

    <a href="cats.php" class="card">
      <img src="../foto/cat.png" alt="Cats">
    </a>
  </div>

  <!-- Bagian Ava pet -->
  <div class="available-section">
  <div class="section-title">Available pets</div>

  <div class="pets-container">
    <div class="pet-card">
      <img src="../foto/golden.png" alt="Anjing" class="pet-image">
      <div class="pet-name">Golden Retriever</div>
    </div>
    <div class="pet-card">
      <img src="../foto/siberian.png" alt="Kucing" class="pet-image">
      <div class="pet-name">Siberian Cat</div>
    </div>
    <div class="pet-card">
      <img src="../foto/netherlands.png" alt="Kelinci" class="pet-image">
      <div class="pet-name">Netherlands Dwarves Bunny</div>
    </div>
    <div class="pet-card">
      <img src="../foto/fennec.png" alt="Rubah" class="pet-image">
      <div class="pet-name">Fennec Fox</div>
    </div>
  </div>

  <a href="/other/other.html"><button class="more-button">More Pets ➝</button></a>
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