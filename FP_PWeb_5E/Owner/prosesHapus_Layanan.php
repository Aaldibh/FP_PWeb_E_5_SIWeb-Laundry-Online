<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$query = "delete from tb_layanan where id_layanan = '$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    header('location: ./_ownerHome.php');
} else {
    echo "Hapus data gagal!!!";
}
?>