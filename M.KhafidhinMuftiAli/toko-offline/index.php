<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offline Store</title>
    <link rel="stylesheet" href="offline.css">
</head>
<body>

    <!-- Navbar -->
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

    <div class="container">
        <h1>List of Laptop Spot Stores</h1>
        <ul class="toko-list">
            <?php
            $tokoLaptop = [
                "Laptop Spot Jakarta, Jl. Merdeka No. 45, Central Jakarta, DKI Jakarta 10110",
                "Laptop Spot Bandung, Jl. Braga No. 23, Bandung, West Java 40111",
                "Laptop Spot Surabaya, Jl. Pemuda No. 17, Surabaya, East Java 60271",
                "Laptop Spot Yogyakarta, Jl. Malioboro No. 8, Yogyakarta, DI Yogyakarta 55213",
                "Laptop Spot Medan, Jl. Gatot Subroto No. 89, Medan, North Sumatra 20151"
            ];            

            foreach ($tokoLaptop as $toko) {
                $parts = explode(",", $toko, 2);
                echo "<li>";
                echo "<span class='nama-toko'>" . htmlspecialchars($parts[0]) . "</span>";
                echo "<br>";
                echo "<span class='alamat-toko'>" . htmlspecialchars(trim($parts[1])) . "</span>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>



    <!-- Footer -->
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
