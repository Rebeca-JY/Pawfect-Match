<?php
require_once '../Config/db-connect.php';

if (isset($_POST['register'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['confirm'];

    if ($password != $passwordConfirmation) {
        echo "
            <script>
                alert('Password and Password Confirmation do not match');
                window.location.href = '../signup/signup.php';
            </script>
        ";
        exit;
    }


    $checkQuery = "SELECT * FROM users WHERE email = ?";
    $checkStmt = $connection->prepare($checkQuery);
    $checkStmt->bind_param('s', $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        echo "
            <script>
                alert('Email already registered. Please use another email.');
                window.location.href = '../signup/signup.php';
            </script>
        ";
        exit;
    }

    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ss', $email, $passwordHashed);

    if ($stmt->execute()) {
        header('Location: ../index.php');
        exit;
    } else {
        echo "
            <script>
                alert('Error registering new user');
                window.location.href = '../signup/signup.php';
            </script>
        ";
        exit;
    }
}
?>
