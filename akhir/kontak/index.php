<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="kontak.css">
</head>
<body>

    <!-- Navbar -->
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

    <!-- Contact Form -->
    <div class="contact-container">
        <div class="contact-left">
            <h1>CONTACT</h1>
            <a href="" class="send-link">
                <div class="send-button">
                    <span class="send-text">KIRIM</span>
                    <div class="icon-container">
                        <img src="../foto/send-1.png" >
                    </div>
                </div>
            </a>

            <address>
                Perumahan Buaran Indah,<br>
                Jalan Pelita I No.322,<br>
                Jenggot, Pekalongan Selatan,<br>
                Jenggot, Kec. Pekalongan Sel.,<br>
                Kota Pekalongan, Jawa Tengah 51133
            </address>
        </div>
        <div class="contact-right">
            <form>
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name">
                
                <label>Address</label>
                <input type="text" name="address" placeholder="Your Address">
                
                <label>Email</label>
                <input type="email" name="email" placeholder="Your Email">
                
                <label>Phone</label>
                <input type="tel" name="phone" placeholder="Your Phone Number">
                
                <label>Pesan</label>
                <textarea name="message" placeholder="Your Message"></textarea>
            </form>
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