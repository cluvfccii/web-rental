<?php
include 'koneksi.php';
?>
<html>
<head>
</head>
<body bgcolor="skyblue">
	<h2><center>DATA TRANSAKSI</h2></center>
    <hr>
    <center><input type="button" value="Tambah Data" onClick="location.href='tambahtransaksi.php'"></center>
    <br>
    <table border='1' cellspacing="0" cellpadding='5' align="center">
    <tr align="center">
    <td>id_transaksi</td>
    <td>id_mobil</td>
    <td>id_customer</td>
    <td>tgl_sewa</td>
	<td>tgl_kembali</td>
   	<td>Aksi</td>
  </tr>
  <?php
  $no=1;
  $sql="SELECT * FROM transaksi";
  $query=mysqli_query($db_link,$sql);
  while ($data = mysqli_fetch_array($query))
    {
	?>
    <tr>
    <td><?php echo "$data[id_transaksi]"; ?></td>
    <td><?php echo "$data[id_mobil]"; ?></td>
    <td><?php echo "$data[id_customer]";?></td>
    <td><?php echo "$data[tgl_sewa]";?></td>
	<td><?php echo "$data[tgl_kembali]"; ?></td>
    <td>
    <a href="edittransaksi.php?id=<?php echo "$data[id_transaksi]"; ?>">EDIT
	<a href="hapustransaksi.php?id=<?php echo "$data[id_transaksi]"; ?>" onClick="return confirm('Anda yakin?')">HAPUS</a>
    </td>
    </tr>
    <?php
	$no++;
	}
?>
</table>
<br>
<center><input type="button" value="Kembali" onClick="location.href='halaman.php'"></center>
</body>
</html>