<?php 
session_start();
require "koneksi.php";

$dental = array("dental");

if(!isset($_SESSION['user_username']) || !in_array($_SESSION['user_username'], $dental)){
    header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="x-icon" href="assets/icon/gigi1.ico">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Admin - Khanny Dental</title>
</head>

<body>
    <!-- Awal Header -->
    <?php 
    require "header2.php";
    ?>
    <!-- Akhir Header -->

    <!-- Awal Home Admin -->


    <section class="admin">
        <h1 class="heading-title">request</h1>
        <?php
            require "koneksi.php";
            $query = "SELECT * FROM booking WHERE status = 'P'";
            $hasil = mysqli_query($conn, $query);
            if(mysqli_num_rows($hasil) > 0){
            while ($data = mysqli_fetch_array($hasil)){
            ?>
        <div class="content">
            <p>Permintaan <span><?= $data['jenispelayanan']?></span> dari <?= $data['nama']?> Lihat ke <a
                    href="pasien.php" class="page">Halaman Data Pasien</a></p>
        </div>
        <?php }
        } else {
            echo "<h2>Tidak Ada Permintaan dari Pasien/Pengguna</h2>";
        } ?>
    </section>




    <!-- Akhir Home Admin -->