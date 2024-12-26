<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $inputPassword = $_POST['password'];

    $hashedPassword = password_hash($inputPassword, PASSWORD_BCRYPT);

    $pdo = new PDO("mysql:host=localhost;dbname=database_name", "username", "password");
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $hashedPassword]);

    echo "Registrasi berhasil!";
} else {
    
    echo '<form method="POST">
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" value="Register">
          </form>';
}
?>
