<?php 
    session_start();
    require "koneksi.php";
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/regis.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="x-icon" href="assets/icon/gigi1.ico">
    <title>Registrasi - Khanny Dental</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Registrasi</h1>
            <h2>Khanny Dental</h2>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required />
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="nama" placeholder="Nama" required />
                    <i class="bx bxs-user-circle"></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required />
                    <i class="bx bxl-gmail"></i>
                </div>
                <div class="input-field">
                    <input type="text" name="noWA" placeholder="No. WhatsApp" />
                    <i class="bx bxl-whatsapp"></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required />
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="cpass" placeholder="Konfirmasi Password" required />
                    <i class="bx bx-lock-alt"></i>
                </div>
            </div>
            <label><input type="checkbox" required />Informasi di atas sudah
                benar</label>
            <button type="submit" name="regis" class="btn">Daftar</button>
            <?php
            if(isset($errmsg)){
                foreach($errmsg as $errmsg){
                    echo '<center><span class="error-msg">'.$errmsg.'</span></center>';
                };
            };
            ?>
            <div class="masuk">
                <p>Sudah punya akun? <a href="login.php">Log In</a></p>
            </div>
            <?php 
require "koneksi.php";

if(isset($_POST['regis'])){
    $username = $_POST["username"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $noWA = $_POST["noWA"];
    $password = $_POST["password"];
    $cpass = $_POST["cpass"];

    $select = "SELECT * FROM user WHERE username = '$username' OR password = '$password' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
                Swal.fire({
                icon: "error",
                title: "Lah...",
                text: "Username Sudah Terdaftar!"
              });</script>';
    } else {
        if($password != $cpass){
            echo '<script>
                Swal.fire({
                icon: "error",
                title: "Lho...",
                text: "Password dan Konfirmasi Password Tidak Sama!"
              });</script>';
        } else {
            $insert = "INSERT INTO user (idLogin, username, nama, email, noWA, password) VALUES (NULL, '$username', '$nama', '$email', '$noWA', MD5('$password'))";
            mysqli_query($conn, $insert);
            echo '<script>
            Swal.fire({
                    icon: "success",
                    title: "Yeayy...",
                    text: "Akun Anda Berhasil Dibuat! Anda Sudah Bisa Login!"
                  });
            </script>';
            // header("location:login.php");
            
        }
    }
}
?>
        </form>
    </div>
</body>

</html>