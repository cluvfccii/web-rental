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
    <link rel="stylesheet" href="style5.css">
    <title>Edit data</title>
    <style>
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #75BEB7;
      padding-top: 20px;
      overflow-x: hidden;
    }

    .sidebar a {
      padding: 15px 25px;
      text-decoration: none;
      font-size: 18px;
      color: #f2f2f2;
      display: block;
    }

    .sidebar a:hover {
      background-color: #ddd;
      color: black;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .container {
      padding: 16px;
    }

    input[type=text],
    input[type=number],
    select {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .btn-back {
      background-color: #555555;
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 4px;
    }
  </style>
</head>

<body>
<div class="sidebar">
    <a href="#dashboard">Dashboard</a>
    <a href="data_mobil.php">Data Mobil</a>
    <a href="#customer">Data Customer</a>
    <a href="tambah_transaksi.php">Data Transaksi</a>
    <a href="logout.php" onclick="confirmLogout(event)">Logout</a>
  </div>

  <div class="content">
    <div class="navbar">
      <div class="menu">
        <a href="index.php">Home</a>
        <a href="index.php">Mobil</a>
        <a href="about.php">About</a>
      </div>
      <div class="user-actions">
        <div class="username">
          <?php
          if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            echo 'Hai, ' . $_SESSION['username'];
          }
          ?>
        </div>
      </div>
    </div>

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