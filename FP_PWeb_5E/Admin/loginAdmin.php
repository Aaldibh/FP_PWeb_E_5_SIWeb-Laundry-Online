<!-- Halaman Login Admin -->

<?php
session_start();

include_once("../loginAction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usernameAdmin'];
    $password = $_POST['passwordAdmin'];

    $result = loginAs_Admin($username, $password);

    if ($result == "success") {
        header("location:./_adminHome.php");
    } else if($result == "failed"){
        header("location:./loginAdmin.php?pesan=gagal");
    } else if ($result == "null"){
        header("location:./loginAdmin.php?pesan=null");
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            background-color: #f8f9fa; /* Warna latar belakang body */
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang kontainer */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
    </style>

    <body>
        <div class="container">
            <?php

            if(isset($_GET['pesan'])){

                if($_GET['pesan'] == "gagal"){
                    echo "<br><div class = 'alert alert-danger'>Login gagal! username dan password salah!</div>";

                }else if($_GET['pesan'] == "logout"){
                    echo "<br><div class = 'alert alert-info'>Anda telah berhasil logout.</div>";

                }else if($_GET['pesan'] == "belum_login"){
                    echo "<br><div class = 'alert alert-danger'>Anda harus login untuk mengakses layanan Smart Laundry.</div>";
                }else if($_GET['pesan'] == "null"){
                    echo "<br><div class = 'alert alert-danger'>Inputkan username dan password Anda!</div>";
                }
            }
            ?>

            <br>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="panel">
                    <div class="panel-body">    
                        <div class="form-group">

                            <h1 class="h3 mb-3 fw-normal">Masuk Akun Admin</h1>

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" name="usernameAdmin" placeholder="Masukkan username">
                                <label for="floatingInput">Username</label>
                            </div><br>
                            
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="passwordAdmin" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="form-check text-start my-3">
                                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                            </div>

                            <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>