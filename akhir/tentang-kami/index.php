<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kami.css">
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

    <div class="tentang-kami">
        <h1>Tentang Kami</h1>
        <img src="../foto/expand-button1.png" alt="expand button">
        <p>Selamat datang di Laptop Spot, toko online yang menyediakan berbagai macam laptop berkualitas dari merek-merek ternama. Kami berdedikasi untuk memberikan solusi teknologi yang tepat bagi setiap pelanggan, mulai dari pelajar, profesional, hingga pengguna dengan kebutuhan gaming.</p>
        
        <p class="subjudul">Visi Kami</p>
        <p>Menjadi toko laptop terpercaya di Indonesia yang menyediakan produk-produk berkualitas dengan harga terbaik, serta memberikan pengalaman berbelanja online yang mudah, aman, dan nyaman.</p>
        
        <p class="subjudul">Misi Kami</p>
        <p>Menyediakan laptop dengan spesifikasi terkini yang memenuhi kebutuhan berbagai kalangan, baik untuk kebutuhan pendidikan, pekerjaan, atau hiburan. Memberikan layanan pelanggan yang responsif dan ramah, memastikan setiap pembelian Anda berjalan lancar. Menjaga kepuasan pelanggan dengan menjual hanya produk-produk asli bergaransi resmi. Menyediakan konsultasi dan rekomendasi produk terbaik sesuai dengan kebutuhan dan anggaran pelanggan. Terus berinovasi dalam memberikan pengalaman belanja yang cepat, mudah, dan aman melalui platform online kami.</p>
        
        <p class="subjudul">Mengapa Memilih Kami?</p>
        <p>Kami memahami bahwa setiap orang memiliki kebutuhan dan preferensi yang berbeda dalam memilih laptop. Oleh karena itu, tim kami siap membantu Anda menemukan produk yang paling sesuai dengan kebutuhan Anda, baik itu laptop untuk bekerja, bermain game, atau belajar. Dengan koleksi laptop yang selalu diperbarui dan didukung dengan layanan purna jual yang terpercaya, kami berkomitmen untuk menjadi mitra teknologi terbaik bagi Anda.</p>
    </div>

    <div class="stats-section">
    <div class="stat-item">
        <h2>+ 184.084</h2>
        <p>Telah Dikunjungi</p>
    </div>
    <div class="stat-separator"></div>
    <div class="stat-item">
        <h2>+ 174.074</h2>
        <p>Produk Terjual</p>
    </div>
    <div class="stat-separator"></div>
    <div class="stat-item">
        <h2>2.480/5</h2>
        <p>Ulasan Rating</p>
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
                    <li><a href="../toko-offline/index.php" class="<?= (strpos($_SERVER['REQUEST_URI'], 'toko-offline') !== false) ? 'active' : '' ?>">Toko Offline</a></li>
                    <li><a href="#">Testimoni</a></li>
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
