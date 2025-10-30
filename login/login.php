<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawfect Match - Log In</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container1">

    <div class="left-panel1">
      <img src="../foto/paw.png" alt="Pawfect Match Logo" class="logo-img1">
    </div>

     <div class="signup-container1">
  <a href="/Homepage/Homepage.html" class="close-btn1">&times;</a>
     </div>

    <div class="right-panel1">
      <div class="form-box1">
        <h2 style="font-size: 45px; font-weight: bold;">Log In</h2>
        <p class="login-text1">Dont have an account?<a href="/signup/signup.html">Login</a></p>

        <form id="signupForm1"  action="../action/login.php" method="POST">
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button type="submit" class="btn1"><a href="../Homepage/Homepage.html"></a>Sign Up</button>
        </form>

        <div class="divider1">or</div>

          <div class="social-btns1">
          <button class="google1">
            <img src="../foto/google.png" alt="Google">
            <span>Google</span>
          </button>


          <button class="facebook1">
            <img src="../foto/fb.png" alt="Facebook">
             <span>Facebook</span>
  </button>
</div>
      </div>
    </div>
  </div>
</body>
</html>