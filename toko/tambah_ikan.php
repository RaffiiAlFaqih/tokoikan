<?php
include 'koneksi.php';
$db_tokoikanhias = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../toko/style.css">
</head>
<body>
<div class="content">
  <header>  
  <h1 style="text-align: center;">Data/Jenis Ikan</h1>
  <h3 class="deskripsi"></h3>
  </header>

    <div class="menu">
    <ul>
    <li><a href="home.php">Home</a></li>
      <li><a href="menu_ikan.php">Data Ikan</a></li>
      <li><a href="menu_pakan.php">Pakan Ikan</a></li>
      <li><a href="customer.php">Data Customer</a></li>
      <li><a href="transaksi.php">Data Transaksi</a></li>
    </ul>
  </div>
  <center>
<div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Ikan</h2>
        <table border="1" cellspacing="8" border="1" widht="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px; color: black;">
        <form action="proses.php?aksi=tambahikan" method="POST">
            <tr>
                <td>Nama Ikan : </td>
                <td><input type="text" name="jenis_ikan"></td>
            </tr>
            <tr>
                <td>Ukuran Ikan : </td>
                <td><input type="text" name="size"></td>
            </tr>
            <td>Harga IKan : </td>
                <td><input type="text" name="harga_ikan"></td>
            </tr>
            <tr>
                <td>Submit : </td>
                <td><input type="submit" value="tambah"></td>
            </tr>
        </form>
    </table>
</center>
    </div>
    </div>
 </body>
 </html>