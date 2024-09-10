
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mobil = $_POST['id_mobil'];
    $id_customer = $_POST['id_customer'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];

    $sql = "INSERT INTO transaksi (id_mobil, id_customer, tgl_sewa, tgl_kembali) VALUES ('$id_mobil', '$id_customer', '$tgl_sewa', '$tgl_kembali')";

    if ($conn->query($sql) === TRUE) {
       header("Location: tambah_transaksi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$sql_mobil = "SELECT id_mobil, nama_mobil FROM mobil";
$result_mobil = $conn->query($sql_mobil);

$sql_customer = "SELECT id_customer, nama_customer FROM customer";
$result_customer = $conn->query($sql_customer);
?>
<html>
    <head>
    <link rel="stylesheet" href="style5.css">
        <title>Tambah Transaksi</title>
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

    <form method="post" action="">
        Nama Mobil: 
        <select name="id_mobil">
            <?php while($row = $result_mobil->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_mobil']; ?>"><?php echo $row['nama_mobil']; ?></option>
            <?php } ?>
        </select><br>
        
        Nama Customer: 
        <select name="id_customer">
            <?php while($row = $result_customer->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_customer']; ?>"><?php echo $row['nama_customer']; ?></option>
            <?php } ?>
        </select><br>

        Tanggal Sewa: <input type="date" name="tgl_sewa"><br>
        Tanggal Kembali: <input type="date" name="tgl_kembali"><br>
        <input type="submit" value="Tambah Transaksi">
    </form> 
    </body>
</html>

<?php
$conn->close();
?>