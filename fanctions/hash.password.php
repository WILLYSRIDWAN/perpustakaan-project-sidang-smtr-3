<?php
// Hash password yang disimpan (misalnya, hasil dari langkah 1)
$hashedPassword = '$2y$10$XHmjVYj5BOFksyk9X.jkEanA/dlcDqGHD2OHF0lhF0AeWQ1kpd/5G'; // Hash yang disimpan
$inputPassword = 'password123'; // Password yang ingin dicek

// Verifikasi password
if (password_verify($inputPassword, $hashedPassword)) {
    echo "Password cocok!";
} else {
    echo "Password salah!";
}
?>

<?php
$inputPassword = 'password123'; // Password yang ingin di-hash
$hashedPassword = password_hash($inputPassword, PASSWORD_BCRYPT); // Membuat hash dengan bcrypt

echo "Hash Password: " . $hashedPassword;
?>
