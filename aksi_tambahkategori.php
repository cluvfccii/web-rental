<?php
include 'koneksi.php';

$nama_kategori = $_POST['nama_kategori'];

$sql = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>