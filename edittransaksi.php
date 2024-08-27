<?php
    include 'koneksi.php';
?>
<!DOCTYPE.html>
<html>
<body>
 <h2><center>EDIT DATA TRANSAKSI</h2></center>
 <hr>
 <?php 
$id=$_GET['id'];
$sql = "SELECT * FROM transaksi WHERE id_transaksi ='$id'";
$query = mysqli_query($db_link,$sql);
$data = mysqli_fetch_array($query);
?>
<form action='aksi_edit_transaksi.php?id=<?php echo "id_transaksi"; ?>' method='POST'>
<table border="0">
<tr>
<td>id_transaksi</td>
<tr>
<td><input name='transaksi_id' type='text'  id="id_transaksi" value="<?php echo $data['id_transaksi'] ?>"></td>
</tr>
<tr>
<td>id_mobil</td>
<tr>
<td><input name='id_mobil' type='text'  id="id_mobil" value="<?php echo $data['id_mobil'] ?>"></td>
</tr>
<tr>
<td>id_customer</td>
<tr>
<td><input name='id_customer' type='text'  id="id_customer" value="<?php echo $data['id_customer'] ?>"></td>
</tr>
<tr>
<td>tgl_sewa</td>
<tr>
<td><input name='tgl_sewa' type='text'  id="tgl_sewa" value="<?php echo $data['tgl_sewa'] ?>"></td>
</tr>
<tr>
<td>tgl_kembali</td>
<tr>
<td><input name='tgl_kembali' type='text'  id="tgl_kembali" value="<?php echo $data['tgl_kembali'] ?>"></td>
</tr>
<td><input type='submit' value='simpan'>
<a href="tambah_transaksi.php"><input type='button' value='batal'></a></td>
</tr>
</tr></form></body></html>