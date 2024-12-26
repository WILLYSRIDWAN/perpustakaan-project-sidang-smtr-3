<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Buku</h2>
    <form id="bookForm">
        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Tahun Terbit</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Jumlah Halaman</label>
            <input type="number" class="form-control" id="pages" name="pages" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-control" id="category" name="category_id" required>
                <option value="">Pilih Kategori</option>
                <option value="1">Fiksi</option>
                <option value="2">Non-Fiksi</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" id="saveBook">Simpan</button>
    </form>
    <div id="responseMessage"></div>
</div>

<!-- jQuery (jika belum ada) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript untuk AJAX -->
<script>
$(document).ready(function(){
    $('#bookForm').submit(function(e) {
        e.preventDefault(); // Mencegah pengiriman form secara default
        
        var formData = $(this).serialize(); // Mengambil data dari form
        
        $.ajax({
            url: 'save_buku.php',  // Mengirim ke file save_buku.php
            type: 'POST',
            data: formData, // Data yang dikirim
            success: function(response) {
                // Menampilkan pesan sukses atau kesalahan
                $('#responseMessage').html('<div class="alert alert-success">' + response + '</div>');
                $('#bookForm')[0].reset();  // Reset form setelah berhasil
            },
            error: function() {
                // Menampilkan pesan kesalahan jika gagal
                $('#responseMessage').html('<div class="alert alert-danger">Terjadi kesalahan. Silakan coba lagi.</div>');
            }
        });
    });
});
</script>

</body>
</html>
