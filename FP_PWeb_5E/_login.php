<?php
session_start();

include_once("loginAction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST['idCust'];
    $password = $_POST['password'];

    $result = loginAs_Cust($ID, $password);

    if ($result == "success") {
        header("location:./_home.php");
    } else if ($result == "failed") {
        header("location:./_login.php?pesan=gagal");
    } else if ($result == "null") {
        header("location:./_login.php?pesan=null");
    }
}
?>

<!DOCTYPE html>
<html leng="en">

<head>
    <title>Smart Laundry</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <script type="text/javascript" src="./bootstrap-5.3.3-dist/js/Jquery.js"></script>
    <script type="text/javascript" src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
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

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f8f9fa;
        /* Warna latar belakang body */
    }

    .container {
        max-width: 400px;
        padding: 20px;
        background-color: #fff;
        /* Warna latar belakang kontainer */
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Efek bayangan */
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>
    <div class="container">
        <?php

        if (isset($_GET['pesan'])) {

            if ($_GET['pesan'] == "gagal") {
                echo "<br><div class = 'alert alert-danger'>Login gagal! username dan password salah!</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<br><div class = 'alert alert-info'>Anda telah berhasil logout.</div>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "<br><div class = 'alert alert-danger'>Anda harus login untuk mengakses layanan Smart Laundry.</div>";
            } else if ($_GET['pesan'] == "null") {
                echo "<br><div class = 'alert alert-danger'>Inputkan username dan password Anda!</div>";
            }
        }
        ?>

        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <h1 class="h3 mb-3 fw-normal"><a href="./index.php" style="margin-right: 10px; text-decoration:none;"><img src="./assets/bootstrap-icons-1.11.0/arrow-left-circle.svg" style="width: 24px; height:24px;">
                            </a>

                            Masuk Akun Customer</h1><br>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="idCust" placeholder="Masukkan ID Akun">
                            <label for="floatingInput">ID Pelanggan</label>
                        </div><br>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div><br><br>

                        <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button><br>
                        <br><label>Belum punya akun? <a href="./_signUp.php">Daftar disini</a></label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>