
<?php
include_once("./koneksi.php");

$namaCust = $_POST['nama'];
$idCust = $_POST['idCust'];
$noTlp = $_POST['noTlp'];
$alamat = $_POST['alamat'];
$waktuAmbil = $_POST['waktuAmbil'];
$layanan = $_POST['layanan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$tagihan = $_POST['tagihan'];
$totalBayar = $_POST['tagihan'];
$metodeBayar = $_POST['metodeBayar'];
$tanggal = date("Y-m-d H:i:s"); // Menyimpan tanggal saat ini

$query = "insert into tb_transaksi (idCust, nama_customer, noTlp_Cust, alamat_Ambil, layanan, harga_perItem, jumlah_item, keterangan, total_transaksi, metodeBayar, total_bayar, waktuAmbil, status_transaksi, tanggal_pesan) Value ('$idCust','$namaCust', '$noTlp', '$alamat', '$layanan', '$harga', '$jumlah', '$keterangan', '$tagihan', '$metodeBayar', '$totalBayar', '$waktuAmbil', 'diambil', '$tanggal')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {

    header('location: ./_home.php');
} else {
    echo "Input data gagal!";
}
?>