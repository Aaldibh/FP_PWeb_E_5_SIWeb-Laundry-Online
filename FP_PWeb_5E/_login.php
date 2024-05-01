<?php
session_start();

include_once("loginAction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = loginAs_Cust($username, $password);

    if ($result == "success") {
        header("location:./_home.php");
    } else if($result == "failed"){
        header("location:./_login.php?pesan=gagal");
    } else if ($result == "null"){
        header("location:./_login.php?pesan=null");
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
                            <div class="form-group">

                                <br><h2>Login</h2><br>

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                
                                <a href="./index.php" type ="button" class="btn btn-primary">Kembali</a>
                                <input type="submit" class="btn btn-primary" value="Masuk"><br>

                                <label for="opsi" class="col-sm-9"><br/><br/>Login sebagai? </label><br>
                                <a href="./Admin/loginAdmin.php" type="button" class="btn btn-primary" name="lgnCust">Admin</a>
                                <a href="./owner/loginOwner.php" type="button" class="btn btn-primary" name="lgnCust">Owner</a><br/><br/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>