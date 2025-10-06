<?php
session_start();

// Jika user BELUM login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil username dari session untuk ditampilkan
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - MotoCare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <div class="logo">MotoCare</div>
    <nav class="main-nav">
        <a href="index.php">Home</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<main class="dashboard-container">
    <h1>Selamat Datang di Dashboard, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Ini adalah halaman pribadi Anda. Di sini Anda dapat mengelola jadwal servis dan melihat riwayat perawatan motor Anda.</p>
    <div class="dashboard-content">
        <h3>Status Servis Terkini</h3>
        <p>Honda Vario - Penggantian oli. <strong>Selesai.</strong></p>
        <a href="index.php" class="btn-secondary">Kembali ke Halaman Utama</a>
    </div>
</main>

<footer class="site-footer">
    <small>&copy; 2025 MotoCare.</small>
</footer>

</body>
</html>