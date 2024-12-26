<?php
$servername = "localhost"; // Ganti sesuai dengan konfigurasi server
$username = "root";        // Ganti sesuai dengan username database
$password = "";            // Ganti dengan password database
$dbname = "perpustakaan";  // Nama database

$conn = new mysqli('localhost', 'root', '', 'perpustakaan');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
