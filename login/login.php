<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // validasi format email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "❌ Format email tidak valid. Pastikan mengandung '@' dan domain yang benar.";
    exit();
  }

  // cari user berdasarkan email
  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
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
      echo "❌ Password salah!";
    }
  } else {
    echo "⚠️ Akun tidak ditemukan!";
  }

  $stmt->close();
}
$conn->close();
?>
