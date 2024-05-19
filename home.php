<?php 
    require "koneksi.php";
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="x-icon" href="assets/icon/gigi1.ico">
    <title>Khanny Dental - Praktek Dokter Gigi Terbaik</title>
</head>


<body>
    <!-- Awal Header -->

    <?php 
    require "header.php"; 
    ?>

    <!-- Akhir Header -->

    <!-- Awal Home -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"
                    style="background: url(../PROJECTAKHIR/assets/pict/gambar6.jpg) no-repeat; ">
                    <div class="content">
                        <span>professional dentists</span>
                        <h3>Ditangani oleh Dokter Gigi Terbaik</h3>
                        <a href="paket.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                    style="background: url(../PROJECTAKHIR/assets/pict/gambar4.jpg) no-repeat; ">
                    <div class="content">
                        <span>modern dental tools</span>
                        <h3>Fasilitas Modern dan Higienis</h3>
                        <a href="paket.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                    style="background: url(../PROJECTAKHIR/assets/pict/gambar5.jpg) no-repeat; ">
                    <div class="content">
                        <span>comprehensive dental services</span>
                        <h3>layanan kesehatan gigi lengkap</h3>
                        <a href="paket.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Akhir Home -->

    <!-- Awal Layanan -->
    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">
            <div class="box">
                <img src="assets/pict/servis7.jpg" alt="">
                <h3> pasang behel </h3>
            </div>
            <div class="box">
                <img src="assets/pict/servis13.jpg" alt="">
                <h3> cabut gigi </h3>
            </div>
            <div class="box">
                <img src="assets/pict/dokgi.png" alt="">
                <h3> pembersihan gigi </h3>
            </div>
            <div class="box">
                <img src="assets/pict/servis9.jpg" alt="">
                <h3> gigi palsu </h3>
            </div>
            <div class="box">
                <img src="assets/pict/servis12.jpg" alt="">
                <h3> tambal gigi </h3>
            </div>
            <div class="box">
                <img src="assets/pict/servis11.jpg" alt="">
                <h3> implan </h3>
            </div>
        </div>
    </section>
    <!-- Akhir Layanan -->

    <!-- Mulai Home about -->
    <section class="home-about">
        <div class="image">
            <img src="assets/pict/fasilitas1.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Khanny Dental merupakan praktek dokter gigi yang dipimpin oleh seorang dokter gigi muda dokter gigi muda
                perempuan yang terbaik di kampusnya. Dengan dedikasi yang tinggi terhadap profesinya, Khanny Dental
                menawarkan pelayanan yang unggul dan berorientasi pada kepuasan pasien. Di sini, Anda akan menemukan
                pengalaman
                berobat yang ramah, nyaman, dan dipandu oleh praktik yang inovatif serta teknologi terkini. Setiap
                pasien diperlakukan secara individual, dengan perhatian khusus terhadap kebutuhan dan preferensi mereka.
                Khanny Dental bertekad untuk memberikan layanan yang berkualitas tinggi, memastikan setiap kunjungan
                Anda meninggalkan senyum yang mempesona dan rasa percaya diri yang tinggi.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <!-- Akhir Home about -->

    <!-- Awal Home paket -->
    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/pict/servis1.jpg" alt="">
                </div>
                <div class="content">
                    <h3> pemasangan behel </h3>
                    <p>Dapatkan senyum yang indah dan percaya diri dengan pemasangan behel di Khanny Dental!</p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn">book now</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/pict/gambar1.jpg" alt="">
                </div>
                <div class="content">
                    <h3> cabut gigi </h3>
                    <p>Merasa nyeri atau mengalami masalah dengan gigi Anda? Percayakan pada kami di Khanny Dental untuk
                        prosedur pencabutan gigi yang aman dan nyaman!
                    </p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn2">book now</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="paket.php" class="btn">see more</a></div>
    </section>
    <!-- Akhir Home paket -->

    <!-- Awal Home offer -->
    <section class="home-offer">
        <div class="content">
            <h3>only <span>250k</span></h3>
            <h2> Cek Kesehatan Gigi dan Mulut serta Bersihkan Karang Gigi Anda! </h2>
            <p>Dapatkan pemeriksaan kesehatan gigi dan mulut menyeluruh di Khanny Dental, dan bersihkan karang gigi Anda
                untuk senyum yang lebih bersinar dan kesehatan mulut yang optimal! Kunjungi kami hari ini dan rasakan
                perbedaannya.</p>
            <?php 
            if(isset($_SESSION['user_username'])){
                    echo '<a href="book.php" class="btn">book now</a>';
            } else {
                    echo '<a class="btn" id = "loginBtn3">book now</a>';
            }
                    ?>
        </div>
    </section>
    <!-- Akhir Home offer -->

    <!-- Awal Footer -->

    <?php 
    require "footer.php";
    ?>

    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
    document.getElementById('loginBtn').addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Tidak Bisa Booking!',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });

    document.getElementById('loginBtn2').addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Tidak Bisa Booking!',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });

    document.getElementById('loginBtn3').addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Tidak Bisa Booking!',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });
    </script>