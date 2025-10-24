<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!$name) $errors[] = "Nama harus diisi.";
    if (!$email) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    if (!$phone) $errors[] = "Nomor telepon harus diisi.";
    if (!$message) $errors[] = "Pesan harus diisi.";

    if (empty($errors)) $success = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan - Delicia Cakes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-flex">
            <h1 class="logo"><a href="index.php">Delicia Cakes</a></h1>
            <nav>
                <ul class="nav">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="pemesanan.php" class="active">Pemesanan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="contact-page">
        <div class="container">
            <h2>Pemesanan</h2>

            <?php if ($success): ?>
                <div class="alert success">Terima kasih! Pesan Anda telah kami terima. Kami akan segera menghubungi Anda.</div>
            <?php elseif (!empty($errors)): ?>
                <div class="alert error">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="contact-wrapper">
                <section class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <div class="info-item"><span class="icon">📍</span> Jl. Pastry No. 123<br>Kota Manis, 12345</div>
                    <div class="info-item"><span class="icon">📞</span> 0812-3456-7890</div>
                    <div class="info-item"><span class="icon">📧</span> order@sweetdelights.com</div>
                    <div class="info-item"><span class="icon">⏰</span> Senin - Sabtu<br>09:00 - 20:00</div>
                </section>

                <form class="contact-form" method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name ?? '') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone ?? '') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" required><?= htmlspecialchars($message ?? '') ?></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>

            <section class="order-guide">
                <h3>Panduan Pemesanan</h3>
                <div class="steps">
                    <div class="step">
                        <div class="number">1</div>
                        <h4>Pilih Kue</h4>
                        <p>Pilih kue dari menu kami atau request desain khusus.</p>
                    </div>
                    <div class="step">
                        <div class="number">2</div>
                        <h4>Isi Form</h4>
                        <p>Lengkapi form pemesanan dengan detail yang diperlukan.</p>
                    </div>
                    <div class="step">
                        <div class="number">3</div>
                        <h4>Konfirmasi</h4>
                        <p>Kami akan menghubungi Anda untuk konfirmasi pesanan.</p>
                    </div>
                    <div class="step">
                        <div class="number">4</div>
                        <h4>Selesai</h4>
                        <p>Tunggu pesanan Anda siap sesuai waktu yang ditentukan.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Delicia Cakes</h3>
                    <p>Membuat momen Anda lebih manis sejak 2020.</p>
                </div>
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <p>📞 0812-3456-7890<br>📧 order@deliciacakes.com</p>
                </div>
                <div class="footer-section">
                    <h3>Jam Buka</h3>
                    <p>Senin - Sabtu<br>09:00 - 20:00</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Delicia Cakes. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>