<?php
include "koneksi.php";
$id_transaksi=$_POST['id_transaksi'];
$id_mobil=$_POST['id_mobil'];
$id_customer=$_POST['id_customer'];
$tgl_sewa=$_POST['tgl_sewa'];
$tgl_kembali=$_POST['tgl_kembali'];
$sql2 = "UPDATE transaksi SET id_transaksi='$id_transaksi',id_customer='$id_customer',id_mobil='$id_mobil',tgl_sewa='$tgl_sewa',tgl_kembali='$tgl_kembali' WHERE id_transaksi='$id_transaksi'";
$query = mysqli_query($db_link,$sql2);
if($query)
{
header('location:edit_transaksi.php');
}
else
{
echo "Edit transaksi Gagal --> <a href='tambah_transaksi.php'>KEMBALI";
}
?>