<?php
// session_start();

function loginAs_Admin($username, $password){
    include_once ("koneksi.php");

    $dataAdmin = mysqli_query($koneksi,"select * from admin where namaAdmin='$username' and passwordAdmin='$password'");
    $cekAdmin = mysqli_num_rows($dataAdmin);

    if(empty($username) || empty($password)){
        return "null";
    // header("location:./loginAdmin.php?pesan=null");
    // exit();
    }else{
        if($cekAdmin > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            // header("location:./areaAdmin/_adminHome.php");
            return "success";

        }else{
            return "failed";
            // header("location:./loginAdmin.php?pesan=gagal");
        }
    }
}

// $username = $_POST['username'];
// $password = $_POST['password'];






?>