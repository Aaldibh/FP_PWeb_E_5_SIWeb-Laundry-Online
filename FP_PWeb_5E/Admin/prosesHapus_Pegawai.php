<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$query = "delete from tb_pegawai where id_pegawai = '$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    header('location: ./_adminHome.php');
} else {
    echo "Hapus data gagal!!!";
}
?>