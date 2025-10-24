<?php
$featured_items = [
    ['name' => 'Classic Chocolate Cake', 'price' => '280.000', 'image' => 'Classic Chocolate Cake.jpg'],
    ['name' => 'Rainbow Celebration', 'price' => '350.000', 'image' => 'Rainbow Celebration.jpg'],
    ['name' => 'Wedding Special', 'price' => '1.200.000', 'image' => 'Wedding Special.jpg']
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicia Cakes - Toko Kue Artisan</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/main.js" defer></script>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1 class="logo"><a href="index.php">Delicia Cakes</a></h1>
            <nav>
                <ul class="nav">
                    <li><a href="index.php" class="active">Beranda</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="pemesanan.php">Pemesanan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2 class="fade-in">Kue Artisan untuk Momen Spesial</h2>
                    <p class="fade-in">Dibuat dengan cinta, disajikan dengan keindahan</p>
                    <a href="menu.php" class="btn fade-in">Lihat Menu Kami</a>
                </div>
            </div>
        </section>

        <section class="featured container">
            <h2>Menu Favorit</h2>
            <div class="products-grid">
                <?php foreach($featured_items as $item): ?>
                <div class="product-card" data-price="<?= $item['price'] ?>">
                    <div class="product-image">
                        <img src="assets/images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                    </div>
                    <div class="product-info">
                        <h3><?= $item['name'] ?></h3>
                        <p class="price">Rp <?= $item['price'] ?></p>
                        <button class="btn order-btn">Pesan Sekarang</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="specialties">
            <div class="container">
                <h2>Spesialisasi Kami</h2>
                <div class="specialty-grid">
                    <div class="specialty-card">
                        <div class="icon">🎂</div>
                        <h3>Kue Ulang Tahun</h3>
                        <p>Desain khusus sesuai keinginan Anda</p>
                    </div>
                    <div class="specialty-card">
                        <div class="icon">👰</div>
                        <h3>Kue Pernikahan</h3>
                        <p>Elegan dan memukau untuk hari spesial</p>
                    </div>
                    <div class="specialty-card">
                        <div class="icon">🧁</div>
                        <h3>Cupcakes</h3>
                        <p>Manis dalam ukuran mini</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery container">
            <h2>Galeri Kreasi</h2>
            <div class="gallery-container" id="imageGallery">
                <div class="gallery-main">
                    <img src="assets/images/Wedding Special.jpg" alt="Wedding Special Cake" class="active">
                    <img src="assets/images/Classic Chocolate Cake.jpg" alt="Classic Chocolate Cake">
                    <img src="assets/images/Rainbow Celebration.jpg" alt="Rainbow Celebration Cake">
                </div>
                <div class="gallery-nav">
                    <button class="prev">◀</button>
                    <div class="gallery-dots"></div>
                    <button class="next">▶</button>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <h2>Apa Kata Pelanggan</h2>
                <div class="testimonial-slider" id="testimonialSlider">
                    <div class="testimonial active">
                        <p>"Kue terindah yang pernah saya pesan untuk pernikahan kami. Rasanya sesuai dengan penampilannya - sempurna!"</p>
                        <cite>- Sarah & John</cite>
                    </div>
                    <div class="testimonial">
                        <p>"Cupcakes-nya selalu jadi favorit di setiap acara kantor. Terima kasih Sweet Delights!"</p>
                        <cite>- PT. Creative Media</cite>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Sweet Delights</h3>
                    <p>Membuat momen Anda lebih manis sejak 2020</p>
                </div>
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <p>📞 0812-3456-7890<br>
                    📧 order@sweetdelights.com</p>
                </div>
                <div class="footer-section">
                    <h3>Jam Buka</h3>
                    <p>Senin - Sabtu<br>
                    09:00 - 20:00</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Delicia Cakes. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>