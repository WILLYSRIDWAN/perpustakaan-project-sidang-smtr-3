<?php
// Koneksi ke database
include('../includes/config.php'); // Pastikan path sudah benar

// Cek apakah data POST ada
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $pages = mysqli_real_escape_string($conn, $_POST['pages']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    
    // Query untuk menyimpan data buku
    $query = "INSERT INTO books (title, author, publisher, year, pages, category_id) 
              VALUES ('$title', '$author', '$publisher', '$year', '$pages', '$category_id')";
    
    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Buku berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    echo "Data tidak valid.";
}
?>


