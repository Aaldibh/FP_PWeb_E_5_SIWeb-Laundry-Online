<?php
include_once("../koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$gender = $_POST['gender'];
$noTlp = $_POST['nomor'];
$alamat = $_POST['alamat'];

$query = "update tb_pegawai set nama_pegawai = '$nama', posisi_pegawai = '$posisi', gender_pegawai = '$gender', noTlp_pegawai = '$noTlp', alamat_pegawai = '$alamat' where id_pegawai = '$id'";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:./_adminHome.php');

}else{
    echo "Update data gagal!";
}
?>