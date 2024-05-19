<!-- koneksi laundyDB -->
<?php
    $koneksi = mysqli_connect("localhost", "root", "", "laundryDB");
    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

//tampil data layanan
function insertDataAdmin(){
    global $koneksi;
    $query = "SELECT * FROM tb_admin";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function insertDataCustomer(){
    global $koneksi;
    $query = "SELECT * FROM tb_customer";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function insertDataLayanan(){
    global $koneksi;
    $query = "SELECT * FROM tb_layanan";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function insertDataPegawai(){
    global $koneksi;
    $query = "SELECT * FROM tb_pegawai";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

function insertDataTransaksi(){
    global $koneksi;
    $query = "SELECT * FROM tb_transaksi";
    $hasil = mysqli_query($koneksi, $query);
    return $hasil;
}

?>


