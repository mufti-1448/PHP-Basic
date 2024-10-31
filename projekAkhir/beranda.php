<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
<div class="navbar">
        <div class="anchor">
            <a href="beranda.php" class="<?= ($_POST['page'] ?? '') == 'home' ? 'active' : '' ?>">Home</a>
            <a href="?page=produk" class="<?= ($_POST['page'] ?? '') == 'produk' ? 'active' : '' ?>">Produk</a>
            <a href="?page=kontak" class="<?= ($_POST['page'] ?? '') == 'kontak' ? 'active' : '' ?>">Kontak</a>
            <a href="?page=tentang-kami" class="<?= ($_POST['page'] ?? '') == 'tentang-kami' ? 'active' : '' ?>">Tentang Kami</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button><i class="search-icon">🔍</i></button>
        </div>
        <a href="login.php" class="login-button">LOGIN</a>
    </div>
</body>
</html>