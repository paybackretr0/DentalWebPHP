<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section class="header">
    <a href="admin.php" class="logo">Khanny Dental</a>
    <nav class="navbar">
        <a href="admin.php">Home</a>
        <a href="pengguna.php">Data Pengguna</a>
        <a href="pasien.php">Data Pasien</a>
    </nav>
    <div class="user">';
        <a href="logout.php" id="logoutBtn">logout</a>
    </div>
</section>
<script>
document.getElementById('logoutBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah default action dari link
    Swal.fire({
        title: 'Mau Logout?',
        text: "Periksa Semua Request Sebelum Keluar!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Berhasil Logout!",
                text: "Semangat Terus yaa...",
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