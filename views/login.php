<?php
session_start();

// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Misalnya, ambil data username dan password dari database
    // Simulasikan data dari database
    $storedUsername = 'admin'; // Username yang ada di database
    $storedPassword = password_hash('admin123', PASSWORD_DEFAULT); // Password hash

    // Cek apakah username dan password cocok
    if ($username == $storedUsername && password_verify($password, $storedPassword)) {
        $_SESSION['username'] = $username; // Simpan username ke session
        header("Location: dashboard.php"); // Arahkan ke halaman dashboard
        exit;
    } else {
        echo "Username atau password salah!";
    }
}
?>
