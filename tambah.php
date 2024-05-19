<?php 
    session_start();
    require "koneksi.php";
    if(!isset($_SESSION['user_username'])){
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="x-icon" href="assets/icon/gigi1.ico">
    <title>Booking by Admin - Khanny Dental</title>
</head>

<body>
    <div class="heading" style="background: url(../PROJECTAKHIR/assets/pict/fasilitas6.jpg) no-repeat;">
        <h1>Booking</h1>
    </div>

    <!-- Awal booking -->
    <section class="booking">
        <h1 class="heading-title">isi data pasien</h1>
        <form action="" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>nama</span>
                    <input type="text" placeholder="masukan nama pasien" name="nama" required>
                </div>
                <div class="inputbox">
                    <span>nomor Whatsapp</span>
                    <input type="text" placeholder="masukan nomor Whatsapp pasien" name="noWa" required>
                </div>
                <div class="inputbox">
                    <span>NIK (Nomor Induk Kependudukan)</span>
                    <input type="text" placeholder="masukan NIK pasien" name="nik" required>
                </div>
                <div class="inputbox">
                    <span>alamat</span>
                    <input type="text" placeholder="masukan alamat pasien" name="alamat" required>
                </div>
                <div class="inputbox">
                    <span>tanggal lahir</span>
                    <input type="date" name="tglLahir" required>
                </div>
                <div class="inputbox">
                    <span>jenis kelamin</span>
                    <select id="jeniskelamin" name="jk" required>
                        <option value="" disabled selected hidden>---Pilih Jenis Kelamin---</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span>tanggal booking</span>
                    <input type="date" name="tglJanji" id="tglJanji" min="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="inputbox">
                    <span>jam</span>
                    <select id="jam" name="jam" required>
                        <option value="" disabled selected hidden>---Pilih Jam yang Diinginkan---</option>
                        <option value="16.00-17.00">16.00-17.00</option>
                        <option value="17.00-18.00">17.00-18.00</option>
                        <option value="18.00-19.00">18.00-19.00</option>
                        <option value="19.00-20.00">19.00-20.00</option>
                        <option value="20.00-21.00">20.00-21.00</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span>jenis pelayanan</span>
                    <select id="jenispelayanan" name="jenispelayanan" required>
                        <option value="" disabled selected hidden>---Pilih Jenis Pemeriksaan yang Diinginkan---</option>
                        <option value="Promo 250K">Promo 250K</option>
                        <option value="Pasang Behel">Pasang Behel</option>
                        <option value="Cabut Gigi">Cabut Gigi</option>
                        <option value="Pembersihan Karang Gigi">Pembersihan Karang Gigi</option>
                        <option value="Pembuatan Gigi Palsu">Pembuatan Gigi Palsu</option>
                        <option value="Tambal Gigi">Tambal Gigi</option>
                        <option value="Implan Gigi">Implan Gigi</option>
                    </select>
                </div>
            </div>
            <label>
                <input type="checkbox" required />Informasi di atas sudah
                benar
            </label>
            <div class="tombol">
                <a href="pasien.php" class="btn" id="back">Kembali</a>
                <input type="submit" name="send" value="submit" class="btn" id="btn">
            </div>
        </form>
        <?php 
if(isset($_POST['send'])){
    $nama = $_POST['nama'];
    $noWa = $_POST['noWa'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $tglLahir = $_POST['tglLahir'];
    $jk = $_POST['jk'];
    $tglJanji = $_POST['tglJanji'];
    $jam = $_POST['jam'];
    $jenispelayanan = $_POST['jenispelayanan'];

    // Buat ID pemesanan
    $id_booking = "P" . str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT); 

    // Masukkan data ke dalam tabel booking
    $sql_booking = "INSERT INTO booking (id, nama, noWa, nik, alamat, tglLahir, jk, tglJanji, jam, jenispelayanan, status, user_id) 
                    VALUES ('$id_booking','$nama','$noWa','$nik','$alamat','$tglLahir','$jk', '$tglJanji', '$jam', '$jenispelayanan','P', 1)";
    $hasil_booking = mysqli_query($conn, $sql_booking);

    if ($hasil_booking) {
        echo '<script>
                Swal.fire({
                icon: "success",
                title: "Berhasil Booking!",
                text: "Silakan Lihat Riwayat Booking Anda!"
                });</script>';
    } else {
        echo '<script>
        Swal.fire({
        icon: "error",
        title: "Gagal Booking!",
        text: "Silakan Lihat Cek Kembali Data Anda atau Lapor ke Admin!"
        });</script>';
    }
}
?>
    </section>

    <!-- Akhir booking -->