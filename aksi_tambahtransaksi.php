<?php
include 'koneksi.php';

$id_mobil = $_POST['id_mobil'];
$id_customer = $_POST['id_customer'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];


$sql = "INSERT INTO transaksi (id_mobil, id_customer, tgl_sewa, tgl_kembali) VALUES ('$id_mobil', '$id_customer', '$tgl_sewa', '$tgl_kembali')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='transaksi.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>