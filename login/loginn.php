<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../Config/db-connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "❌ Format email tidak valid.";
    exit();
  }

  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
   
    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['user'] = $user;
      header("Location: /Homepage/Homepage.php");
      exit();
    } else {
     echo "<script>
            alert('❌ Password salah.');
          </script>";
    }
  } else {
    echo "⚠️ Akun tidak ditemukan!";
  }

  $stmt->close();
}
$conn->close();
?>



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
  <a href="/Homepage/homepage.html" class="close-btn1">&times;</a>
     </div>

    <div class="right-panel1">
      <div class="form-box1">
        <h2 style="font-size: 45px; font-weight: bold;">Log In</h2>
        <p class="login-text1">Dont have an account?<a href="/signup/signup.html">Sign Up</a></p>

        <form id="signupForm1" method="POST">
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit" class="btn1"><a href="../success/sukses.html"></a>Log in</button>
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