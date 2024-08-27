<?php
include "koneksi.php";
$id_transaksi=$_GET['id'];
$sql="DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
$query=mysqli_query($db_link,$sql);
if($query)
{
header('location:tambah_transaksi.php');
}
else
{
echo "hapus transaksi Gagal";
}
?>