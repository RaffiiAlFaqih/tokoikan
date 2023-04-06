<?php
include 'koneksi.php';
$db_tokoikanhias= new database();

$aksi = $_GET['aksi'];
//proses ikan
if($aksi == "tambahikan"){
    $db_tokoikanhias->tambahikan($_POST['jenis_ikan'], $_POST['size'], $_POST['harga_ikan']);
    header("location:menu_ikan.php");
}
if($aksi == "tambahpakan"){
    $db_tokoikanhias->tambahpakan($_POST['nama_pakan'], $_POST['berat_bersih'], $_POST['harga_pakan']);
    header("location:menu_pakan.php");
}
if($aksi == "tambahcustomer"){
    $db_tokoikanhias->tambahcustomer($_POST['nama_customer'], $_POST['alamat'], $_POST['no_hp'], $_POST['email']);
    header("location:customer.php");
}
if($aksi == "tambahtransaksi"){
    $db_tokoikanhias->tambahtransaksi($_POST['id_ikan'], $_POST['id_pakan'], $_POST['id_customer'], $_POST['jumlah_ikan'], $_POST['jumlah_pakan'], $_POST['harga_ikan'], $_POST['harga_pakan'], $_POST['total_pembayaran']);
    header("location:transaksi.php");
}
elseif($aksi == "hapusikan"){
    $db_tokoikanhias->hapusikan($_GET['id_ikan']);
    header("location:kasir.php");
}
?>