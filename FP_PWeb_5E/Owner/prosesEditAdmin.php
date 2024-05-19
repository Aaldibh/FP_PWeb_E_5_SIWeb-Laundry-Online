<?php
include_once("../koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$posisi = $_POST['posisi'];

$query = "update tb_admin set namaAdmin = '$nama', passwordAdmin = '$password', posisiAdmin = '$posisi' where idAdmin = '$id'";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:./_ownerHome.php');

}else{
    echo "Update data gagal!";
}
?>