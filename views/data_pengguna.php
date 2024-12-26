<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Perpustakaan</title>
    <style>
      body {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./img/GEDUNG-STIKOM-UPDATE-1-2-768x1152.png') no-repeat center center fixed;
        background-size: cover;
        color: #fff;
      }
      .welcome-banner {
        text-align: center;
        margin-top: 10%;
        padding: 20px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .welcome-banner h1 {
        font-size: 3rem;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      }
      .welcome-banner p {
        font-size: 1.5rem;
      }

      .btn-primary {
    background-color: #007bff;
    color: white;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    color: white;
    transform: scale(1.05);
  }
      .login-container {
        margin-top: 5%;
        padding: 30px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .navbar-brand {
        font-weight: bold;
        letter-spacing: 1px;
      }
      .carousel img {
        height: 500px;
        object-fit: cover;
      }
      .login-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .login-content img {
        width: 300px;
        height: auto;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
    
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               DATA BUKU
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <li><a class="dropdown-item" href="data_kategori">Kategori</a></li>
                <li><a class="dropdown-item" href="data_pengguna">Pengguna</a></li>
        
        </div>
      </div>
    </nav>
    <div class="container">
        <h2 class="mt-5">Tambah Buku</h2>
        <form action="save_book.php" method="POST">
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
                    <!-- Kategori akan diambil dari database -->
                    <option value="1">Fiksi</option>
                    <option value="2">Non-Fiksi</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>