<?php
include 'koneksi.php';

$nama_mobil = $_POST['nama_mobil'];
$tahun = $_POST['tahun'];
$warna = $_POST['warna'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];


$sql = "INSERT INTO mobil (nama_mobil, tahun, warna, id_kategori, harga) VALUES ('$nama_mobil', '$tahun', '$warna', '$id_kategori', '$harga')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>