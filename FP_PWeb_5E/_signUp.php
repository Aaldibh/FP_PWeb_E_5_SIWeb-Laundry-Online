<!-- HALAMAN DAFTAR CUSTOMER -->

<?php
session_start();

include_once("./loginAction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = signUp();
}
$nextId = getNextCustomerId();
?>

<!DOCTYPE html>
<html leng="en">

<head>
    <title>Smart Laundry</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <script type="text/javascript" src="./bootstrap-5.3.3-dist/js/Jquery.js"></script>
    <script type="text/javascript" src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
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
        max-width: 700px;
        padding: 20px;
        background-color: #fff;
        /* Warna latar belakang kontainer */
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Efek bayangan */
        align-items: center;
    }
</style>

<body>
    <div class="row container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">

                <h1 class="h2">DAFTAR AKUN</h1>
                <p>Belum punya akun nih? daftar dulu gih, isi yang lengkap ya...</p></br>

                <div class="row row-cols-1 row-cols-md-2 align-items-md-center5">
                    <div class="mb-3">
                        <label for="namaInput" class="h6 form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamatInput" class="h6 form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat tempat tinggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="teleponInput" class="h6 form-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Masukkan nomor telepon aktif" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="h6 form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-3">
                        <label for="genderInput" class="h6 form-label">Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="Male">Laki-laki</option>
                            <option value="Female">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="h6 form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Buat password" required>
                    </div>
                </div>

                <br>
                <div class="col modal-footer">
                    <a href="./index.php" type="button" class="btn btn-secondary" style="margin-right: auto;">Batal</a>
                    <a type="submit" class="btn btn-primary" style="margin-left: auto;" data-bs-toggle="modal" data-bs-target="#idCustomerModal">Daftar</a>
                    <div class="modal fade" id="idCustomerModal" tabindex="-1" aria-labelledby="idCustomerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="idCustomerModalLabel">ID Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: green;">Pendaftaran akun telah berhasil.</p><br>
                                    <p>ID Customer Anda adalah: <h7><?php echo $nextId; ?></h7>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="summit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>

</html>