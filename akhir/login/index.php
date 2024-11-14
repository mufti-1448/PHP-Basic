<?php

$users = [
    "mufti0480@gmail.com" => "144808",
    "zidanarq@gmail.com" => "123456789"
];


// Tangani pengiriman form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input email dan password dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Contoh sederhana untuk validasi login (seharusnya terhubung ke database)
    if (isset($users[$email]) && $users[$email] == $password) {
        // Jika login berhasil, arahkan ke halaman beranda
        header("Location: ../beranda/index.php");
        exit(); // Pastikan untuk menghentikan eksekusi lebih lanjut
    } else {
        // Jika login gagal, tampilkan pesan error
        $message = "Email or password is incorrect!";
    }
} else {
    // Default message if no form has been submitted yet
    $message = "Please enter your login information.";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <img src="../foto/logo.webp" alt="Laptop Spot Logo" class="logo">
            <h1 class="logo-text">Laptop Spot</h1>
        </div>
        <div class="login-right">
            <h2>Login</h2>
            <p>Open in the World</p>
            
            <!-- Display message from PHP -->
            <p><?php echo $message; ?></p>
            
            <form action="" method="post">
                <div class="input-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password*</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div>
                <button type="submit" class="btn btn-login">Login</button>
                <button type="button" class="btn btn-create">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
