<?php
    // Proses form submit
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $pesan = $_POST['pesan'];
        
        if(!empty($pesan)) {
            require "koneksi.php";
        
            // Melindungi dari serangan SQL Injection
            $id = mysqli_real_escape_string($conn, $id);
            $pesan = mysqli_real_escape_string($conn, $pesan);
        
            $sql = "UPDATE booking SET pesan='$pesan' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: pasien.php");
                exit();
            } else {
                header("Location: pasien.php");
            }
        } else {
            header("Location: pasien.php");
            // echo "<script>alert('Keterangan tidak boleh kosong.');</script>";    
        }   
    }
    ?>