<?php
session_start();


// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Jika belum login, arahkan ke halaman login
    exit;
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Perpustakaan</title>
    <style>
      body {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./img/gedung\ stikom.png') no-repeat center center fixed;
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

      <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      background-color: #f8f9fa;
    }

    .center-container {
      text-align: center;
      background: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .center-container img {
      margin-top: 20px;
      border-radius: 10px;
    }

    h1 {
      color: #007bff;
      font-size: 2rem;
    }

    p {
      color: #333;
    }
  </style>
</head>
    </style>
    <head>
    </head>
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
      <ul class="navbar-nav ms-auto">
        <!-- Menambahkan tombol Next di sebelah kanan -->
        <form class="d-flex ms-auto">
          <a href="index2.html" class="btn btn-outline-success">Next</a>
        </form>
      </ul>      
    </div>
  </div>
</nav>

    <div class="center-container ">
      <h1>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h1>
      <p>Anda berhasil login ke sistem perpustakaan Stikom El-Rahma.</p>
    </div>
    <div align="center">
    <img src="./img/teh nisa.webp" alt="Foto" class="ms-4" width="400" height="520">

    </div>
    <footer class="bg-dark text-white py-3 text-center">
      <p class="mb-0" style="color: white;">&copy; 2024 WillRidwan27</p>
  </footer>
  </body>
</html>
