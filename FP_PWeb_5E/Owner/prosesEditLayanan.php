<?php
include_once("../koneksi.php");

$idLayanan = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

$query = "update tb_layanan set nama_layanan = '$nama', harga_layanan = '$harga' where id_layanan = '$idLayanan'";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:../Owner/_ownerHome.php');

}else{
    echo "Update data gagal!";
}
?>