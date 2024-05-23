<?php
//koneksi laundryDB
$koneksi = mysqli_connect("localhost", "root", "", "laundryDB");
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

function ambilDataPegawai()
{
    global $koneksi;
    $query = "SELECT * FROM tb_pegawai";
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
