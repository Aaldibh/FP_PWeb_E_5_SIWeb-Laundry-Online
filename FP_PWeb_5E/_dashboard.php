<!-- Dasboard Smart Laundry -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smart Laundry</title>
        <link rel="stylesheet" href="<?='_dashboardStyle.css'?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body>
        <!--onclick="toggleMenu();  -->
        <header>
            <a href="#" class="logo">Smart Laundry</a>
            <!-- <div class="menuToggle"></div> -->
            <ul class="nav">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li><a href="./_login.php" type="button" class="btnMasuk2">Masuk</a></li>
                <li><a href="#" type="button" class="btnDaftar">Daftar</a></li>
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
                <a href="#" type="button" class="btnMasuk">Masuk</a>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="about">
            <div class="container">
                <!-- item about -->
                <div class="row">
                    <div class="col50">
                        <div class="titleText">
                            <span>T</span>entang Kami
                        </div>
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
            </div>
        </section>

        <!-- Layanan -->
        <section class="layanan" id="layanan">
            <div class="container">
                <div class="title">
                    <h2 class="titleText"><span>L</span>ayanan Kami</h2>
                    <p> Smart Laundri menyajikan beberapa layanan yang dapat membantu Anda untuk mencuci pakaian</p>
                </div>
                <div class="menu">
                    <div class="row">
                        <div class="card">
                            <div class="boxcard">
                                <div class="imgBx">
                                    <img src="./delivery2.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h3>Delivery</h3>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card">
                            <div class="boxcard">
                                <div class="imgBx">
                                    <img src="./drycleaning.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h3>Dry Cleaning</h3>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card">
                            <div class="boxcard">
                                <div class="imgBx">
                                    <img src="./onlineservice.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h3>Layanan Online</h3>
                                </div>
                                
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
</html>