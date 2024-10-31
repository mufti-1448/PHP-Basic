<?php
// Tangani pengiriman form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input email dan password dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Contoh sederhana untuk validasi login (seharusnya terhubung ke database)
    if ($email == "mufti0480@gmail.com" && $password == "144808") {
        // Jika login berhasil, arahkan ke halaman beranda
        header("Location: ../beranda/index.php");
        exit(); // Pastikan untuk menghentikan eksekusi lebih lanjut
    } else {
        // Jika login gagal, tampilkan pesan error
        $message = "Email atau kata sandi salah!";
    }
} else {
    // Pesan default jika belum ada form yang dikirimkan
    $message = "Silakan masukkan informasi login Anda.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
<div class="login-container">
        <div class="login-left">
            <img src="../foto/logo.webp" alt="Logo Laptop Spot" class="logo">
            <h1 class="logo-text">Laptop Spot</h1>
        </div>
        <div class="login-right">
            <h2>Masuk</h2>
            <p>Open in the World</p>
            
            <!-- Tampilkan pesan dari PHP -->
            <p><?php echo $message; ?></p>
            
            <form action="" method="post">
                <div class="input-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="input-group">
                    <label for="password">Kata Sandi*</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda" required>
                </div>
                <button type="submit" class="btn btn-login">Masuk</button>
                <button type="button" class="btn btn-create">Buat Akun</button>
            </form>
        </div>
    </div>
</body>
</html>
