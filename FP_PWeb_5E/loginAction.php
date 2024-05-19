<?php
// session_start();

function loginAs_Admin($username, $password){
    include_once ("koneksi.php");

    $dataAdmin = mysqli_query($koneksi,"select * from tb_admin where namaAdmin='$username' and passwordAdmin='$password'");
    $cekAdmin = mysqli_num_rows($dataAdmin);

    if(empty($username) || empty($password)){
        return "null";
    }else{
        if($cekAdmin > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            return "success";

        }else{
            return "failed";
        }
    }
}

function loginAs_Owner($username, $password){
    include_once ("koneksi.php");

    $dataOwner = mysqli_query($koneksi,"select * from tb_owner where namaOwner='$username' and passwordOwner='$password'");
    $cekOwner = mysqli_num_rows($dataOwner);

    if(empty($username) || empty($password)){
        return "null";

    }else{
        if($cekOwner > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            return "success";

        }else{
            return "failed";
        }
    }
}

function loginAs_Cust($username, $password){
    include_once ("koneksi.php");

    $dataOwner = mysqli_query($koneksi,"select * from tb_customer where namaCust='$username' and passwordCust='$password'");
    $cekOwner = mysqli_num_rows($dataOwner);

    if(empty($username) || empty($password)){
        return "null";

    }else{
        if($cekOwner > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            return "success";

        }else{
            return "failed";
        }
    }
}

// ini punya login atau daftar akunnnnnnnnn
function signUp(){
    include_once("./koneksi.php");

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $query = "insert into tb_customer (namaCust, alamatCust, teleponCust, emailCust, genderCust, statusCust, passwordCust) Value ('$nama', '$alamat', '$telepon', '$email', '$gender', 'Not Member', '$password')";
    $hasil = mysqli_query($koneksi, $query);

    if($hasil){
        header('location:./_login.php');
    }else{
        echo "Input data gagal!";
    }
}
?>