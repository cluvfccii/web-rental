<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];

    $sql = "SELECT * FROM mobil WHERE id_mobil = $id_mobil";
    $result = $conn->query($sql);
    $mobil = $result->fetch_assoc();

    // mengecek apakah form telah di kirim
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
        id_kategori='$id_kategori'
        WHERE id_mobil=$id_mobil";

        // mengecek apakah proses update berhasil
        if ($conn->query($sql) === TRUE) {
            header("Location: data_mobil.php");
            exit;
        } else {
            echo "Eror updating record: . $conn->error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>

<body>
    <h2>Edit Data Mobil</h2>
    <form method="POST">
        <!-- Menampilkan form edit dengan data mobil -->
        Nama Mobil: <input type="text" name="nama_mobil" value="<?php echo $mobil['nama_mobil']; ?>"><br>
        Warna: <input type="text" name="warna" value="<?php echo $mobil['warna']; ?>"><br>
        Tahun: <input type="text" name="tahun" value="<?php echo $mobil['tahun']; ?>"><br>
        Harga: <input type="text" name="harga" value="<?php echo $mobil['harga']; ?>"><br>
        Kategori: <input type="text" name="id_kategori" value="<?php echo $mobil['id_kategori']; ?>"><br>

        <!-- Tombol untuk menyimpan perubahan -->
        <input type="submit" value="Simpan Perubahan">

    </form>
</body>

</html>