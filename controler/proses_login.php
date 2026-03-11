<?php
session_start();

// =============================================
// USERNAME & PASSWORD DISIMPAN DI SINI
// =============================================
$valid_username = "admin";
$valid_password = "admin123";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        header("Location: ../login.html?error=Username+dan+password+tidak+boleh+kosong");
        exit();
    }

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username']  = $username;
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../login.html?error=Username+atau+password+salah");
        exit();
    }

} else {
    header("Location: ../login.html");
    exit();
}
?>