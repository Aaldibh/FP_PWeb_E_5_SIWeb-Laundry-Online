<?php
//koneksi laundryDB
$koneksi = mysqli_connect("localhost", "root", "", "laundrydb");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

//tampil data layanan
function ambilDataAdmin()
{
    global $koneksi;
    $query = "SELECT * FROM tb_admin";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilDataCustomer()
{
    global $koneksi;
    $query = "SELECT * FROM tb_customer";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilDataLayanan()
{
    global $koneksi;
    $query = "SELECT * FROM tb_layanan";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilDataTransaksi()
{
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilTransaksiDiproses()
{
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi WHERE status_transaksi = 'diproses'";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilTransaksiDiambil()
{
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi WHERE status_transaksi = 'diambil'";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilTransaksiDiantar()
{
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi WHERE status_transaksi = 'diantar'";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilTransaksiSelesai()
{
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi WHERE status_transaksi = 'selesai'";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilTransaksiFromStatus($status)
{
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi WHERE status_transaksi = '$status'";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function ambilDataTransaksiForID($koneksi, $idCust)
{
    $queryTransaksi = "SELECT * FROM tb_transaksi WHERE idCust = '$idCust'";
    $resultTransaksi = mysqli_query($koneksi, $queryTransaksi);
    return $resultTransaksi;
}
