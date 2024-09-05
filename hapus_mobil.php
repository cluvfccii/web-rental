<?php
include 'koneksi.php'; // koneksi database
// cek jika ID mobil di terima dari url
if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];
    // query untuk menghapus data mobil
    $sql ="DELETE FROM mobil WHERE id_mobil = $id_mobil";
    if ($conn->query($sql) === TRUE) {
        header("Location: data_mobil.php"); // redirect setelah exit;
    } else {
        echo "Gagal menghapus: ".$conn->error;    
    }
}