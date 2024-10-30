<?php
// Konfigurasi koneksi database menggunakan PDO

$host = 'localhost';       // Host database, bisa '127.0.0.1' atau 'localhost'
$dbname = 'db-bk';         // Nama database
$username = 'root';        // Username database (sesuaikan)
$password = '';            // Password database (sesuaikan)

try {
    // Membuat instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set mode error ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pesan sukses
    // echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    // Menangani error jika koneksi gagal
    die("Koneksi ke database gagal: " . $e->getMessage());
}
?>
