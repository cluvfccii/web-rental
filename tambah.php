<?php
session_start();
include 'koneksi.php';


if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style5.css">
  <title>Tambah Mobil</title>
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

    <div class="container">
      <h2>Tambah Mobil</h2>
      <form action="proses_tambah.php" method="post">
        <label for="nama_mobil">Merk</label>
        <input type="text" id="nama_mobil" name="nama_mobil" required>

        <label for="tahun">Warna</label>
        <input type="text" id="warna" name="warna" required>

        <label for="tahun">tahun</label>
        <input type="text" id="tahun" name="tahun" required>

        <label for="id_kategori">Jenis</label>
        <select id="id_kategori" name="id_kategori" required>


          <?php
          include 'koneksi.php';
          $sql = "SELECT id_kategori, nama_kategori FROM kategori";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<option value="' . $row['id_kategori'] . '">' . $row['nama_kategori'] . '</option>';
            }
          } else {
            echo '<option value="">Tidak ada jenis tersedia</option>';
          }
          $conn->close();
          ?>
        </select>
        <label for="harga">harga</label>
        <input type="text" id="harga" name="harga" required>

        <input type="submit" value="Tambah">
      </form>
      <a class="btn-back" href="index.php">Kembali</a>
    </div>
    <script>
      function confirmLogout(event) {
        event.preventDefault();
        var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
        if (confirmLogout) {
          window.location.href = event.target.href;
        }
      }
    </script>
</body>

</html>