<?php
// Mulai session di baris paling atas
session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoCare</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="site-header">
        <div class="logo">MotoCare</div>
        <nav class="main-nav">
            <a href="index.php#features">Fitur</a>
            <a href="index.php#guide">Panduan</a>
            <?php if (isset($_SESSION['username'])): ?>
                <a href="dashboard.php" style="font-weight: bold;">Dashboard</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn-primary" style="padding: 8px 16px;">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Solusi Mudah Servis Sepeda Motor Anda</h1>
            <p>MotoCare hadir untuk mendukung pengelolaan dan pemesanan layanan perawatan maupun perbaikan sepeda motor
                Anda secara cepat, mudah, dan profesional.</p>
            <a href="#features" class="btn-primary">Lihat Fitur</a>
        </div>
        <div class="hero-image">
            <img src="honda-3.jpg" alt="Hero Placeholder">
        </div>
    </section>

    <section id="features" class="product-cards">
        <h2>Fitur</h2>
        <p class="section-desc">Nikmati pilihan fitur terbaik pilihan untuk pengalaman terbaik anda.</p>
        <div class="cards">
            <div class="card">
                <div class="content">
                    <h3>Booking</h3>
                    <p>Atur jadwal untuk sepeda motor secara online.</p>
                    <a href="login.php" class="btn-secondary">Coba Booking</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>Manajemen</h3>
                    <p>Pantau servis dimana saja secara real-time.</p>
                    <a href="login.php" class="btn-secondary">Lihat Manajemen</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>Promo</h3>
                    <?php
                    // PENGGUNAAN SUPERGLOBAL $_GET
                    if (isset($_GET['promo']) && $_GET['promo'] === 'true') {
                        echo '<p style="color: green; font-weight: bold;">Anda mendapatkan DISKON 15% untuk servis berikutnya!</p>';
                    } else {
                        echo '<p>Dapatkan penawaran diskon untuk perawatan.</p>';
                    }
                    ?>
                    <a href="index.php?promo=true#features" class="btn-secondary">Lihat Promo</a>
                </div>
            </div>
        </div>
    </section>

    <section id="guide" class="guide">
        <h2>Panduan Pengunjung</h2>
        <p class="guide-desc">Untuk panduan lengkap, silakan kunjungi halaman berikut:</p>
        <a href="#" class="btn-primary">Buka Panduan</a>
    </section>

    <footer class="site-footer">
        <div class="about-footer">
            <p>MotoCare dirancang agar konsumen mendapat layanan perawatan sepeda motor dengan cepat dan efisien.</p>
        </div>
        <small>&copy; 2025 MotoCare.</small><br>
        <small>Referensi desain:
            <a href="https://dribbble.com/search/motorcycle%20app" target="_blank">Dribbble Motorcycle App</a>
        </small>
    </footer>

</body>

</html>