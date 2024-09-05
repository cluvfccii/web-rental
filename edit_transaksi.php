<?php
include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #dde1e7;
        margin: 0;
        padding: 0;
    }

    h2 {
        color: #333;
        text-align: center;
    }

    form {
   width: 330px;
  		padding: 40px 30px;
  background:  #dde1e7;
  border-radius: 10px;
  box-shadow: -3px -3px 7px #ffffff73,
               2px 2px 5px rgba(94,104,121,0.288);
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
    }

    input[type="text"],
    input[type="submit"],
    input[type="button"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"],
    input[type="button"] {
        background-color: #009933;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
        background-color: #45a049;
    }

    a {
        text-decoration: none;
        color: #333;
    }

    center {
        display: block;
        text-align: center;
    }
</style>
 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #dde1e7;
        margin: 0;
        padding: 0;
    }

    h2 {
        color: #333;
        text-align: center;
    }

    form {
   width: 330px;
  		padding: 40px 30px;
  background:  #dde1e7;
  border-radius: 10px;
  box-shadow: -3px -3px 7px #ffffff73,
               2px 2px 5px rgba(94,104,121,0.288);
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
    }

    input[type="text"],
    input[type="submit"],
    input[type="button"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"],
    input[type="button"] {
        background-color: #009933;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
        background-color: #45a049;
    }

    a {
        text-decoration: none;
        color: #333;
    }

    center {
        display: block;
        text-align: center;
    }
</style>
</head>
<body bgcolor="dde1e7">
<h2><center>EDIT DATA TRANSAKSI</center></h2>
<hr />
<?php
$id_transaksi=$_GET['id'];
$sql = "SELECT * FROM transaksi WHERE id_transaksi ='$id_transaksi'";
$query = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($query);
$sql_mobil = "SELECT id_mobil, nama_mobil FROM mobil";
$result_mobil = $conn->query($sql_mobil);

$sql_customer = "SELECT id_customer, nama_customer FROM customer";
$result_customer = $conn->query($sql_customer);
?>
<form action='aksi_edit_transaksi.php?id=<?php echo "id_transaksi"; ?>' method ='POST'>
<table border="0">
<tr>
<td>ID TRANSAKSI</td>
<td><input name='id_transaksi' type='id' id="id_transaksi" value="<?php echo $data['id_transaksi'] ?>"></td>
</tr>
<tr>
<td>MERK MOBIL</td>
<td><select name="id_mobil">
            <?php while($row = $result_mobil->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_mobil']; ?>"><?php echo $row['nama_mobil']; ?></option>
            <?php } ?>
        </select><br></td>
</tr>
<tr>
<td>NAMA CUSTOMER</td>
<td><select name="id_customer">
            <?php while($row = $result_customer->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_customer']; ?>"><?php echo $row['nama_customer']; ?></option>
            <?php } ?>
        </select><br></td>
</tr>
<tr>
<td>TANGGAL SEWA</td>
<td><input name='total' type='date' id="tgl_sewa" value="<?php echo $data['tgl_sewa'] ?>"></td>
</tr>
<tr>
<td>TANGGAL KEMBALI</td>
<td><input name='total' type='date' id="tgl_kembali" value="<?php echo $data['tgl_kembali'] ?>"></td>
</tr>
<tr>
<td></td>
<td><input type='submit' value='simpan'>
<a href="../cici_12rpl4/.php"><input type='button' value='batal'></a></td>
</tr></table></form>
</body>
</html>