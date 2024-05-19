<?php 
session_start();
require "koneksi.php";

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section class="header">
    <a href="home.php" class="logo">Khanny Dental</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="paket.php">Paket</a>
        <?php 
    if(isset($_SESSION['user_username'])){
        echo '<a href="book.php">Booking</a>';
        echo '<a href="riwayat.php">Riwayat Booking</a>';
    }
    ?>
    </nav>
    <?php 
    if(isset($_SESSION['user_username'])) {
        echo '<div class="user">';
        echo '<a id = "logoutBtn" href="logout.php">logout</a>';
    } else {
        echo '<div class="user">';
        echo '<a href="login.php">Log In</a>';
        echo '<a href="regis.php">Daftar</a>';
        echo '</div>';
    }
    ?>
</section>
<script>
document.getElementById('logoutBtn').addEventListener('click', function(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Mau Logout?',
        text: "Kamu Yakin Mau Ninggalin Aku? 🥺",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Berhasil Logout!",
                text: "Jangan Lupa Mampir Lagi ya...",
                icon: "success",
                confirmButtonText: "OK",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = 'logout.php';
                }
            }); // Redirect or perform action if user confirms
        }
    });
});
</script>

<div id="menu-btn" class="fas fa-bars"></div>
</section>