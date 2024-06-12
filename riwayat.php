<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="x-icon" href="assets/icon/gigi1.ico">
    <title>Riwayat Booking - Khanny Dental</title>
</head>


<body>

    <!-- Awal Header -->

    <?php 
    require "header.php";
    if(!isset($_SESSION['user_username'])){
        header("location: home.php");
    }
    ?>

    <!-- Akhir Header -->

    <div class="heading" style="background: url(../DentalWebPHP/assets/pict/gambar7.jpg) no-repeat;">
        <h1>Riwayat</h1>
    </div>

    <!-- Awal Riwayat -->
    <section class="riwayat">
        <div class="container">
            <h1 class="heading-title">riwayat booking</h1>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th><i class="fa-brands fa-whatsapp"></i></th>
                            <th>Tanggal Booking</th>
                            <th>Jam</th>
                            <th>Jenis Layanan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <?php
        require "koneksi.php";
        if(isset($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'];
        }
        $sql="select * from booking WHERE user_id = ? order by tglJanji";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($data = mysqli_fetch_array($result)) {

            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data["id"];                ?></td>
                            <td><?php echo $data["nama"];              ?></td>
                            <td><?php echo $data["nik"];               ?></td>
                            <td><?php echo $data["tglLahir"];          ?></td>
                            <td><?php echo $data["alamat"];            ?></td>
                            <td><?php echo $data["jk"];                ?></td>
                            <td><?php echo $data["noWA"];              ?></td>
                            <td><?php echo $data["tglJanji"];          ?></td>
                            <td><?php echo $data["jam"];               ?></td>
                            <td><?php echo $data["jenispelayanan"];    ?></td>
                            <td>
                                <div class="status"> <?= $data["status"] === 'P' ? '<i class="fa-solid fa-hourglass-half" id = pending></i>'
                            : ($data ["status"] === 'R' ? '<i class="fa-solid fa-xmark" id = reject></i>'
                            :'<i class="fa-solid fa-check" id = app></i>')?>
                                </div>
                            </td>
                            <td><?php echo $data["pesan"];                ?></td>
                        </tr>
                    </tbody>
                    <?php
        }
        ?>
                </table>
            </div>
            <div class="keterangan">
                <p>Keterangan</p>
                <p><i class="fa-solid fa-hourglass-half" id="pending"></i> Menunggu Persetujuan Admin atau Dokter</p>
                <p><i class="fa-solid fa-xmark" id="reject"></i> Tidak Disetujui Admin atau Dokter. Silakan cari jadwal
                    lain atau hubungi admin!</p>
                <p><i class="fa-solid fa-check" id="app"></i> Disetujui Admin atau Dokter. Silakan datang sesuai jadwal
                    booking!</p>

            </div>
        </div>
    </section>
    <!-- Akhir Riwayat -->

</body>

<!-- Awal Footer -->

<?php 
    require "footer.php";
?>

<!-- Akhir Footer -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>