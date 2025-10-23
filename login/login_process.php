<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email_or_phone = $_POST['email_or_phone'];
  $password = $_POST['password'];

  // cari user berdasarkan email atau nomor hp
  $sql = "SELECT * FROM users WHERE email=? OR phone=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $email_or_phone, $email_or_phone);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['email'] = $user['email'];
      header("Location: /Homepage/Homepage.html");
      exit();
    } else {
      echo "Password salah!";
    }
  } else {
    echo "Akun tidak ditemukan!";
  }
}
?>
