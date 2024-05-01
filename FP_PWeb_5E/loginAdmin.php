
<!-- Halaman Login Admin -->

<?php
session_start();

include_once("loginAction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = loginAs_Admin($username, $password);

    if ($result == "success") {
        header("location:./areaAdmin/_adminHome.php");
    } else if($result == "failed"){
        header("location:./loginAdmin.php?pesan=gagal");
    } else if ($result == "null"){
        header("location:./loginAdmin.php?pesan=null");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Smart Laundry</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
        <script type="text/javascript" src="./assets/js/Jquery.js"></script>
        <script type="text/javascript" src="./assets/js/bootstrap.js"></script>
    </head>

    <body style="background: white;">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <?php
                // session_start();

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

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="panel">
                        <div class="panel-body">
                            <br><h2>Login Admin</h2><br>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <a href="./_dashboard.php" type ="button" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-primary" value="Masuk">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>