<?php 
session_start();
require "koneksi.php";

$dental = array("dental");

if(!isset($_SESSION['user_username']) || !in_array($_SESSION['user_username'], $dental)){
    header("location: home.php");
    exit(); // Pastikan kode berhenti setelah pengalihan header
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
    <script>
    function showAccConfirm(id) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menyetujui?',
            icon: 'question',
            text: "Pastikan Sudah Cek Jadwal Dokter!",
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Berhasil Disetujui!",
                    text: "Jadwal Sudah Disetujui!",
                    icon: "success",
                    confirmButtonText: "OK",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = 'edit.php?id=' + id + '&status=Y';
                    }
                }); // Redirect or perform action if user confirms

            }
        });
    }

    function showXxxConfirm(id) {
        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Menolak?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Berhasil Ditolak!",
                    icon: "success",
                    confirmButtonText: "OK",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = 'edit.php?id=' + id + '&status=R';
                    }
                }); // Redirect or perform action if user confirms
            }
        });
    }
    </script>

    <title>Data Pasien - Khanny Dental</title>
</head>

<body>
    <!-- Awal Header -->
    <?php 
    require "koneksi.php";
    require "header2.php";
    ?>

    <!-- Akhir Header -->

    <!-- Awal Tabel -->
    <section class="pasien">
        <h1 class="heading-title"> daftar pasien </h1>
        <div class="container">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th><i class="fa-brands fa-whatsapp"></i></th>
                            <th>Tanggal Booking</th>
                            <th>Jam</th>
                            <th>Jenis Pelayann</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require "koneksi.php";
                        $sql="select * from booking order by tglJanji";

                        $hasil=mysqli_query($conn,$sql);
                        while ($data = mysqli_fetch_array($hasil)) {
                        ?>
                        <tr>
                            <td><?php echo $data["id"];?></td>
                            <td><?php echo $data["user_id"];?></td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["nik"];   ?></td>
                            <td><?php echo $data["jk"];   ?></td>
                            <td><?php echo $data["noWA"];   ?></td>
                            <td><?php echo $data["tglJanji"];   ?></td>
                            <td><?php echo $data["jam"];   ?></td>
                            <td><?php echo $data["jenispelayanan"];   ?></td>
                            <td>
                                <div class="status"> <?= $data["status"] === 'P' ? '<i class="fa-solid fa-hourglass-half" id = pending></i>'
                            : ($data ["status"] === 'R' ? '<i class="fa-solid fa-xmark" id = reject></i>'
                            :'<i class="fa-solid fa-check" id = app></i>')?>
                                </div>
                            </td>
                            <td>
                                <?php 
                                if($data['status'] == 'P'){
                                ?>
                                <div class="tombol">
                                    <a href="#" class="btn" id="acc"
                                        onclick="showAccConfirm('<?php echo $data['id']; ?>', 'Y')"><i
                                            class="fa-regular fa-thumbs-up"></i> Accept</a>
                                    <a href="#" class="btn" id="xxx"
                                        onclick="showXxxConfirm('<?php echo $data['id']; ?>', 'R')"><i
                                            class="fa-regular fa-circle-xmark"></i> Reject</a>
                                </div>
                                <?php } ?>
                            </td>
                            <td>
                                <?php 
                                // Periksa apakah pesan sudah ada dan statusnya 'R'
                                if ($data['status'] == 'R') {
                                    if (!empty($data["pesan"])) {
                                    // Jika pesan sudah ada, tampilkan pesan
                                        echo $data["pesan"];
                                    } else {
                                    // Jika pesan belum ada, tampilkan formulir untuk menambahkan keterangan
                                ?>
                                <form action="pesan.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <textarea name="pesan" placeholder="Tambahkan keterangan di sini..."></textarea>
                                    <button type="submit" name="submit" value="submit" class="btn"
                                        id="btn">Submit</button>
                                </form>
                                <?php 
                                    }
                                } else {
                                // Jika status bukan 'R', tampilkan pesan kosong
                                    echo "-";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="tambah.php" class="btn">Tambah Data</a>
            </div>
        </div>
    </section>
    <!-- Akhir Tabel -->

</body>

</html>