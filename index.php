<?php include "config/database.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Website Untuk Mama</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    <div class="hero">
        <header>

            <div class="name-logo">
                <img src="images/logo.png" class="logo">
                <h1>Cemilan Dikenzi</h1>
            </div>

            <nav>
                <p><a href="#home">Home</a></p>
                <p><a href="#menu">Menu</a></p>
                <p><a href="#contact">Contact</a></p>
            </nav>

        </header>

        <section class="home" id="home">

            <h2>Selamat Datang di Cemilan Dikenzi</h2>
            <p>Rasa Juara, Cemilan Keluarga</p>

        </section>
    </div>

    <section class="menu" id="menu">

        <h2 class="menu-title">Our Menu</h2>

        <div class="menu-container">

            <?php
            $data = mysqli_query($conn, "SELECT * FROM menu");

            while ($menu = mysqli_fetch_assoc($data)) {
                ?>

                <div class="menu-card">

                    <img src="images/menu/<?php echo $menu['gambar']; ?>">

                    <h3><?php echo $menu['nama_menu']; ?></h3>

                    <p><?php echo $menu['deskripsi']; ?></p>

                </div>

            <?php } ?>

        </div>

    </section>


    <section class="contact" id="contact">

        <div class="contact-box">

            <h2 class="contact-title">Contact Us</h2>

            <p class="contact-desc">
                Ingin memesan cemilan dari Cemilan Dikenzi?
                Silakan hubungi kami atau klik tombol di bawah
                untuk langsung memesan melalui WhatsApp.
            </p>

            <div class="contact-info">
                <p><strong>Pemilik:</strong> Yuni Dikenzi</p>
                <p><strong>WhatsApp:</strong> 0819-1794-1441</p>
                <p><strong>Jam Buka:</strong> 10:00 AM – 3:00 PM</p>
            </div>

            <a href="https://wa.me/6281917941441?text=halo%20mba,%20mau%20Cemilannya%20dong!%0A%0ANama%20Pemesan:%0AAlamat:%0AJenis%20Pesanan:%0AJumlah%20Pesanan:"
                class="order-button" target="_blank">
                Order Now
            </a>

        </div>

    </section>

    <footer class="footer">
        <p>© 2026 Cemilan Dikenzi</p>
    </footer>

    <a href="admin/login.php" class="admin-login">Admin</a>

</body>

</html>