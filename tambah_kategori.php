<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Mobil</title>
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
    <h2>Tambah Mobil</h2>
    <form action="aksi_tambahkategori.php" method="post">
      <label for="nama_kategori">kategori</label>
      <input type="text" id="nama_kategori" name="nama_kategori" required>
      <input type="submit" value="Tambah">
    </form>
  </div>
</body>

</html>