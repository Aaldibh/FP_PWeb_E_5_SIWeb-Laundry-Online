<!-- proses tambah layanan ke database -->

<?php
include_once("../koneksi.php");

$nama = $_POST['nama'];

$harga = $_POST['harga'];

$query = "insert into tb_layanan (nama_layanan, harga_layanan) Value ('$nama', '$harga')";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:./_ownerHome.php');
}else{
    echo "Input data gagal!";
}
?>