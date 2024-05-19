<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$query = "delete from tb_customer where idCust = '$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    header('location: ./_ownerHome.php');
} else {
    echo "Hapus data gagal!!!";
}
?>