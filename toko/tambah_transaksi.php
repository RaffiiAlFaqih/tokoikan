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
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Transaksi</h2>
        <table border="1" cellspacing="8" border="1" widht="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px; color: black;">
        <form action="proses.php?aksi=tambahtransaksi" method="POST">
            <tr>
                <td>Jenis Ikan : </td>
                <td><input type="hidden" name="id_ikan">
                <select name="id_ikan" id="jenis_ikan">
                    <option
                        disabled selected> pilih jenis ikan
                    </option>
                    <?php foreach ($db_tokoikanhias->optionikan() as $option) { ?>
                        <option value="<?=$option['id_ikan']?>"><?php echo $option['jenis_ikan'];?>
                    </option>
                    <?php } ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Nama Pakan : </td>
                <td><input type="hidden" name="id_pakan">
                <select name="id_pakan" id="nama_pakan">
                    <option
                        disabled selected> pilih nama pakan
                    </option>
                    <?php foreach ($db_tokoikanhias->optionpakan() as $option) { ?>
                        <option value="<?=$option['id_pakan']?>"><?php echo $option['nama_pakan'];?>
                    </option>
                    <?php } ?>
                </select>
                </td>
            </tr>
            <td>Nama Pelanggan : </td>
                <td><input type="hidden" name="id_customer">
                <select name="id_customer" id="nama_customer">
                    <option
                        disabled selected> pilih nama pelanggan
                    </option>
                    <?php foreach ($db_tokoikanhias->optioncustomer() as $option) { ?>
                        <option value="<?=$option['id_customer']?>"><?php echo $option['nama_customer'];?>
                    </option>
                    <?php } ?>
                </select>
                </td>
            </tr>
            <td>Jumlah Ikan : </td>
                <td><input type="text" name="jumlah_ikan"></td>
            </tr>
            <td>Jumlah Pakan : </td>
                <td><input type="text" name="jumlah_pakan"></td>
            </tr>
            <td>Harga Ikan : </td>
                <td><input type="text" name="harga_ikan"></td>
            </tr>
            <td>Harga Pakan : </td>
                <td><input type="text" name="harga_pakan"></td>
            </tr>
            <td>Total Pembayaran : </td>
                <td><input type="text" name="total_pembayaran"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="tambah"></td>
            </tr>
        </form>
    </table>
</center>
    </div>
    </div>
 </body>
 </html>