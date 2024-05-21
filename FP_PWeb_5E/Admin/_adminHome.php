<!-- Halaman Owner -->

<?php
session_start();

include_once("../koneksi.php");
if ($_SESSION['status'] != "login") {
    header("location:../loginAdmin.php?pesan=belum_login");
}
include_once("./functionOperationAdmin.php");
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <title>Smart Laundry</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: auto;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        height: 4rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .offcanvas-body {
        height: 100vh;
        /* Menjadikan tinggi sidebar sama dengan tinggi viewport */
        overflow-y: auto;
        /* Membuat scrollbar jika konten melebihi tinggi sidebar */
    }

    .nav-link {
        margin-bottom: 10px;
        /* Atur ruang antar menu */
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
</style>

<body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">RUANG ADMIN<br>Hai, <?php echo $_SESSION['username']; ?></a>
        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                    <i class="bi bi-search" href="#search"></i>
                </button>
            </li>

            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list" href="#list"></i>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>

    </header>

    <!-- Navigasi bar -->
    <div class="container-fluid" style="max-width: 100%;">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">RUANG ADMIN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a id="dashboardLink" class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                                    <img src="../assets/bootstrap-icons-1.11.0/house-fill.svg">
                                    Dashboard
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="dataTransaksiLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                    <img src="../assets/bootstrap-icons-1.11.0/journals.svg">
                                    Daftar Transaksi
                                    <a class="visually-hidden-focusable" href="#dashboard">Skip to main content</a>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="dataCustomerLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                    <img src="../assets/bootstrap-icons-1.11.0/people.svg">
                                    Daftar Customer
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="dataLayananLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                    <img src="../assets/bootstrap-icons-1.11.0/shop-window.svg">
                                    Data Layanan
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="dataPegawaiLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                    <img src="../assets/bootstrap-icons-1.11.0/person-lines-fill.svg">
                                    Absensi Pegawai
                                </a>
                            </li>

                            <hr class="my-3">

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="../index.php">
                                        <img src="../assets/bootstrap-icons-1.11.0/door-closed.svg">
                                        Keluar
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <!-- main control halaman Admin -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- page dashboard -->
                <div id="dashboardContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                                <i class="bi bi-calendar3"></i>
                                Minggu ini
                            </button>
                        </div>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-danger" style="padding:60px; margin:10px;">
                            Dalam Antrian <span class="badge text-bg-dark">0</span>
                        </button>
                        <button type="button" class="btn btn-secondary" style="padding:60px; margin:10px;">
                            Sedang Diproses <span class="badge text-bg-dark">0</span>
                        </button>
                        <button type="button" class="btn btn-primary" style="padding:60px; margin:10px;">
                            Sedang Diantar <span class="badge text-bg-dark">0</span>
                        </button>
                        <button type="button" class="btn btn-success" style="padding:60px; margin:10px;">
                            Pesanan Selesai <span class="badge text-bg-dark">0</span>
                        </button>
                    </div>
                    <div id="antrianContent">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h5 class="h5">Pesanan Perlu Di proses</h5>
                        </div>

                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Transaksi</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">harga 1 Potong</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Bayar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                $hasilTransaksi = insertDataTransaksi();
                                while ($data = mysqli_fetch_array($hasilTransaksi)) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $nomor; ?>
                                        </th>

                                        <td> <?php echo $data['id_transaksi']; ?></td>
                                        <td> <?php echo $data['nama_customer']; ?></td>
                                        <td> <?php echo $data['layanan']; ?></td>
                                        <td> <?php echo $data['harga_perItem']; ?></td>
                                        <td> <?php echo $data['jumlah_item']; ?></td>
                                        <td> <?php echo $data['keterangan']; ?></td>
                                        <td> <?php echo $data['total_transaksi']; ?></td>
                                        <td> <a href="#" class="btn btn-primary mb-3 mt-0 ml-3" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#modalTambahPegawai">
                                                <i class="fas fa-user-plus"></i>Proses
                                            </a>
                                        </td>

                                    </tr>

                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div id="prosesContent">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h5 class="h5">Pesanan Perlu Di proses</h5>
                        </div>

                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Transaksi</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">harga 1 Potong</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Bayar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                $hasilTransaksi = insertDataTransaksi();
                                while ($data = mysqli_fetch_array($hasilTransaksi)) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $nomor; ?>
                                        </th>

                                        <td> <?php echo $data['id_transaksi']; ?></td>
                                        <td> <?php echo $data['nama_customer']; ?></td>
                                        <td> <?php echo $data['layanan']; ?></td>
                                        <td> <?php echo $data['harga_perItem']; ?></td>
                                        <td> <?php echo $data['jumlah_item']; ?></td>
                                        <td> <?php echo $data['keterangan']; ?></td>
                                        <td> <?php echo $data['total_transaksi']; ?></td>
                                        <td> <a href="#" class="btn btn-primary mb-3 mt-0 ml-3" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#modalTambahPegawai">
                                                <i class="fas fa-user-plus"></i>Antar
                                            </a>
                                        </td>

                                    </tr>

                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="diantarContent">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h5 class="h5">Pesanan Perlu Di proses</h5>
                        </div>

                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Transaksi</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">harga 1 Potong</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Bayar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                $hasilTransaksi = insertDataTransaksi();
                                while ($data = mysqli_fetch_array($hasilTransaksi)) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $nomor; ?>
                                        </th>

                                        <td> <?php echo $data['id_transaksi']; ?></td>
                                        <td> <?php echo $data['nama_customer']; ?></td>
                                        <td> <?php echo $data['layanan']; ?></td>
                                        <td> <?php echo $data['harga_perItem']; ?></td>
                                        <td> <?php echo $data['jumlah_item']; ?></td>
                                        <td> <?php echo $data['keterangan']; ?></td>
                                        <td> <?php echo $data['total_transaksi']; ?></td>
                                        <td> <a href="#" class="btn btn-primary mb-3 mt-0 ml-3" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#modalTambahPegawai">
                                                <i class="fas fa-user-plus"></i>Selesai
                                            </a>
                                        </td>

                                    </tr>

                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="pesananSelesaiContent">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h5 class="h5">Pesanan Perlu Di proses</h5>
                        </div>

                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Transaksi</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">harga 1 Potong</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Bayar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                $hasilTransaksi = insertDataTransaksi();
                                while ($data = mysqli_fetch_array($hasilTransaksi)) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $nomor; ?>
                                        </th>

                                        <td> <?php echo $data['id_transaksi']; ?></td>
                                        <td> <?php echo $data['nama_customer']; ?></td>
                                        <td> <?php echo $data['layanan']; ?></td>
                                        <td> <?php echo $data['harga_perItem']; ?></td>
                                        <td> <?php echo $data['jumlah_item']; ?></td>
                                        <td> <?php echo $data['keterangan']; ?></td>
                                        <td> <?php echo $data['total_transaksi']; ?></td>
                                        <td> <a href="#" style="margin-right: 10px; margin-left: 10px;">
                                                Detail
                                            </a>
                                        </td>

                                    </tr>

                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- page data transaksi -->
                <div id="dataTransaksiContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Daftar Transaksi</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                                <i class="bi bi-calendar3"></i>
                                Minggu ini
                            </button>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">harga 1 Potong</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Total</th>
                                <th scope="col">Bayar</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $nomor = 1;
                            $hasilTransaksi = insertDataTransaksi();
                            while ($data = mysqli_fetch_array($hasilTransaksi)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $nomor; ?>
                                    </th>

                                    <td> <?php echo $data['id_transaksi']; ?></td>
                                    <td> <?php echo $data['nama_customer']; ?></td>
                                    <td> <?php echo $data['layanan']; ?></td>
                                    <td> <?php echo $data['harga_perItem']; ?></td>
                                    <td> <?php echo $data['jumlah_item']; ?></td>
                                    <td> <?php echo $data['keterangan']; ?></td>
                                    <td> <?php echo $data['total_transaksi']; ?></td>
                                    <td> <?php echo $data['total_bayar']; ?></td>
                                    <td> <?php echo $data['status_transaksi']; ?></td>
                                </tr>

                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- page data customer -->
                <div id="dataCustomerContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Daftar Customer</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                                <i class="bi bi-calendar3"></i>
                                Minggu ini
                            </button>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Customer</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Status Member</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $hasilCust = insertDataCustomer();
                            while ($data = mysqli_fetch_array($hasilCust)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $nomor; ?>
                                    </th>

                                    <td> <?php echo $data['idCust']; ?></td>
                                    <td> <?php echo $data['namaCust']; ?></td>
                                    <td> <?php echo $data['alamatCust']; ?></td>
                                    <td> <?php echo $data['teleponCust']; ?></td>
                                    <td> <?php echo $data['emailCust']; ?></td>
                                    <td> <?php echo $data['genderCust']; ?></td>
                                    <td> <?php echo $data['statusCust']; ?></td>
                                    <td> <?php echo $data['passwordCust']; ?></td>
                                </tr>

                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- page data layanan -->
                <div id="dataLayananContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Data Layanan</h1>
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Harga 1 Potong</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $hasilLayanan = insertDataLayanan();
                            while ($data = mysqli_fetch_array($hasilLayanan)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $nomor; ?>
                                    </th>

                                    <td> <?php echo $data['nama_layanan']; ?></td>
                                    <td> <?php echo $data['harga_layanan']; ?></td>
                                </tr>

                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- page absensi pegawai -->
                <div id="dataPegawaiContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Data Pegawai</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <!-- button tambah layanan -->
                            <a href="#" class="btn btn-primary mb-3 mt-0 ml-3" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#modalTambahPegawai">
                                <i class="bi bi-clipboard2-plus-fill"></i>
                                <i class="fas fa-user-plus"></i>Tambah
                            </a>
                            <!-- pop up untuk memasukan inputan tambah layanan -->
                            <?php popupTambahPegawai(); ?>
                            <a href="reportDataKaryawan_PDF.php" target="_blank" class="btn btn-success mb-3 mt-0 ml-3"><i class="fa fa-file-pdf-o"></i>Cetak</a>

                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="coll">No. Telp</th>
                                <th scope="coll">Alamat</th>
                                <th scope="coll">Absensi</th>
                                <th scope="coll">Jumlah Absensi</th>
                                <th scope="coll">Keterangan</th>
                                <th scope="coll">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $hasilPegawai = insertDataPegawai();
                            while ($data = mysqli_fetch_array($hasilPegawai)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $nomor; ?>
                                    </th>

                                    <td> <?php echo $data['id_pegawai']; ?></td>
                                    <td> <?php echo $data['nama_pegawai']; ?></td>
                                    <td> <?php echo $data['posisi_pegawai']; ?></td>
                                    <td> <?php echo $data['gender_pegawai']; ?></td>
                                    <td> <?php echo $data['noTlp_pegawai']; ?></td>
                                    <td> <?php echo $data['alamat_pegawai']; ?></td>

                                    <!--button absensi-->
                                    <td style="text-align:center;">
                                        <select class="form-control" name="absen" required>
                                            <option value="Masuk">Masuk</option>
                                            <option value="Tidak Masuk">Tidak Masuk</option>
                                        </select>
                                    </td>

                                    <td> <?php echo $data['jmlAbsen_pegawai']; ?></td>

                                    <!--button keterangan-->
                                    <td style="text-align:center;">
                                        <a href="#" style="margin-right: 10px; margin-left: 10px;">
                                            Detail
                                        </a>
                                    </td>

                                    <td style="text-align:center;">
                                        <a href="#" style="margin-right: 10px; margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#modalEditpegawai_<?php echo $data['id_pegawai']; ?>">
                                            <img src="../assets/bootstrap-icons-1.11.0/pencil-fill.svg">
                                            Edit
                                        </a>
                                        <?php popupEditPegawai($koneksi, $data['id_pegawai']); ?>
                                        <label>|</label>
                                        <a href="#" style="margin-right: 10px; margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#modalHapusPegawai_<?php echo $data['id_pegawai']; ?>">
                                            <img src="../assets/bootstrap-icons-1.11.0/trash-red.svg">
                                            Hapus
                                        </a>
                                        <?php popupHapus_Pegawai($koneksi, $data['id_pegawai']); ?>
                                    </td>

                                </tr>

                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    </div>
    </div>
</body>

<script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
<!-- Perpindahan navigasi dasboard owner -->
<Script src="./barStatusResponAdmin.js"></Script>
<script src="./barResponAdmin.js"></script>

</html>