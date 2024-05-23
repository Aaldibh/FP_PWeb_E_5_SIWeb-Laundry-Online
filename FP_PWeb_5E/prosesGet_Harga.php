<?php
include_once("./koneksi.php");
function get_harga($koneksi, $layananInput)
{
    $query = "SELECT harga_layanan FROM tb_layanan WHERE nama_layanan = '$layananInput'";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil && mysqli_num_rows($hasil) > 0) {
        $row = mysqli_fetch_assoc($hasil);
        echo ($row['harga_layanan']);
    } else {
        echo "Harga tidak ditemukan";
    }
}

if (isset($_POST['layanan'])) {
    $layananInput = $_POST['layanan'];
    get_harga($koneksi, $layananInput);
}
