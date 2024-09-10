<style>
 
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #438BD3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #A5CAD2;
        }

        .btn1 {
            padding: 10px 15px;
            background-color: #438BD3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

</style>
<head>
<link rel="stylesheet" href="style5.css">
</head>
<div class="sidebar">
        <a href="admin.php">Dashboard</a>
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
        <h1>Data Transaksi</h1>
        <a class="btn1" href="transaksi.php">+ Tambah Data </a>
<?php
include 'koneksi.php';

$sql = "SELECT transaksi.id_transaksi, mobil.nama_mobil, customer.nama_customer, transaksi.tgl_sewa, transaksi.tgl_kembali
        FROM transaksi
        JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
        JOIN customer ON transaksi.id_customer = customer.id_customer ORDER BY id_transaksi";
    
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Transaksi</th><th>Merk Mobil</th><th>Nama Customer</th><th>Tanggal Sewa</th><th>Tanggal Kembali</th><th>aksi</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["id_transaksi"]."</td>
            <td>".$row["nama_mobil"]."</td>
            <td>".$row["nama_customer"]."</td>
            <td>".$row["tgl_sewa"]."</td> 
            <td>".$row["tgl_kembali"]."</td>
            <td><a class='btn1' href='hapus_transaksi.php?id=".$row["id_transaksi"]."'>Hapus</a>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<html>
    <head>
        <title>Transaksi</title>
        <style>
            
        </style>
    </head>
</html>