<!DOCTYPE html>
<html>
    <head>
        <title>Smart Laundry</title>
    </head>
    <body>
        <h2>Halaman Customer</h2><br>

        <?php
        session_start();

        if($_SESSION['status']!="login"){
            header("location:./_login.php?pesan=belum_login");
        }
        ?>

        <h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
        <p>Selamat Datang di Halaman Admin</p><br>
        <a href="./index.php">Logout</a><br>
    </body>
</html>