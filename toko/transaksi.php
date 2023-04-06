<?php
include 'koneksi.php';
$db_tokoikanhias = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaksi</title>
    <link rel="stylesheet" type="text/css" href="../toko/style.css">
</head>
<body>
<div class="content">
  <header>  
  <h1 style="text-align: center;">Data Transaksi</h1>
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
        <h3 style="text-align: center; margin-bottom: 20px">Table Transaksi</h3>
        <a href="tambah_transaksi.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Transaksi</a>
        <table border=5px solid black width="100%" style="text-align center; font-size: 18px; margin-bottom: 30px;">
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Nama Pakan</th>
            <th>Nama Customer</th>
            <th>Jumlah Ikan</th>
            <th>Jumlah Pakan</th>
            <th>Harga Ikan</th>
            <th>Harga Pakan</th>
            <th>Total Pembayaran</th>
        </tr>
        <?php
        $no=1;
        foreach($db_tokoikanhias->tampiltransaksi() as $x ){
        ?>
        <tr>
            <td><?php echo $x ['id_transaksi'];?></td>
            <td><?php echo $x ['jenis_ikan'];?></td>
            <td><?php echo $x ['nama_pakan'];?></td>
            <td><?php echo $x ['nama_customer'];?></td>
            <td><?php echo $x ['jumlah_ikan'];?></td>
            <td><?php echo $x ['jumlah_pakan'];?></td>
            <td><?php echo $x ['harga_ikan'];?></td>
            <td><?php echo $x ['harga_pakan'];?></td>
            <td><?php echo $x ['total_pembayaran'];?></td>
        </tr>
        <?php
    } ?>
</table>
</center>
</div>
</body>
</html>