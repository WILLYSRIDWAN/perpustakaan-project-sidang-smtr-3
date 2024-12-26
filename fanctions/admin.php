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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data_Master
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="buku.php"> Buku</a></li>
                <li><a class="dropdown-item" href="data_kategori">Kategori</a></li>
                <li><a class="dropdown-item" href="data_pengguna">Pengguna</a></li>
               \
                
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Transaksi
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="transaksi">Peminjaman</a></li>
                <li><a class="dropdown-item" href="transaksi">pengembalian</a></li>
               
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
