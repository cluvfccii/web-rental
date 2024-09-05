<?php
include 'koneksi.php'; // koneksi database
// cek jika ID mobil di terima dari url
if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
    // query untuk menghapus data mobil
    $sql ="DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
    if ($conn->query($sql) === TRUE) {
        header("Location: tambah_transaksi.php"); // redirect setelah exit;
    } else {
        echo "Gagal menghapus: ".$conn->error;    
    }
}