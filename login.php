
<?php
session_start();

// Jika user sudah login, redirect ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Data user statis untuk contoh
define('VALID_USERNAME', 'admin');
define('VALID_PASSWORD', 'pass123');

$error_message = '';

// Cek jika form telah disubmit menggunakan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    if ($username === VALID_USERNAME && $password === VALID_PASSWORD) {
        // Jika berhasil, simpan username di session
        $_SESSION['username'] = $username;
        // Redirect ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        $error_message = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - MotoCare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <form action="login.php" method="POST" class="login-form">
        <h2>Login ke MotoCare</h2>
        <?php if ($error_message): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-primary">Login</button>
        <p style="margin-top: 1rem; font-size: 0.9em;">Gunakan: <strong>admin</strong> / <strong>pass123</strong></p>
         <a href="index.php" style="font-size: 0.9em;">Kembali ke Halaman Utama</a>
    </form>
</div>

</body>
</html>