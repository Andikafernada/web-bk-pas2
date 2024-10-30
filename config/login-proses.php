<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan user berdasarkan username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Set session
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];

        // Arahkan pengguna berdasarkan level
        if ($user['level'] == 'admin') {
            header("Location: ../views/admin/dashboard.php");
        } elseif ($user['level'] == 'guru') {
            header("Location: guru_dashboard.php");
        } elseif ($user['level'] == 'siswa') {
            header("Location: siswa_dashboard.php");
        }
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>
