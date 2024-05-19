<!-- proses tambah admin ke database -->
<?php
include_once("../koneksi.php");

$nama = $_POST['nama'];
$password = $_POST['password'];
$posisi = $_POST['posisi'];

$query = "insert into tb_admin (namaAdmin, passwordAdmin, posisiAdmin) Value ('$nama', '$password', '$posisi')";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:../Owner/_ownerHome.php');
}else{
    echo "Input data gagal!";
}
?>