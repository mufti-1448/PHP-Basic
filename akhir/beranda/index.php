<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="style-beranda.css">
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

    <div class="main">
        <div class="text">
            <h1>Temukan Laptop<br>Impian Mu Di Sini</h1>
            <p>Ayo temukan laptop impian mu di website kami dengan pilihan terbaik dan harga terjangkau. Jangan sampai ketinggalan, cek sekarang juga!</p>
            
            <div class="left-bottom">
                <a href="../produk/index.php" class="link">
                    <div class="button">
                        <span class="textt">ORDER NOW</span>
                        <div class="icon-container">
                            <img src="../foto/keranjang.png" alt="Cart Icon">
                        </div>
                    </div>
                </a>
                
                <a href="../beranda/index.php" class="link">
                    <div class="button">
                        <span class="textt">READ MORE</span>
                        <div class="icon-container">
                            <img src="../foto/kanan.png" alt="Right Icon">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="foto">
            <img src="../foto/laptop.webp" alt="Laptop Image">
        </div>
    </div>

    <div class="product-card-container">
        <?php
        // Daftar produk
            $products = [
                // Lenovo
                ["name" => "Lenovo Yoga 9i", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/Lenovo Yoga 9i.jpg"],
                ["name" => "Lenovo Legion 5 Pro", "description" => "AMD Ryzen 7, RTX 3060, 16GB RAM, 512GB SSD", "image" => "../foto/Lenovo Legion 5 Pro.webp"],
                ["name" => "Lenovo ThinkPad X1 Carbon", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Lenovo ThinkPad X1 Carbon.jpg"],
                ["name" => "Lenovo IdeaPad Flex 5", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/Lenovo IdeaPad Flex 5.webp"],
                ["name" => "Lenovo ThinkPad X1 Extreme", "description" => "Intel Core i9, 32GB RAM, 1TB SSD", "image" => "../foto/Lenovo ThinkPad X1 Extreme.jpg"],
                // HP
                ["name" => "HP Spectre x360", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/HP Spectre x360.jpg"],
                ["name" => "HP Omen 16", "description" => "Intel Core i7, RTX 3060, 16GB RAM", "image" => "../foto/HP Omen 16.webp"],
                ["name" => "HP Envy 13", "description" => "Intel Core i5, 8GB RAM, 256GB SSD", "image" => "../foto/HP Envy 13.jpg"],
                ["name" => "HP Pavilion 15", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/HP Pavilion 15.webp"],
                ["name" => "HP Victus 16", "description" => "AMD Ryzen 5, GTX 1650, 8GB RAM", "image" => "../foto/HP Victus 16.jpg"],
                // Dell
                ["name" => "Dell XPS 13", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Dell XPS 13.avif"],
                ["name" => "Dell Alienware X17", "description" => "Intel Core i9, RTX 3080, 32GB RAM", "image" => "../foto/Dell Alienware X17.jpg"],
                ["name" => "Dell Inspiron 15 3000", "description" => "Intel Core i5, 8GB RAM, 256GB SSD", "image" => "../foto/Dell Inspiron 15 3000.jpg"],
                ["name" => "Dell Latitude 7420", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/Dell Latitude 7420.webp"],
                ["name" => "Dell Precision 5560", "description" => "Intel Xeon, 32GB RAM, 1TB SSD", "image" => "../foto/Dell Precision 5560.jpg"],
                // Apple
                ["name" => "Apple MacBook Air M2", "description" => "M2 chip, 8GB RAM, 512GB SSD", "image" => "../foto/Apple MacBook Air M2.jpg"],
                ["name" => "Apple MacBook Pro 14", "description" => "M1 Pro chip, 16GB RAM, 1TB SSD", "image" => "../foto/Apple MacBook Pro 14.webp"],
                ["name" => "Apple MacBook Air M1", "description" => "M1 chip, 8GB RAM, 256GB SSD", "image" => "../foto/Apple MacBook Air M1.webp"],
                ["name" => "Apple MacBook Pro 13", "description" => "M2 chip, 16GB RAM, 512GB SSD", "image" => "../foto/Apple MacBook Pro 13.webp"],
                ["name" => "Apple MacBook Pro 16", "description" => "M1 Max chip, 32GB RAM, 1TB SSD", "image" => "../foto/Apple MacBook Pro 16.jpg"],
                // Asus
                ["name" => "Asus ZenBook 14", "description" => "Intel Core i5, 16GB RAM, 512GB SSD", "image" => "../foto/Asus ZenBook 14.png"],
                ["name" => "Asus ROG Zephyrus G14", "description" => "AMD Ryzen 9, RTX 3060, 16GB RAM", "image" => "../foto/Asus ROG Zephyrus G14.png"],
                ["name" => "Asus TUF Dash F15", "description" => "Intel Core i7, RTX 3050 Ti, 16GB RAM", "image" => "../foto/Asus TUF Dash F15.png"],
                ["name" => "Asus VivoBook 15", "description" => "Intel Core i5, 8GB RAM, 256GB SSD", "image" => "../foto/Asus VivoBook 15.png"],
                ["name" => "Asus ROG Strix Scar 15", "description" => "Intel Core i9, RTX 3080, 32GB RAM", "image" => "../foto/Asus ROG Strix Scar 15.jpg"],
                //Axioo
                ["name" => "Axioo MyBook 14F", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/Axioo MyBook 14F.jpg"],
                ["name" => "Axioo MyBook 13", "description" => "Intel Core i3, 4GB RAM, 256GB SSD", "image" => "../foto/Axioo MyBook 13.jpg"],
                ["name" => "Axioo MyBook 14+", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Axioo MyBook 14+.jpg"],
                ["name" => "Axioo SlimBook 13", "description" => "Intel Celeron, 4GB RAM, 128GB SSD", "image" => "../foto/Axioo SlimBook 13.jpg"],
                ["name" => "Axioo SlimBook 14", "description" => "Intel Core i3, 8GB RAM, 256GB SSD", "image" => "../foto/Axioo SlimBook 14.jpg"],
            ];

        
            // Ambil input pencarian jika ada
            $searchQuery = $_POST['search'] ?? '';

            // Filter produk berdasarkan pencarian
            $filteredProducts = [];
            if ($searchQuery) {
                foreach ($products as $product) {
                    if (stripos($product['name'], $searchQuery) !== false) {
                        $filteredProducts[] = $product;
                    }
                }
            } else {
                // Jika tidak ada pencarian, tampilkan semua produk
                $filteredProducts = $products;
            }

            // Batasi hasil pencarian hanya menampilkan 3 produk pertama
            $limitedProducts = array_slice($filteredProducts, 0, 3);

            // Tampilkan produk yang sesuai
            if (!empty($limitedProducts)) {
                foreach ($limitedProducts as $product) {
                    echo '
                    <div class="product-card">
                        <div class="card-left">
                            <img src="' . $product['image'] . '" alt="' . $product['name'] . '">
                        </div>
                        <div class="card-right">
                            <h2>' . $product['name'] . '</h2>
                            <p>' . $product['description'] . '</p>
                        </div>
                    </div>';
                }
            } else {
                echo '<p>Produk tidak ditemukan. "' . htmlspecialchars($searchQuery) . '"</p>';
            }
        ?>
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
