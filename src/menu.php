<?php
$menu_items = [
    'cakes' => [
        ['name' => 'Classic Chocolate', 'price' => '280.000', 'description' => 'Kue coklat lembut dengan lapisan ganache', 'image' => 'Classic Chocolate Cake.jpg'],
        ['name' => 'Red Velvet', 'price' => '300.000', 'description' => 'Kue red velvet dengan cream cheese frosting', 'image' => 'Red Velvet.jpg'],
        ['name' => 'Rainbow Celebration', 'price' => '350.000', 'description' => 'Kue pelangi 6 lapis dengan butter cream', 'image' => 'Rainbow Celebration.jpg'],
        ['name' => 'Wedding Special', 'price' => '1.200.000', 'description' => 'Kue pernikahan mewah dengan hiasan elegant', 'image' => 'Wedding Special.jpg']
    ],
    'cupcakes' => [
        ['name' => 'Vanilla Cupcake', 'price' => '25.000', 'description' => 'Cupcake vanila dengan topping butter cream', 'image' => 'Vanilla Cupcake.jpg'],
        ['name' => 'Chocolate Cupcake', 'price' => '25.000', 'description' => 'Cupcake coklat dengan topping coklat', 'image' => 'Chocolate Cupcake.jpg'],
        ['name' => 'Red Velvet Cupcake', 'price' => '30.000', 'description' => 'Cupcake red velvet dengan cream cheese', 'image' => 'Red Velvet Cupcake.jpg']
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Delicia Cakes</title>
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
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="menu.php" class="active">Menu</a></li>
                    <li><a href="contact.php">Pemesanan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="menu-page">
        <div class="container">
            <h2>Menu Kami</h2>
            
            <div class="menu-section">
                <h3>Kue Spesial</h3>
                <div class="products-grid">
                    <?php foreach($menu_items['cakes'] as $cake): ?>
                    <div class="product-card" data-price="<?= $cake['price'] ?>">
                        <div class="product-image">
                            <img src="assets/images/<?= $cake['image'] ?>" alt="<?= $cake['name'] ?>">
                        </div>
                        <div class="product-info">
                            <h3><?= $cake['name'] ?></h3>
                            <p class="description"><?= $cake['description'] ?></p>
                            <p class="price">Rp <?= $cake['price'] ?></p>
                            <button class="btn order-btn">Pesan</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-section">
                <h3>Cupcakes</h3>
                <div class="products-grid">
                    <?php foreach($menu_items['cupcakes'] as $cupcake): ?>
                    <div class="product-card" data-price="<?= $cupcake['price'] ?>">
                        <div class="product-image">
                            <img src="assets/images/<?= $cupcake['image'] ?>" alt="<?= $cupcake['name'] ?>">
                        </div>
                        <div class="product-info">
                            <h3><?= $cupcake['name'] ?></h3>
                            <p class="description"><?= $cupcake['description'] ?></p>
                            <p class="price">Rp <?= $cupcake['price'] ?></p>
                            <button class="btn order-btn">Pesan</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <section class="custom-order">
                <h3>Pesanan Khusus</h3>
                <p>Ingin kue dengan desain khusus? Kami siap membantu mewujudkan keinginan Anda.</p>
                <a href="pemesanan.php" class="btn">Hubungi Kami</a>
            </section>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Delicia Cakes</h3>
                    <p>Membuat momen Anda lebih manis sejak 2020</p>
                </div>
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <p>📞 0812-3456-7890<br>
                    📧 order@deliciacakes.com</p>
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