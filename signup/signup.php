<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawfect Match - Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="container">

    <div class="left-panel">
      <img src="../foto/paw.png" alt="Pawfect Match Logo" class="logo-img">
    </div>

     <div class="signup-container">
  <a href="../index.php" class="close-btn">&times;</a>
     </div>

    <div class="right-panel">
      <div class="form-box">
        <h2 style="font-size: 45px; font-weight: bold;">Create Account</h2>
        <p class="login-text">Have an account? <a href="/login/loginn.php">Log In</a></p>

        <form id="signupForm" method="POST" action="../action/signup.php">
          <input type="text" name="name" placeholder="Nama Lengkap" required>
          <input type="text" name="email" placeholder="Email or Phone Number" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="password" name="confirm" placeholder="Confirm Password" required>
          <button type="submit" name="register" class="btn">Sign Up</button>
</form>


        <div class="divider">or</div>

          <div class="social-btns">
          <button class="google">
            <img src="../foto/google.png" alt="Google">
            <span>Google</span>
          </button>


          <button class="facebook">
            <img src="../foto/fb.png" alt="Facebook">
             <span>Facebook</span>
  </button>
</div>
      </div>
    </div>
  </div>
</body>
</html>