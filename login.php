<?php 
    session_start();
    require "koneksi.php";
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" type="x-icon" href="assets/icon/gigi1.ico">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Log In - Khanny Dental</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Log In</h1>
            <h2>Khanny Dental</h2>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" />
                <i class='bx bxs-user-pin'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" />
                <i class="bx bx-lock-alt"></i>
            </div>
            <button type="submit" name="login" class="btn">Log In</button>
            <?php 
            require "koneksi.php";
            $username = "";
            $password = "";
            $errmsg = "";

            if(isset($_POST['login'])){ 
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  if($username == '' or $password == ''){
                      echo '<script>
                      Swal.fire({
                      icon: "error",
                      title: "Oops...",
                      text: "Masukan Data dengan Benar!"
                       });</script>';
                    } else { 
                          $sql = "SELECT * FROM user WHERE username = ?";
                          $stmt = mysqli_prepare($conn, $sql);
                          mysqli_stmt_bind_param($stmt, "s", $username);
                          mysqli_stmt_execute($stmt);
                          $result = mysqli_stmt_get_result($stmt);
                          $user = mysqli_fetch_assoc($result);
                          if($username == 'dental' && $password == 'dental'){ 
                                $_SESSION['user_username'] = $username;
                                header("location: admin.php");
                                exit();
                          } else {
                                // Bagian pengecekan untuk pengguna biasa
                                if(!$user){
                                      echo '<script>
                                      Swal.fire({
                                      icon: "error",
                                      title: "Oops...",
                                      text: "Username atau Password Salah!"
                                      });</script>';        
                                } else {
                                      if(md5($password) != $user['password']){
                                            echo '<script>
                                            Swal.fire({
                                            icon: "error",
                                            title: "Oops...",
                                            text: "Username atau Password Salah!"
                                            });</script>';        
                                      } else {
                                            $_SESSION['user_id'] = $user['idLogin'];
                                            $_SESSION['user_username'] = $username;
                                            header("location: home.php");
                                            exit();
                                        }
                                  }
                            }
                    }
            } 
            ?>
            <div class="daftar">
                <p>Belum punya akun? <a href="regis.php">Daftar</a></p>
                <p>Lihat Layanan <a href="home.php">Disini</a></p>
            </div>
        </form>