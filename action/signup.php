<?php

require_once '../Config/db-connect.php'; 

if (isset($_POST['register'])) {
    
    
    if (!isset($conn) || $conn->connect_error) {
        die("KONEKSI DATABASE GAGAL: Periksa file db-connect.php. Error: " . (isset($conn) ? $conn->connect_error : "Variabel koneksi \$conn tidak tersedia."));
    }
    if (!isset($_POST['name'])) {
        die("ERROR KRITIS: Field 'name' hilang dari formulir. Pastikan atribut name='name' ada di HTML form.");
    }

    $name = htmlspecialchars(trim($_POST['name'])); 
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['confirm'];

    if ($password != $passwordConfirmation) {
       
        echo "<script>alert('Password dan Konfirmasi Password tidak cocok');</script>";
        header('Location: ../signup/signup.php');
        exit;
    } else {
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"; 
        if (!$stmt = $conn->prepare($query)) {
            die("PREPARE QUERY GAGAL: Error: " . $conn->error);
        }
        $stmt->bind_param('sss', $name, $email, $passwordHashed); 
        if (!$stmt->execute()) {
            die("EKSEKUSI QUERY GAGAL. Kemungkinan email sudah terdaftar atau ada kolom wajib lain yang kosong. Error: " . $stmt->error);
        }

        if ($stmt->affected_rows > 0) {
          
            header('Location: ../index.php');
            exit;
        } else {
            echo "
                <script>
                    alert('Gagal mendaftar. Silakan coba lagi.');
                </script>
            ";

            header('Location: ../signup/signup.php');
            exit;
        }
    }
} else {
    header('Location: ../signup/signup.php');
    exit;
}
?>