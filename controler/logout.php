<?php
session_start();

// Hapus semua data session
$_SESSION = [];

// Hapus cookie session jika ada
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Hancurkan session sepenuhnya
session_destroy();

// Redirect ke halaman login
header("Location: ../login.html");
exit();
?>