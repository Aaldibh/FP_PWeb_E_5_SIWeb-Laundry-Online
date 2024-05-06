<?php
include_once("../koneksi.php");

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "insert into tb_layanan (nama_layanan, jenis_paket, harga_layanan) Value ('$nama', '$jenis', '$harga')";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:./_ownerHome.php');
}else{
    echo "Input data gagal!";
}
?>