<!-- proses tambah pegawai ke database -->
<?php
include_once("../koneksi.php");

$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$gender = $_POST['gender'];
$noTlp = $_POST['nomor'];
$alamat = $_POST['alamat'];

$query = "insert into tb_pegawai (nama_pegawai, posisi_pegawai, gender_pegawai, noTlp_pegawai, alamat_pegawai) Value ('$nama', '$posisi', '$gender', '$noTlp', '$alamat')";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    header('location:./_adminHome.php');
}else{
    echo "Input data gagal!";
}
?>