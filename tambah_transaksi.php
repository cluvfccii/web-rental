<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah transaksi</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    .container {
      padding: 16px;
    }
    input[type=text], input[type=number], select {
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
  <div class="container">
    <h2>Tambah transaksi</h2>
    <form action="proses_tambah.php" method="post">
      <label for="id_mobil">id_mobil</label>
      <select id="id_mobil" name="id_mobil" required>
        <?php
        include 'koneksi.php';
        $sql = "SELECT id_mobil, nama_mobil FROM mobil";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<option value="'.$row['id_mobil'].'">'.$row['nama_mobil'].'</option>';
            }
        } else {
            echo '<option value="">Tidak ada jenis tersedia</option>';
        }
        $conn->close();
        ?>
      </select>

      <label for="id_customer">nama_custumer</label>
      <select id="nama_customer" name="nama_customer" required>
      <?php
        include 'koneksi.php';
        $sql = "SELECT id_customer, nama_customer FROM customer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<option value="'.$row['id_customer'].'">'.$row['nama_customer'].'</option>';
            }
        } else {
            echo '<option value="">Tidak ada jenis tersedia</option>';
        }
        $conn->close();
        ?>
      </select>
      <label for="tgl_sewa">Tangga sewa</label>
      <input type="date" id="tgl_sewa" name="tgl_sewa" required>

      <label for="tgl_kembali">Tangga kembali</label>
      <input type="date" id="tgl_kembali" name="tgl_kembali" required>

      <input type="submit" value="Tambah">
    </form>
    <a class="btn-back" href="index.php">Kembali</a>
  </div>
</body>

</html>