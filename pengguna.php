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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Data Pengguna - Khanny Dental</title>
    <script>
    function showXxxConfirm(idLogin) {
        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Menghapus Akun ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Berhasil Dihapus!",
                    icon: "success",
                    confirmButtonText: "OK",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location = 'pengguna.php?delete=success&idLogin=' + idLogin;
                    }
                }); // Redirect or perform action if user confirms
            }
        });
    }
    </script>
</head>

<body>
    <!-- Awal Header -->
    <?php 
    require "koneksi.php";
    
if (isset($_GET['delete']) && $_GET['delete'] === 'success') {
    if (isset($_GET['idLogin'])) {
        $idLogin = mysqli_real_escape_string($conn, $_GET['idLogin']);

        $query = "DELETE FROM user WHERE idLogin = '$idLogin'";
        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            header("Location: pengguna.php");
            exit();
        } else {
            echo "Gagal menghapus pengguna.";
        }
    } else {
        echo "Parameter idLogin tidak valid.";
    }
}

    ?>
    <?php 
    require "header2.php";
    ?>
    <!-- Akhir Header -->

    <!-- Awal Tabel -->
    <section class="pengguna">
        <h1 class="heading-title"> daftar user </h1>
        <div class="container">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th><i class="fa-brands fa-whatsapp"></i></th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php
        require "koneksi.php";
        $sql="select * from user";

        $hasil=mysqli_query($conn,$sql);
        while ($data = mysqli_fetch_array($hasil)) {

            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data["idLogin"];?></td>
                            <td><?php echo $data["username"]; ?></td>
                            <td><?php echo $data["nama"];   ?></td>
                            <td><?php echo $data["email"];   ?></td>
                            <td><?php echo $data["noWA"];   ?></td>
                            <td>
                                <div class="tombol">
                                    <a href="#" class="btn" id="hapus"
                                        onclick="showXxxConfirm('<?php echo $data['idLogin']; ?>')">
                                        <i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                    </tbody>
                    <?php
        }
        ?>
                </table>
                <a href="regis.php" class="btn">Tambah Data</a>
            </div>
        </div>
    </section>



    <!-- Akhir Tabel -->