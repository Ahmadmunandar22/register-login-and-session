<?php 

require_once("connection.php");

//status tidak error
$error=0;

//memvalidasi inputan
if(isset($_POST['Id_barang'])) $Id_barang = $_POST['Id_barang'];
else $error=1; //status error

if(isset($_POST['nama_barang'])) $nama_barang = $_POST['nama_barang'];
else $error=1; //status error

if(isset($_POST['harga'])) $harga = $_POST['harga'];
else $error=1; //status error

//mengatasi jika terdapat error pada input
if($error==1){
    echo "terjadi kesalahan pada proses input data";
    exit();
}

//menyiapkan query mysql untuk dieksekusi
$query="
insert into barang
(Id_barang, nama_barang, harga)
values
('{$Id_barang}', '{$nama_barang}', '{$harga}');";

//mengeksekusi mysql query
$insert=mysqli_query($mysqli, $query);

//menangani jika error pada saat eksekusi query
if($insert==false){
    echo"error dalam menambahkan data. <a href='index.php'>kembali</a>";
} else{
    header("location:index.php");
}

?>