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
    <title>Paket - Khanny Dental</title>
</head>

<body>
    <!-- Awal Header -->
    <?php 
    require "header.php";
    ?>
    <!-- Akhir Header -->

    <div class="heading" style="background: url(../DentalWebPHP/assets/pict/fasilitas5.jpg) no-repeat;">
        <h1>Paket</h1>
    </div>

    <!-- Awal Paket -->
    <section class="packages">
        <h1 class="heading-title">top services</h1>
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
                        prosedur pencabutan gigi yang aman dan nyaman!</p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn2">book now</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/pict/servis5.jpg" alt="">
                </div>
                <div class="content">
                    <h3> pembersihan gigi </h3>
                    <p>Nikmati kesegaran dan kebersihan mulut dengan layanan pembersihan gigi profesional di Khanny
                        Dental. Dapatkan senyum yang lebih cerah dan bersih hari ini!</p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn3">book now</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/pict/servis4.jpg" alt="">
                </div>
                <div class="content">
                    <h3> tambal gigi </h3>
                    <p>Dapatkan solusi cepat dan nyaman untuk masalah gigi berlubang dengan layanan tambal gigi terbaik
                        di Khanny Dental. Kembalikan senyum Anda dengan percaya diri</p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn4">book now</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/pict/servis3.jpg" alt="">
                </div>
                <div class="content">
                    <h3> gigi palsu </h3>
                    <p>Dapatkan senyuman sempurna yang tampak alami dengan gigi palsu berkualitas tinggi dari Khanny
                        Dental. Bicaralah dengan kami tentang opsi gigi palsu yang cocok untuk Anda!</p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn5">book now</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/pict/servis14.jpg" alt="">
                </div>
                <div class="content">
                    <h3> implan gigi </h3>
                    <p>Nikmati kembali rasa percaya diri dan kenyamanan makan dengan implan gigi mutakhir dari Khanny
                        Dental. Temukan solusi permanen untuk gigi hilang Anda hari ini!</p>
                    <?php 
                    if(isset($_SESSION['user_username'])){
                        echo '<a href="book.php" class="btn">book now</a>';
                    } else {
                        echo '<a class="btn" id = "loginBtn6">book now</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="load-more"><span class="btn">load more</span></div>
    </section>
    <!-- Akhir Paket -->
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

    document.getElementById('loginBtn4').addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Tidak Bisa Booking!',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });

    document.getElementById('loginBtn5').addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Tidak Bisa Booking!',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });

    document.getElementById('loginBtn6').addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Tidak Bisa Booking!',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });
    </script>

    <!-- Awal Footer -->
    <?php 
    require "footer.php";
    ?>
    <!-- Akhir Footer -->