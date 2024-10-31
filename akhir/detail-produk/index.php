<?php
// Mengambil data produk dari URL
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Nama produk tidak tersedia';
$description = isset($_GET['description']) ? htmlspecialchars($_GET['description']) : 'Deskripsi tidak tersedia';
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : '0';
$image = isset($_GET['image']) ? htmlspecialchars($_GET['image']) : 'path-to-default-image.jpg';
$colors = isset($_GET['colors']) ? htmlspecialchars($_GET['colors']) : 'Warna tidak tersedia'; // Mengambil warna
$features = isset($_GET['features']) ? htmlspecialchars($_GET['features']) : 'Fitur tidak tersedia'; // Mengambil fitur

// Set default quantity
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
$priceInt = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
$subtotal = $quantity * $priceInt;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="style-detail-produk.css">
</head>
<body>
    <div class="navbar">
        <div class="anchor">
            <a href="../beranda/index.php" class="<?= ($_POST['page'] ?? '') == 'home' ? 'active' : '' ?>">Home</a>
            <a href="../produk/index.php" class="<?= ($_POST['page'] ?? '') == 'produk' ? 'active' : '' ?>">Produk</a>
            <a href="../kontak/index.php" class="<?= ($_POST['page'] ?? '') == 'kontak' ? 'active' : '' ?>">Kontak</a>
            <a href="../tentang-kami/index.php" class="<?= ($_POST['page'] ?? '') == 'tentang-kami' ? 'active' : '' ?>">Tentang Kami</a>
        </div>
        <div class="search-container">
            <form method="POST" action="index.php">
                <input type="text" name="search" placeholder="Search..." class="search-input" value="<?= htmlspecialchars($_POST['search'] ?? '') ?>">
                <button type="submit" class="search-button">
                    <img src="../foto/search-icon.png" alt="search icon">
                </button>
            </form>
        </div>
        <a href="../login/index.php" class="login-link">
            <div class="login-button">
                <span class="login-text">LOGIN</span>
                <div class="icon-container">
                    <img src="../foto/user.png" alt="User Icon">
                </div>
            </div>
        </a>
    </div>

    <div class="product-layout">
        <!-- Bagian Kiri: Gambar Produk -->
        <div class="product-image">
            <img src="<?= $image ?>" alt="<?= $name ?>">
        </div>

        <!-- Bagian Tengah: Detail Produk -->
        <div class="product-details">
            <h2><?= $name ?></h2>
            <p><?= $description ?></p>
            <h1 class="h1"><?= $price ?></h1>
        </div>

        <!-- Bagian Kanan: Card Pembelian -->
        <div class="purchase-card">
            <h4>Atur jumlah dan catatan</h4>
            <p>256 GB</p>
            <hr>
            <form method="POST" action="">
                <div class="quantity-control">
                    <label for="quantity">Atur Jumlah:</label>
                    <input type="number" name="quantity" id="quantity" value="<?= $quantity ?>" min="1" onchange="this.form.submit()">
                    <span>Stok: <strong>50</strong></span>
                </div>
                <p class="subtotal">Subtotal: <strong>Rp. <?= number_format($subtotal, 0, ',', '.') ?></strong></p>
                <button type="submit" class="btn-buy">Beli</button>
                <button type="submit" class="btn-cart">+ Keranjang</button>
            </form>
            <div class="additional-options">
                <span>
                    <img src="../foto/path-to-chat-icon.png" alt="Chat Icon"> Chat
                </span> | 
                <span>
                    <img src="../foto/path-to-wishlist-icon.png" alt="Wishlist Icon"> Wishlist
                </span> | 
                <span>
                    <img src="../foto/path-to-share-icon.png" alt="Share Icon"> Share
                </span>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="../foto/logo.webp" alt="Laptop Spot Logo">
                <p>Laptop Spot</p>
            </div>
            <div class="footer-column">
                <h3>Informasi</h3>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="../toko-offline/index.php" class="<?= ($_POST['page'] ?? '') == 'toko-offline' ? 'active' : '' ?>">Toko Offline</a></li>
                    <li><a href="#">Testimino</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Service Center</h3>
                <ul>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Helpfull</h3>
                <ul>
                    <li><a href="#">Teams & Exchange</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Kontak</h3>
                <p>+62 85283983634</p>
                <p>mufti0480@gmail.com</p>
                <div class="social-icons">
                    <a href="#"><img src="../foto/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../foto/whatsapp.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../foto/twitter.png" alt="Twitter"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Copy Right by MZali</p>
        </div>
    </footer>
</body>
</html>
