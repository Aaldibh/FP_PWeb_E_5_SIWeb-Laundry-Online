<?php
include_once("../koneksi.php");

// Tangkap ID transaksi dari URL
$id_transaksi = $_GET['id'];
$updatedStatus = $_GET['status'];

$query = "UPDATE tb_transaksi SET status_transaksi = '$updatedStatus' WHERE id_transaksi = '$id_transaksi'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    header('location:./_adminHome.php');
} else {
    echo "Update data gagal!";
}
