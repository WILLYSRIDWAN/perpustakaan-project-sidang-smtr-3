<?php
session_start();
include '../config.php'; // Pastikan file koneksi database sudah benar

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

// Ambil data kategori dari database
$query = "SELECT * FROM kategori ORDER BY id DESC";
$result = $connection->query($query);

// Tambahkan Kategori
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $nama_kategori = $_POST['nama_kategori'];

    $stmt = $connection->prepare("INSERT INTO kategori (nama_kategori) VALUES (?)");
    $stmt->bind_param("s", $nama_kategori);

    if ($stmt->execute()) {
        header("Location: data_kategori.php");
        exit;
    } else {
        $error = "Gagal menambahkan kategori!";
    }
}

// Hapus Kategori
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $connection->prepare("DELETE FROM kategori WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: data_kategori.php");
        exit;
    } else {
        $error = "Gagal menghapus kategori!";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Kategori</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Kategori</h2>

        <!-- Pesan Error -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- Form Tambah Kategori -->
        <form method="POST" class="mb-4">
            <div class="input-group">
                <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
                <button class="btn btn-success" type="submit" name="add">Tambah</button>
            </div>
        </form>

        <!-- Tabel Data Kategori -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <div>
                <ul>
                <li><a class="dropdown-item" href="data_kategori.php">Kategori</a></li>
                </ul>
            </div>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama_kategori']; ?></td>
                        <td>
                            <a href="data_kategori.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
