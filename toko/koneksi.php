<?php
class database {
    var $host = 'localhost';
    var $name = 'root';
    var $pw = '';
    var $db = 'db_tokoikanhias';

    function construct(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_select_db($koneksi, $this->db);
    }
    // koneksi ikan
    function tampilikan(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM ikan");
        $hasil = [];
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

     //koneksi tambahikan
     function tambahikan($jenis_ikan, $size, $harga_ikan){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_query($koneksi, "INSERT INTO ikan VALUES('', '$jenis_ikan', '$size', '$harga_ikan')");
    }

    //koneksi pakan
    function tampilpakan(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM pakan");
        $hasil = [];
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    //koneksi tambahpakan
    function tambahpakan($nama_pakan, $berat_bersih, $harga_pakan){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_query($koneksi, "INSERT INTO pakan VALUES('', '$nama_pakan', '$berat_bersih', '$harga_pakan')");
    }

    //koneksi customer
    function tampilcustomer(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM customer");
        $hasil = [];
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    //koneksi tambahcustomer
    function tambahcustomer($nama_customer, $alamat, $no_hp, $email){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_query($koneksi, "INSERT INTO customer VALUES('', '$nama_customer', '$alamat', '$no_hp', '$email')");
    }

    //koneksi transaksi
    function tampiltransaksi(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, transaksi.jumlah_ikan, transaksi.jumlah_pakan, transaksi.harga_ikan, transaksi.harga_pakan, transaksi.total_pembayaran, customer.id_customer, customer.nama_customer, ikan.id_ikan, ikan.jenis_ikan, pakan.id_pakan, pakan.nama_pakan
        FROM customer INNER JOIN transaksi on customer.id_customer = transaksi.id_customer INNER JOIN ikan ON ikan.id_ikan = transaksi.id_ikan INNER JOIN pakan ON pakan.id_pakan = transaksi.id_pakan ORDER by id_transaksi ");
        $hasil = [];
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    //koneksi tambahtransaksi
    function tambahtransaksi($id_ikan, $id_pakan, $id_customer, $jumlah_ikan, $jumlah_pakan, $harga_ikan, $harga_pakan, $total_pembayaran){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_query($koneksi, "INSERT INTO transaksi VALUES('', '$id_ikan', '$id_pakan', '$id_customer', '$jumlah_ikan', '$jumlah_pakan', '$harga_ikan', '$harga_pakan', '$total_pembayaran')");
    }

    function optionikan(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $result_ikan = mysqli_query($koneksi, "SELECT id_ikan, jenis_ikan FROM ikan");
        $hasil = [];
        while($d = mysqli_fetch_array($result_ikan, MYSQLI_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function optionpakan(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $result_pakan = mysqli_query($koneksi, "SELECT id_pakan, nama_pakan FROM pakan");
        $hasil = [];
        while($d = mysqli_fetch_array($result_pakan, MYSQLI_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function optioncustomer(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $result_customer = mysqli_query($koneksi, "SELECT id_customer, nama_customer FROM customer");
        $hasil = [];
        while($d = mysqli_fetch_array($result_customer, MYSQLI_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    }
}
?>