<?php
include 'koneksi.php'; // File koneksi ke database

// Query untuk mendapatkan data buku
$sql = "SELECT books.id, books.title, books.author, books.publisher, books.year, books.pages, categories.name AS category_name
        FROM books
        JOIN categories ON books.category_id = categories.id";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Buku</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Data Buku Perpustakaan</h2>
        <a href="add_buku.php" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Halaman</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['title']}</td>
                                <td>{$row['author']}</td>
                                <td>{$row['publisher']}</td>
                                <td>{$row['year']}</td>
                                <td>{$row['pages']}</td>
                                <td>{$row['category_name']}</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data buku.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
