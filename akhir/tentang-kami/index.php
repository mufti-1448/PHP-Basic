<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="kami.css">
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

    <div class="tentang-kami">
        <h1>About Us</h1>
        <img src="../foto/expand-button1.png" alt="expand button">
        <p>Welcome to Laptop Spot, an online store that offers a wide range of quality laptops from renowned brands. We are dedicated to providing the right technology solutions for every customer, from students and professionals to users with gaming needs.</p>
        
        <p class="subjudul">Our Vision</p>
        <p>To be the trusted laptop store in Indonesia that provides quality products at the best prices, while delivering a convenient, safe, and comfortable online shopping experience.</p>
        
        <p class="subjudul">Our Mission</p>
        <p>To provide laptops with the latest specifications that meet the needs of various segments, whether for educational, work, or entertainment purposes. To offer responsive and friendly customer service, ensuring that every purchase goes smoothly. To maintain customer satisfaction by selling only genuine products with official warranties. To provide consultations and recommendations for the best products according to customer needs and budgets. To continuously innovate in providing a fast, easy, and secure shopping experience through our online platform.</p>
        
        <p class="subjudul">Why Choose Us?</p>
        <p>We understand that everyone has different needs and preferences when choosing a laptop. Therefore, our team is ready to assist you in finding the product that best suits your needs, whether it's a laptop for work, gaming, or study. With a constantly updated collection of laptops and supported by reliable after-sales service, we are committed to being your best technology partner.</p>
    </div>

    <div class="stats-section">
        <div class="stat-item">
            <h2>+ 184,084</h2>
            <p>Visited</p>
        </div>
        <div class="stat-separator"></div>
        <div class="stat-item">
            <h2>+ 174,074</h2>
            <p>Products Sold</p>
        </div>
        <div class="stat-separator"></div>
        <div class="stat-item">
            <h2>2,480/5</h2>
            <p>Review Rating</p>
        </div>
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
