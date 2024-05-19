<!-- Dasboard Smart Laundry -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smart Laundry</title>
        <link rel="stylesheet" href="_dashboardStyle.css">
        <link rel="stylesheet" href="./assets/bootstrap-5.3.3-examples/features/features.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <!--onclick="toggleMenu();  -->
        <header>
            <a href="#" class="logo">Smart Laundry</a>
            <!-- <div class="menuToggle"></div> -->
            <ul class="nav">
                <li><a class="nav-link" href="#beranda">Beranda</a></li>
                <li><a class="nav-link" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link" href="#layanan">Layanan</a></li>
                <li><a class="nav-link" href="#kontak">Kontak</a></li>

                <li><a href="_signUp.php" type="button" class="btnDaftar" style="text-decoration: none;">Daftar</a></li>
                <li><div class="btn-group">
                    <a href="./_login.php" type="button" class="btnMasuk2" style="text-decoration: none;">Masuk</a>
                    <button  type="button" class="btnMasuk2 btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu gap-1 p-2 mx-0 shadow w-150px">
                        <li><a class="dropdown-item rounded-2 active" href="./_login.php">Sebagai Customer</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item rounded-2" href="./Admin/loginAdmin.php">Sebagai Admin</a></li>
                        <li><a class="dropdown-item rounded-2" href="./Owner/loginOwner.php">Sebagai Owner</a></li>
                    </ul>
                </div></li>
            </ul>
        </header>

        <!-- Landing Page Start -->
        <section class="beranda" id="beranda">
            <div class="content">
                <h2>Smart laundry</h2>
                <p>
                    Buat kegiatan mencucimu menjadi<br>
                    lebih mudah dengan beberapa sentuhan.
                </p>
                <a href="./_login.php" type="button" class="btnMasuk" style="text-decoration: none;">Masuk</a>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="about">
            <div class="container px-4 py-5">
                <!-- item about -->
                <h2 class="pb-2 border-bottom"><span>T</span>entang Kami</h2>
                <div class="row align-items-md-center">

                        <p>Sistem informasi laundry berbasis web merupakan platform digital yang dirancang untuk mencapai SDGs nomor 9, 
                            yaitu meningkatkan infrastruktur yang tangguh, mempromosikan industrialisasi yang inklusif dan berkelanjutan, 
                            dan mendorong inovasi. Aplikasi ini dapat membantu meningkatkan infrastruktur digital dan teknologi di industri 
                            laundry dan dapat membantu industri laundry menjadi lebih inklusif dan berkelanjutan dengan menyediakan platform bagi 
                            pengusaha kecil dan menengah untuk bersaing di pasar. </p><br>
                        <p>Selain itu, aplikasi ini menawarkan beberapa fitur seperti pemesanan online, pelacakan status cucian, pembayaran online, 
                            dan sebagainya. Fitur-fitur tersebut dapat meningkatkan kemudahan pelanggan dalam melakukan laundry. Aplikasi ini juga 
                            menyediakan fitur yang berguna untuk pengusaha laundry seperti rekapitulasi data, dan juga fitur lainnya yang dapat 
                            membantu pengusaha laundry dalam mengelola usahanya dengan lebih mudah dan efisien. Project ini diharapkan dapat 
                            menghasilkan sistem informasi laundry berbasis web yang bermanfaat bagi pengusaha laundry dan juga pelanggannya. </p>
                    
                </div>
            </div>
        </section>

        <!-- Layanan -->
        <section class="layanan" id="layanan">
            <div class="container px-4 py-5">
                <h2 class="pb-2 border-bottom">Layanan <span>K</span>ami</h2>

                <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">Banyak Pilihan Layanan</h2>
                    <p class="text-body-secondary">Smart laundry menawarkan banyak layanan untuk Anda loh!!!</p>
                    <a href="#" class="btn btn-primary btn-lg">Mulai</a>
                </div>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <img src="./assets/bootstrap-icons-1.11.0/truck-white.svg" style="margin:5px;">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Laundry Delivery</h4>
                        <p class="text-body-secondary">Nge-laundry sambil rebahan, ga perlu datang ke tempat laundy guys!.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#gear-fill" />
                        </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Cuci Setrika</h4>
                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#speedometer" />
                        </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Cuci Basah</h4>
                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#table" />
                        </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Cuci Kering</h4>
                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Kontak -->
        <section class="kontak" id="kontak">
            <div class="container">
                <div class="title">
                    <h2 class="titleText">Info <span>K</span>ontak</h2>
                </div>

                <div class="box">
                    <div class="kontakForm">
                        <h3>Kirim Pesan</h3>
                        <div class="inputBox">
                            <input type="text" placeholder="Name">
                        </div>

                        <div class="inputBox">
                            <input type="text" placeholder="Email">
                        </div>

                        <div class="inputBox">
                            <textarea type="text" placeholder="Kotak Pesan"></textarea>
                        </div>
                        
                        <div class="inputBox">
                            <input type="submit" class="btnSubmit" value="Kirim">
                        </div>
                    </div>
                    
                    <div class="map">

                        <div class="info">
                            <span>No.Telepon :</span>
                            <p>+6281323xxxxxx</p>
                        </div>

                        <div class="info">
                            <span>Email :</span>
                            <p>smartlaundry@gmail.com</p>
                        </div>

                        <div class="info">
                            <span>Alamat :</span>
                            <p>Surabaya, Indonesia</p>
                        </div><br>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1795614693174!2d112.78832469999999!3d-7.333721199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fab87edcad15%3A0xb26589947991eea1!2sUniversitas%20Pembangunan%20Nasional%20%22Veteran%22%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1714191004677!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright -->
        
        <script src="LaundryAppJS.js"></script>
        <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>