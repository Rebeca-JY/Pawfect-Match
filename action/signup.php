<?php
require_once '../Config/db-connect.php';

if (isset($_POST['register'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['confirm'];

    if ($password != $passwordConfirmation) {
        echo "
            <script>
                alert('Password and Password Confirmation are not match');
                window.location.href = '../signup/signup.php';
            </script>
        ";
    } else {
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (email, password) VALUES (?, ?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $passwordHashed);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: ../index.php');
            exit;
        } else {
            echo "
                <script>
                    alert('Error to register new user');
                </script>
            ";

            header('Location: ../signup/signup.php');
            exit;
        }
    }

}
?>