<?php
include 'koneksi.php';
if(isset($_GET['id'])) {
    $id_mobil = $_GET['id'];

    $sql = "SELECT * FROM mobil WHERE id_mobil = $id_mobil";
    $result = $conn->query($sql);
    $mobil = $result->fetch_assoc();

    // mengecek apakah form telah di kirim
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // mengambil data yang di inputkan pengguna dari form
        $nama_mobil = $_POST['nama_mobil'];
        $warna = $_POST['warna'];
        $tahun = $_POST['tahun'];
        $harga = $_POST['harga'];
        $id_kategori = $_POST['id_kategori'];

        // mengupdate data mobil di database berdasarkan input dari mobil
        $sql = "UPDATE mobil SET
        nama_mobil='$nama_mobil',
        warna='$warna',
        tahun='$tahun',
        harga='$harga',
        id_kategori='$id_kategori',
        WHERE id_mobil=$id_mobil";

        // mengecek apakah proses update berhasil
        if($conn->query($sql) === TRUE) {
            header("Location: data_mobil.php");
    } else {
        echo "Eror updating record: . $conn->error";
}
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
</html>