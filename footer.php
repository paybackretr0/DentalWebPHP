<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="paket.php"> <i class="fas fa-angle-right"></i> Paket</a>
            <?php 
            if(isset($_SESSION['user_username'])){
                echo '<a href="book.php"> <i class="fas fa-angle-right"></i> Booking</a>';
            } else {
                echo '';
            }
            ?>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> drop a review</a>
            <a href="#"> <i class="fas fa-angle-right"></i> legality</a>
            <a href="priv.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="tou.php"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact</h3>
            <a href="https://wa.me/62895613404863" target="_blank"> <i class="fa-brands fa-whatsapp"></i>
                +62895613404863</a>
            <a href="https://wa.me/6281268287004" target="_blank"> <i class="fa-solid fa-phone"></i>
                +6281268287004</a>
            <a href="mailto:dentalkhanny@gmail.com?subject=Saran%20Kritik%20atau%20Pertanyaan%20Seputar%20Gigi%20maupun%20Pelayanan"
                style="text-transform: lowercase;" target="_blank">
                <i class=" fas
                fa-envelope"></i> dentalkhanny@gmail.com</a>
            <a href="https://maps.app.goo.gl/tEsCyVW1TmBd5gx28" target="_blank"> <i class="fas fa-map"></i> Kuranji,
                Padang</a>
        </div>
        <div class="box">
            <h3>social</h3>
            <a href="https://www.facebook.com/khannyDental" target="_blank"> <i class="fab fa-facebook-f"></i>
                facebook</a>
            <a href="https://www.tiktok.com/dentalkhanny" target="_blank"> <i class="fab fa-tiktok"></i> tiktok</a>
            <a href="https://www.instagram.com/khannydental" target="_blank"> <i class="fab fa-instagram"></i>
                instagram</a>
        </div>
    </div>

    <div class="credit"> created by <span>KNM</span> | all rights reserved! </div>
</section>
<script>
document.querySelectorAll('.login').forEach(button => {
    button.addEventListener('click', function() {
        Swal.fire({
            icon: 'warning',
            title: 'Anda Belum Login',
            text: 'Silakan Login Terlebih Dahulu!',
            confirmButtonText: 'OK'
        });
    });
});
</script>
</body>

</html>