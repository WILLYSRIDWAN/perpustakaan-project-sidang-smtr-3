<?php
session_start();

// Pastikan pengguna telah login
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}

$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard User</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>Welcome, <?php echo $username; ?>!</h3>
            </div>
            <div class="card-body">
                <p>Selamat datang di sistem informasi perpustakaan.</p>
                <p>ID Anda: <?php echo $user_id; ?></p>
            </div>
            <div class="card-footer">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
