<!-- Halaman Customer -->
<?php
session_start();

include_once("./koneksi.php");

if ($_SESSION['status'] != "login") {
    header("location:./_login.php?pesan=belum_login");
    exit();
}

$idCust = $_SESSION['idCust']; // Ambil ID customer dari session

$queryProfil = "SELECT * FROM tb_customer WHERE idCust = '$idCust'";
$resultProfil = mysqli_query($koneksi, $queryProfil);
if (mysqli_num_rows($resultProfil) > 0) {
    $dataProfil = mysqli_fetch_assoc($resultProfil);
}

// Ambil data layanan dari database
$layananQuery = "SELECT * FROM tb_layanan";
$layananResult = mysqli_query($koneksi, $layananQuery);
$layananArray = array();
while ($row = mysqli_fetch_assoc($layananResult)) {
    $layananArray[] = $row;
}

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <title>Smart Laundry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-examples/features/features.css">
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
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

    .square-btn {
        display: inline-block;
        width: 200px;
        /* Atur ukuran sesuai kebutuhan */
        height: 200px;
        /* Atur ukuran sesuai kebutuhan */
        text-align: Left;
        font-size: small;
        vertical-align: middle;
        padding: 10px;
        margin: 10px;
        background-color: #f8f9fa;
        /* Warna latar belakang */
        border: 1px solid #ddd;
        /* Warna dan ukuran border */
        border-radius: 5px;
        /* Radius sudut */
    }

    .feature-icon-small {
        margin-bottom: 10px;
    }

    .square-btn img {
        max-width: 100%;
        max-height: 100%;
    }
</style>

<body>
    <!-- HEADER HALAMAN CUSTOMER -->
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">SELAMAT DATANG<br>Hai, selamat menikmati layanan Smart Laundry kami!</a>
        <ul class="navbar-nav flex-row d-md-none">

            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i href="#list"><img src="./assets/bootstrap-icons-1.11.0/list-white.svg" style="width:30px; height:30px; margin-top:5px; margin-right:5px;"></i>
                </button>
            </li>
        </ul>
    </header>

    <!-- BAR NAVIGASI -->
    <div class="container-fluid" style="max-width: 100%;">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary" style="position: fixed;">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Smart Laundry</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a id="dashboardLink" class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                                    <img src="./assets/bootstrap-icons-1.11.0/cart-plus.svg">
                                    Layanan Laundry
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="riwayatTransaksiLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                    <img src="./assets/bootstrap-icons-1.11.0/journals.svg">
                                    Riwayat Transaksi
                                    <a class="visually-hidden-focusable" href="#dashboard">Skip to main content</a>
                                </a>
                            </li>

                            <hr class="my-3">

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a id="profilLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                        <img src="./assets/bootstrap-icons-1.11.0/person.svg">
                                        Profil
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="index.php">
                                        <img src="./assets/bootstrap-icons-1.11.0/door-closed.svg">
                                        Keluar
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <!-- MAIN CONTROL HALAMAN CUSTOMER -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <!-- KONTEN DASHBOARD -->
                <div id="dashboardContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">NgeLaundry Lagi Yuk!</h1>
                    </div>
                    <div class="col">
                        <a type="button" class="btn btn-light square-btn" id="cuciBasahLink">
                            <div class="col d-flex flex-column gap-2">
                                <img src="./assets/icon-laundry/cuci-basah.svg" style="margin:5px; width:50px; height:50px;">
                                <h5 class="fw-semibold mb-0 text-body-emphasis">Cuci Basah</h5>
                                <p class="text-body-secondary">Cuci bersih wangi, tapi belum kering dan ngga disetrika.</p>
                            </div>
                        </a>
                        <a type="button" class="btn btn-light square-btn" id="cuciKeringLink">
                            <div class="col d-flex flex-column gap-2">
                                <img src="./assets/icon-laundry/cuci-kering.svg" style="margin:5px; width:50px; height:50px;">
                                <h5 class="fw-semibold mb-0 text-body-emphasis">Cuci Kering</h5>
                                <p class="text-body-secondary">Cuci bersih, wangi, kering, dilipat, dan ngga disetrika.</p>
                            </div>
                        </a>
                        <a type="button" class="btn btn-light square-btn" id="cuciSetrikaLink">
                            <div class="col d-flex flex-column gap-2">
                                <img src="./assets/icon-laundry/cuci-setrika.svg" style="margin:5px; width:50px; height:50px;">
                                <h5 class="fw-semibold mb-0 text-body-emphasis">Cuci Setrika</h5>
                                <p class="text-body-secondary">Cuci bersih, wangi, dan disetrika</p>
                            </div>
                        </a>
                        <a type="button" class="btn btn-light square-btn" id="setrikaSajaLink">
                            <div class="col d-flex flex-column gap-2">
                                <img src="./assets/icon-laundry/setrika-saja.svg" style="margin:5px; width:50px; height:50px;">
                                <h5 class="fw-semibold mb-0 text-body-emphasis">Setrika Saja</h5>
                                <p class="text-body-secondary mb-0">Udah nyuci banyak? Biar ngga capek, pakai layanan ini aja buat setrika cucianmu.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- KONTEN CHECKOUT ATAU PENGISIAN DATA PESANAN -->
                <div id="checkoutContent" style="display: none;">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <a href="#" style="margin-right: 10px; margin-left: 10px;" id="kembaliDashboardLink"><img src="./assets/bootstrap-icons-1.11.0/arrow-left-circle.svg" style="width: 30px; height:30px;">
                        </a>
                        <h1 class="h2"> Pembayaran</h1>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-5 col-lg-8">
                            <form method="post" action="./prosesCheckout.php" onsubmit="getMetodeBayar()">
                                <div class="row g-3">
                                    <h4 class="mb-0">Data Pengiriman dan Pengambilan</h4>

                                    <input type="hidden" class="form-control" name="idCust" value="<?php echo $dataProfil['idCust'] ?>">

                                    <div class="col-12">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="col-12">
                                        <label for="noTlp" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" name="noTlp">
                                    </div>
                                    <div class="col-12">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat">
                                    </div>
                                    <div class="col-12">
                                        <label for="waktuAmbil" class="form-label">Jam Ambil Kurir</label>
                                        <select class="form-check-label form-control" name="waktuAmbil">
                                            <option value="" selected disabled>Pilih waktu ambil kurir</option>
                                            <option value="09.00 - 12.00">09:00 - 12:00</option>
                                            <option value="13.00 - 15.00">13:00 - 15:00</option>
                                            <option value="16.00 - 18.00">16:00 - 18:00</option>
                                        </select>
                                    </div>

                                    <hr class="my-4">

                                    <h4 class="mb-0">Data Pesanan</h4>
                                    <div class="col-sm-6">
                                        <label for="layanan" class="form-label">Layanan</label>
                                        <select class="form-control" name="layanan" id="layanan" onchange="updateHarga()" required>
                                            <option value="" selected disabled>Pilih Layanan</option>
                                            <?php foreach ($layananArray as $layanan) { ?>
                                                <option value="<?php echo $layanan['nama_layanan']; ?>" data-harga="<?php echo $layanan['harga_layanan']; ?>">
                                                    <?php echo $layanan['nama_layanan']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="harga" class="form-label">Harga /16ptg</label>
                                        <input type="text" class="form-control" name="harga" id="harga" readonly>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="jumlah" class="form-label">Jumlah Item</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="0" oninput="hitungTagihan()" required>

                                    </div>

                                    <div class="col-12">
                                        <label for="keterangan" class="form-label">Keterangan Tambahan</label>
                                        <textarea class="form-control" name="keterangan" rows="4"></textarea>

                                    </div>

                                    <div class="col-12">
                                        <label for="tagihan" class="form-label">Total Tagihan</label>
                                        <input type="text" class="form-control" name="tagihan" id="tagihan" placeholder="0" readonly>
                                    </div>

                                    <hr class="my-4">

                                    <h4 class="mb-3">Metode Pembayaran</h4>
                                    <div class="my-3">
                                        <div class="form-check">
                                            <input name="metodeBayar" type="radio" class="form-check-input" value="ShopeePay" required>
                                            <label class="form-check-label" for="ShopeePay">ShopeePay</label>
                                        </div>
                                        <div class="form-check">
                                            <input name="metodeBayar" type="radio" class="form-check-input" value="DANA" required>
                                            <label class="form-check-label" for="DANA">DANA</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <div class="mb-5">
                                    <button class="w-39 btn btn-primary btn-lg" type="submit">Buat Pesanan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- page riwayat transaksi -->
                <div id="riwayatTransaksiContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Riwayat Transaksi</h1>
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Waktu Ambil</th>
                                <th scope="col">harga 1 Potong</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $nomor = 1;
                            $hasilTransaksi = ambilDataTransaksiForID($koneksi, $idCust);
                            while ($data = mysqli_fetch_array($hasilTransaksi)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $nomor; ?>
                                    </th>

                                    <td> <?php echo $data['id_transaksi']; ?></td>
                                    <td><?php echo $data['tanggal_pesan']; ?></td>
                                    <td> <?php echo $data['layanan']; ?></td>
                                    <td> <?php echo $data['waktuAmbil']; ?></td>
                                    <td> <?php echo $data['harga_perItem']; ?></td>
                                    <td> <?php echo $data['jumlah_item']; ?></td>
                                    <td> <?php echo $data['keterangan']; ?></td>
                                    <td> <?php echo $data['total_transaksi']; ?></td>
                                    <td> <?php echo $data['status_transaksi']; ?></td>

                                </tr>

                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- page profil customer -->
                <div id="profilContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Profil</h1>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-5 col-lg-8">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="nama" class="form-label">ID Pelanggan</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $dataProfil['idCust']; ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $dataProfil['namaCust']; ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $dataProfil['emailCust']; ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="noTlp" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="noTlp" value="<?php echo $dataProfil['teleponCust']; ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $dataProfil['alamatCust']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <script>
                function updateHarga() {
                    var layananSelect = document.getElementById('layanan');
                    var hargaInput = document.getElementById('harga');
                    var selectedOption = layananSelect.options[layananSelect.selectedIndex];
                    var harga = selectedOption.getAttribute('data-harga');
                    document.getElementById('harga').value = harga;
                    hitungTagihan();
                }

                function hitungTagihan() {
                    var hargaInput = parseFloat(document.getElementById('harga').value);
                    var jumlahInput = parseFloat(document.getElementById('jumlah').value);
                    var tagihanInput = document.getElementById('tagihan');
                    var totalTagihan = hargaInput * jumlahInput;
                    document.getElementById('tagihan').value = totalTagihan;
                }

                function getMetodeBayar() {
                    var radios = document.getElementsByName('metodeBayarRadio');
                    var selectedValue = '';
                    for (var i = 0; i < radios.length; i++) {
                        if (radios[i].checked) {
                            selectedValue = radios[i].value;
                            break;
                        }
                    }
                    document.getElementById('metodeBayar').value = selectedValue;
                }
            </script>
        </div>
    </div>

    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"></script>

</body>
<!-- Perpindahan navigasi dasboard owner -->
<script src="./barNavCustomer.js"></script>

</html>