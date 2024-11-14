<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="beranda-style.css">
</head>
<body>
    <div class="navbar">
        <div class="anchor">
            <a href="../beranda/index.php" class="<?= ($_POST['page'] ?? '') == 'home' ? 'active' : '' ?>">Home</a>
            <a href="../produk/index.php" class="<?= ($_POST['page'] ?? '') == 'produk' ? 'active' : '' ?>">Products</a>
            <a href="../kontak/index.php" class="<?= ($_POST['page'] ?? '') == 'kontak' ? 'active' : '' ?>">Contact</a>
            <a href="../tentang-kami/index.php" class="<?= ($_POST['page'] ?? '') == 'tentang-kami' ? 'active' : '' ?>">About Us</a>
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
            <h1>Find Your<br>Dream Laptop Here</h1>
            <p>Come and find your dream laptop on our website with the best selections and affordable prices. Don't miss out, check it out now!</p>
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
                //Campuran
                ["name" => "Lenovo ThinkPad X1 Extreme", "description" => "Intel Core i9, 32GB RAM, 1TB SSD", "image" => "../foto/Lenovo ThinkPad X1 Extreme.jpg", "price" => "Rp 30.000.000"],
                ["name" => "Asus ROG Strix Scar 15", "description" => "Intel Core i9, RTX 3080, 32GB RAM", "image" => "../foto/Asus ROG Strix Scar 15.jpg", "price" => "Rp 40.000.000"],
                ["name" => "Apple MacBook Pro 16", "description" => "M1 Max chip, 32GB RAM, 1TB SSD", "image" => "../foto/Apple MacBook Pro 16.jpg", "price" => "Rp 38.000.000"],
                // Lenovo
                ["name" => "Lenovo Yoga 9i", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/Lenovo Yoga 9i.jpg", "price" => "Rp 20.000.000"],
                ["name" => "Lenovo Legion 5 Pro", "description" => "AMD Ryzen 7, RTX 3060, 16GB RAM, 512GB SSD", "image" => "../foto/Lenovo Legion 5 Pro.webp", "price" => "Rp 18.500.000"],
                ["name" => "Lenovo ThinkPad X1 Carbon", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Lenovo ThinkPad X1 Carbon.jpg", "price" => "Rp 25.000.000"],
                ["name" => "Lenovo IdeaPad Flex 5", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/Lenovo IdeaPad Flex 5.webp", "price" => "Rp 15.000.000"],
                ["name" => "Lenovo Legion Slim 7i", "description" => "Intel Core i7, RTX 2060, 16GB RAM, 1TB SSD", "image" => "../foto/Lenovo Legion Slim 7i.jpg", "price" => "Rp 23.000.000"],
                // HP
                ["name" => "HP Spectre x360", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/HP Spectre x360.jpg", "price" => "Rp 22.000.000"],
                ["name" => "HP Omen 16", "description" => "Intel Core i7, RTX 3060, 16GB RAM", "image" => "../foto/HP Omen 16.webp", "price" => "Rp 21.000.000"],
                ["name" => "HP Envy 13", "description" => "Intel Core i5, 8GB RAM, 256GB SSD", "image" => "../foto/HP Envy 13.jpg", "price" => "Rp 12.000.000"],
                ["name" => "HP Pavilion 15", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/HP Pavilion 15.webp", "price" => "Rp 13.500.000"],                    ["name" => "HP Victus 16", "description" => "AMD Ryzen 5, GTX 1650, 8GB RAM", "image" => "../foto/HP Victus 16.jpg", "price" => "Rp 11.000.000"],
                ["name" => "HP EliteBook 840", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/HP EliteBook 840.jpg", "price" => "Rp 19.000.000"],
                // Dell
                ["name" => "Dell XPS 13", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Dell XPS 13.avif", "price" => "Rp 28.000.000"],
                ["name" => "Dell Alienware X17", "description" => "Intel Core i9, RTX 3080, 32GB RAM", "image" => "../foto/Dell Alienware X17.jpg", "price" => "Rp 50.000.000"],
                ["name" => "Dell Inspiron 15 3000", "description" => "Intel Core i5, 8GB RAM, 256GB SSD", "image" => "../foto/Dell Inspiron 15 3000.jpg", "price" => "Rp 9.000.000"],
                ["name" => "Dell Latitude 7420", "description" => "Intel Core i7, 16GB RAM, 512GB SSD", "image" => "../foto/Dell Latitude 7420.webp", "price" => "Rp 22.000.000"],
                ["name" => "Dell Precision 5560", "description" => "Intel Xeon, 32GB RAM, 1TB SSD", "image" => "../foto/Dell Precision 5560.jpg", "price" => "Rp 35.000.000"],
                ["name" => "Dell G15 5510", "description" => "Intel Core i5, GTX 1650, 8GB RAM", "image" => "../foto/Dell G15 5510.png", "price" => "Rp 14.500.000"],
                // Apple
                ["name" => "Apple MacBook Air M2", "description" => "M2 chip, 8GB RAM, 512GB SSD", "image" => "../foto/Apple MacBook Air M2.jpg", "price" => "Rp 17.000.000"],
                ["name" => "Apple MacBook Pro 14", "description" => "M1 Pro chip, 16GB RAM, 1TB SSD", "image" => "../foto/Apple MacBook Pro 14.webp", "price" => "Rp 28.000.000"],
                ["name" => "Apple MacBook Air M1", "description" => "M1 chip, 8GB RAM, 256GB SSD", "image" => "../foto/Apple MacBook Air M1.webp", "price" => "Rp 14.000.000"],
                ["name" => "Apple MacBook Pro 13", "description" => "M2 chip, 16GB RAM, 512GB SSD", "image" => "../foto/Apple MacBook Pro 13.webp", "price" => "Rp 22.000.000"],
                ["name" => "Apple MacBook Pro 16", "description" => "M1 Max chip, 32GB RAM, 1TB SSD", "image" => "../foto/Apple MacBook Pro 16.jpg", "price" => "Rp 38.000.000"],
                ["name" => "Apple MacBook Pro 15", "description" => "Intel Core i9, 16GB RAM, 512GB SSD", "image" => "../foto/Apple MacBook Pro 15.jpg", "price" => "Rp 32.000.000"],
                // Asus
                ["name" => "Asus ZenBook 14", "description" => "Intel Core i5, 16GB RAM, 512GB SSD", "image" => "../foto/Asus ZenBook 14.png", "price" => "Rp 18.000.000"],
                ["name" => "Asus ROG Zephyrus G14", "description" => "AMD Ryzen 9, RTX 3060, 16GB RAM", "image" => "../foto/Asus ROG Zephyrus G14.png", "price" => "Rp 25.000.000"],
                ["name" => "Asus TUF Dash F15", "description" => "Intel Core i7, RTX 3050 Ti, 16GB RAM", "image" => "../foto/Asus TUF Dash F15.png", "price" => "Rp 18.500.000"],
                ["name" => "Asus VivoBook 15", "description" => "Intel Core i5, 8GB RAM, 256GB SSD", "image" => "../foto/Asus VivoBook 15.png", "price" => "Rp 11.000.000"],
                ["name" => "Asus ExpertBook B9", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Asus ExpertBook B9(2).png", "price" => "Rp 27.000.000"],
                //Axioo
                ["name" => "Axioo MyBook 14F", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/Axioo MyBook 14F.jpg", "price" => "Rp 10.000.000"],
                ["name" => "Axioo MyBook 13", "description" => "Intel Core i3, 4GB RAM, 256GB SSD", "image" => "../foto/Axioo MyBook 13.jpg", "price" => "Rp 7.500.000"],
                ["name" => "Axioo MyBook 14+", "description" => "Intel Core i7, 16GB RAM, 1TB SSD", "image" => "../foto/Axioo MyBook 14+.jpg", "price" => "Rp 12.500.000"],
                ["name" => "Axioo SlimBook 13", "description" => "Intel Celeron, 4GB RAM, 128GB SSD", "image" => "../foto/Axioo SlimBook 13.jpg", "price" => "Rp 5.500.000"],
                ["name" => "Axioo SlimBook 14", "description" => "Intel Core i3, 8GB RAM, 256GB SSD", "image" => "../foto/Axioo SlimBook 14.jpg", "price" => "Rp 7.000.000"],
                ["name" => "Axioo MyBook 14E", "description" => "Intel Core i5, 8GB RAM, 512GB SSD", "image" => "../foto/Axioo MyBook 14E.jpg", "price" => "Rp 9.500.000"]
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
                <h3>Information</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="../toko-offline/index.php" class="<?= ($_POST['page'] ?? '') == 'toko-offline' ? 'active' : '' ?>">Offline Store</a></li>
                    <li><a href="#">Testimonials</a></li>
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
                <h3>Helpful</h3>
                <ul>
                    <li><a href="#">Teams & Exchange</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Contact</h3>
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
