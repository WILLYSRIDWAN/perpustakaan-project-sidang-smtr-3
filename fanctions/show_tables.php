<?php
$conn = new mysqli('localhost', 'root', '', 'perpustakaan');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SHOW TABLES");

if ($result) {
    while ($row = $result->fetch_array()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "Query Error: " . $conn->error;
}

$conn->close();
?>
