<?php
session_start();
include 'koneksi.php';


if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style5.css">
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
        <h1>Admin Dashboard</h1>
        <p>Selamat datang di halaman admin.</p>
        <!--  konten admin -->
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