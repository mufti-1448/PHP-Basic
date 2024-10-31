<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="anchor">
            <a href="../beranda/index.php" class="<?= ($_POST['page'] ?? '') == 'home' ? 'active' : '' ?>">Home</a>
            <a href="?page=produk" class="<?= ($_POST['page'] ?? '') == 'produk' ? 'active' : '' ?>">Produk</a>
            <a href="?page=kontak" class="<?= ($_POST['page'] ?? '') == 'kontak' ? 'active' : '' ?>">Kontak</a>
            <a href="?page=tentang-kami" class="<?= ($_POST['page'] ?? '') == 'tentang-kami' ? 'active' : '' ?>">Tentang Kami</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Search..." class="search-input">
            <button class="search-button">
                <img src="search-icon.png" alt="search icon">
            </button>
        </div>
        <a href="../login/index.php" class="login-link">
            <div class="login-button">
                <span class="login-text">LOGIN</span>
                <div class="icon-container">
                    <img src="user.png" alt="User Icon">
                </div>
            </div>
        </a>
    </div>

    <div class="main">
        <div class="text">
            <h1>Temukan Laptop<br>Impian Mu Di Sini</h1>
            <p>Ayo temukan laptop impian mu di website kami dengan pilihan terbaik dan harga terjangkau. Jangan sampai ketnggalan, cek sekarang juga!</p>
            
            <div class="left-bottom">
                <a href="../produk/index.php" class="link">
                    <div class="button">
                        <span class="textt">ORDER NOW</span>
                        <div class="icon-container">
                            <img src="keranjang.png" alt="User Icon">
                        </div>
                    </div>
                </a>
                
                <a href="../beranda/index.php" class="link">
                    <div class="button">
                        <span class="textt">READ MORE</span>
                        <div class="icon-container">
                            <img src="kanan.png" alt="Cart Icon">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="foto">
            <img src="laptop.webp" alt="Laptop Image">
        </div>

    </div>

    <div class="product-card-container">
        <div class="product-card">
            <img src="laptop.webp" alt="Laptop Asus TUF Gaming">
            <h2>Laptop Asus TUF Gaming</h2>
            <p>Ayo temukan laptop impianmu di website kami dengan pilihan terbaik dan harga terjangkau. Jangan sampai ketinggalan, cek sekarang juga!</p>
        </div>
        <div class="product-card">
            <img src="laptop.webp" alt="Laptop Asus TUF Gaming">
            <h2>Laptop Asus TUF Gaming</h2>
            <p>Ayo temukan laptop impianmu di website kami dengan pilihan terbaik dan harga terjangkau. Jangan sampai ketinggalan, cek sekarang juga!</p>
        </div>
        <div class="product-card">
            <img src="laptop.webp" alt="Laptop Asus TUF Gaming">
            <h2>Laptop Asus TUF Gaming</h2>
            <p>Ayo temukan laptop impianmu di website kami dengan pilihan terbaik dan harga terjangkau. Jangan sampai ketinggalan, cek sekarang juga!</p>
        </div>
    </div>
</body>
</html>