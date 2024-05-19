<?php 
session_start();
require "koneksi.php";

$id = $_GET['id'];
$status = $_GET['status'];

if($_GET['status'] == 'Y' || $_GET['status'] == 'R'){
    $query = "UPDATE booking SET status = '$status' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result){
        header("location: pasien.php");
    } else {
        echo 'Gagal';
    }
} else {
    echo 'Status tidak valid';
}

?>