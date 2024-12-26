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
           
                
                
              
              
          </ul>
        </div>
      </div>
    </nav>

    <!-- Welcome Banner -->
    <div class="container">
      <div class="welcome-banner">
        <h1>"Perpustakaan Stikom El-Rahma: Tempat terbaik untuk menggali ilmu dan menemukan inspirasi."</h1>
        
      </div>
    </div>

    <!-- Login Form -->
     
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-8 login-content">
          <div class="login-container">
            <h3 class="text-center mb-4" style="color: black;">Login</h3>

            <form action="login.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label" style="color: black;">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
              </div>  
              <div class="mb-3">
                <label for="password" class="form-label" style="color: black;">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
            <p class="text-center mt-3">
              <small style="color: black;">Belum punya akun? <a href="#">Daftar di sini</a></small>
            </p>
          </div>
          
          <img src="./img/logo wisuda.webp" alt="Foto" class="ms-4">

        </div>
      </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <footer class="bg-dark text-white py-3 text-center">
      <p class="mb-0">&copy; 2024 WillRidwan27</p>
  </footer>

  </body>
</html>