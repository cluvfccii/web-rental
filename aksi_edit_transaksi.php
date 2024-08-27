<?php
include "koneksi.php";
$id_transaksi = $_POST['id_transaksi'];
$id_mobil = $_POST['id_mobil'];
$id_customer = $_POST['id_customer'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];

$sql2 = "UPDATE transaksi SET id_transaksi='$id_transaksi', id_mobil='$id_mobil', id_customer='$id_customer', tgl_sewa='$tgl_sewa', tgl_kembali='$tgl_kembali'
WHERE id_transaksi='$id_transaksi'";

if ($conn->query($sql2) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='transaksi.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>