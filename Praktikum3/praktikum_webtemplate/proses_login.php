<?php
// Dummy data - Anda dapat mengganti ini dengan validasi sesuai kebutuhan aplikasi Anda
$valid_username = "admin";
$valid_password = "admin";

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi username dan password
if ($username == $valid_username && $password == $valid_password) {
    // Jika valid, arahkan ke halaman utama atau halaman selanjutnya
    header("Location: index.php");
    exit();
} else {
    // Jika tidak valid, kembalikan ke halaman login dengan pesan error
    header("Location: login.php?error=invalid");
    exit();
}
?>