<?php
        session_start();

        include_once("../koneksi.php");
        $queryCust = "SELECT * FROM tb_customer";
        $queryLayanan = "SELECT * FROM tb_layanan";
        $queryAdmin = "SELECT * FROM tb_admin";

        $hasilCust = mysqli_query($koneksi, $queryCust);
        $hasilLayanan = mysqli_query($koneksi, $queryLayanan);
        $hasilAdmin = mysqli_query($koneksi, $queryAdmin);

        if($_SESSION['status']!="login"){
            header("location:./loginOwner.php?pesan=belum_login");
        }
        ?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Smart Laundry</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <!-- <link href="dashboard.css" rel="stylesheet"> -->
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
                height: 100vh; /* Menjadikan tinggi sidebar sama dengan tinggi viewport */
                overflow-y: auto; /* Membuat scrollbar jika konten melebihi tinggi sidebar */
            }

            .nav-link {
                margin-bottom: 10px; /* Atur ruang antar menu */
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
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Smart Laundry</a>

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

        <div class="container-fluid" style="max-width: 100%;">
            <div class="row">
                <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                        <div class="offcanvas-header">

                            <h5 class="offcanvas-title" id="sidebarMenuLabel">Smart Laundry</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a id="dashboardLink" class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                                        <i class="bi bi-house-fill"></i>
                                        Dashboard
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                                        <i class="bi bi-journals"></i>
                                        Data Transaksi
                                        <a class="visually-hidden-focusable" href="#dashboard">Skip to main content</a>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a id="dataCustomerLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                        <i class="bi bi-people"></i>
                                        Data Customer
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a id="dataLayananLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                        <i class="bi bi-shop-window"></i>
                                        Data Layanan
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a id="dataAdminLink" class="nav-link d-flex align-items-center gap-2" href="#">
                                        <i class="bi bi-person-vcard"></i>
                                        Data Admin
                                    </a>
                                </li>

                                <hr class="my-3">

                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center gap-2" href="../index.php">
                                                <i class="bi bi-door-closed"></i>
                                                Keluar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

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
                            </div>

                            <!-- page data customer -->
                            <div id="dataCustomerContent">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                    <h1 class="h2">Data Customer</h1>
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
                                        while ($data=mysqli_fetch_array($hasilCust)){?>
                                            <tr>
                                                <th scope = "row">
                                                    <?php echo $nomor; ?>
                                                </th>

                                                <td> <?php echo $data['namaCust']; ?></td>
                                                <td> <?php echo $data['alamatCust']; ?></td>
                                                <td> <?php echo $data['teleponCust']; ?></td>
                                                <td> <?php echo $data['emailCust']; ?></td>
                                                <td> <?php echo $data['genderCust']; ?></td>
                                                <td> <?php echo $data['statusCust']; ?></td>
                                                <td> <?php echo $data['passwordCust']; ?></td>

                                                <!-- <td> <a href="editdatabuku.php?id=<?php echo $data['id_buku']?>">Edit</a></td> -->
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
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                        <a href="#" class="btn btn-primary mb-3 mt-0 ml-3" data-bs-toggle="modal" data-bs-target="#modalTambahLayanan">
                                            <i class="bi bi-clipboard2-plus-fill"></i>
                                            <i class="fas fa-user-plus"></i>Tambah
                                        </a>
                                        <div class="modal" id="modalTambahLayanan" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tambah Layanan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Masukkan data layanan laundry.</p>

                                                        <form method="post" action="./prosesTambahLayanan.php">
                                                            <div class="mb-3">
                                                                <label for="layananInput" class="form-label">Layanan</label>
                                                                <input type="text" class="form-control" name="nama">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jenisPaketInput" class="form-label">Jenis Paket</label>
                                                                <input type="text" class="form-control" name="jenis">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="hargaInput" class="form-label">Harga</label>
                                                                <input type="text" class="form-control" name="harga">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button  type="submit" class="btn btn-primary">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Layanan</th>
                                            <th scope="col">Jenis Paket</th>
                                            <th scope="col">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        while ($data=mysqli_fetch_array($hasilLayanan)){?>
                                            <tr>
                                                <th scope = "row">
                                                    <?php echo $nomor; ?>
                                                </th>

                                                <td> <?php echo $data['nama_layanan']; ?></td>
                                                <td> <?php echo $data['jenis_paket']; ?></td>
                                                <td> <?php echo $data['harga_layanan']; ?></td>

                                            </tr>
                                                            
                                        <?php 
                                        $nomor++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                                        
                            <!-- Page Data Admin -->
                            <div id="dataAdminContent">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                    <h1 class="h2">Data Admin</h1>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                        <a href="#" class="btn btn-primary mb-3 mt-0 ml-3" data-bs-toggle="modal" data-bs-target="#modalTambahAdmin">
                                            <i class="bi bi-clipboard2-plus-fill"></i>
                                            <i class="fas fa-user-plus"></i>Tambah
                                        </a>
                                        <div class="modal" id="modalTambahAdmin" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tambah Admin</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Masukkan data admin laundry.</p>

                                                        <form method="post" action="../Admin/prosesTambahAdmin.php">
                                                            <div class="mb-3">
                                                                <label for="layananInput" class="form-label">Nama Admin</label>
                                                                <input type="text" class="form-control" name="nama">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jenisPaketInput" class="form-label">Password Admin</label>
                                                                <input type="password" class="form-control" name="password">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="hargaInput" class="form-label">Posisi Admin</label>
                                                                <input type="text" class="form-control" name="posisi">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button  type="submit" class="btn btn-primary">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">ID Admin</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Posisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        while ($data=mysqli_fetch_array($hasilAdmin)){?>
                                            <tr>
                                                <th scope = "row">
                                                    <?php echo $nomor; ?>
                                                </th>

                                                <td> <?php echo $data['idAdmin']; ?></td>
                                                <td> <?php echo $data['namaAdmin']; ?></td>
                                                <td> <?php echo $data['passwordAdmin']; ?></td>
                                                <td> <?php echo $data['posisiAdmin']; ?></td>

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
        
        <!-- Perpindahan navigasi dasboard owner -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const dashboardLink = document.querySelector('#dashboardLink');
                const dataCustomerLink = document.querySelector('#dataCustomerLink');
                const dataLayananLink = document.querySelector('#dataLayananLink');
                const dataAdminLink = document.querySelector('#dataAdminLink');

                const dashboardContent = document.querySelector('#dashboardContent');
                const dataCustomerContent = document.querySelector('#dataCustomerContent');
                const dataLayananContent = document.querySelector('#dataLayananContent');
                const dataAdminContent = document.querySelector('#dataAdminContent');

                // Cek apakah ada status terakhir yang disimpan di session storage
                const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
                if (lastSelectedPage === 'dataCustomer') {
                    dashboardContent.style.display = 'none';
                    dataCustomerContent.style.display = 'block';
                    dataLayananContent.style.display = 'none';
                    dataAdminContent.style.display = 'none';
                    dataCustomerLink.classList.add('active'); // Tambahkan kelas active ke tautan Data Customer

                } else if(lastSelectedPage === 'dataLayanan'){
                    dashboardContent.style.display = 'none';
                    dataLayananContent.style.display = 'block';
                    dataCustomerContent.style.display = 'none';
                    dataAdminContent.style.display = 'none';
                    dataLayananLink.classList.add('active'); // Tambahkan kelas active ke tautan data layanan

                }else if(lastSelectedPage === 'dataAdmin'){
                    dashboardContent.style.display = 'none';
                    dataLayananContent.style.display = 'none';
                    dataCustomerContent.style.display = 'none';
                    dataAdminContent.style.display = 'block';
                    dataAdminLink.classList.add('active'); // Tambahkan kelas active ke tautan data admin

                }else{
                    dashboardContent.style.display = 'block';
                    dataCustomerContent.style.display = 'none';
                    dataLayananContent.style.display = 'none';
                    dataAdminContent.style.display = 'none';
                    dashboardLink.classList.add('active');// Tambahkan kelas active ke tautan Dashboard
                }

                dashboardLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    dashboardContent.style.display = 'block';
                    dataCustomerContent.style.display = 'none';
                    dataLayananContent.style.display = 'none';
                    dataAdminContent.style.display = 'none';
                    sessionStorage.setItem('lastSelectedPage', 'dashboard'); // Simpan status terakhir ke session storage
                });

                dataCustomerLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    dashboardContent.style.display = 'none';
                    dataCustomerContent.style.display = 'block';
                    dataLayananContent.style.display = 'none';
                    dataAdminContent.style.display = 'none';
                    sessionStorage.setItem('lastSelectedPage', 'dataCustomer'); // Simpan status terakhir ke session storage
                });
                dataLayananLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    dashboardContent.style.display = 'none';
                    dataCustomerContent.style.display = 'none';
                    dataLayananContent.style.display = 'block';
                    dataAdminContent.style.display = 'none';
                    sessionStorage.setItem('lastSelectedPage', 'dataLayanan'); // Simpan status terakhir ke session storage
                });
                dataAdminLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    dashboardContent.style.display = 'none';
                    dataCustomerContent.style.display = 'none';
                    dataLayananContent.style.display = 'none';
                    dataAdminContent.style.display = 'block';
                    sessionStorage.setItem('lastSelectedPage', 'dataAdmin'); // Simpan status terakhir ke session storage
                });
            });

        </script>
    </body>
    
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
