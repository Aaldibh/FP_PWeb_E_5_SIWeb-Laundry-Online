<?php
// session_start();

function loginAs_Admin($username, $password){
    include_once ("koneksi.php");

    $dataAdmin = mysqli_query($koneksi,"select * from tb_admin where namaAdmin='$username' and passwordAdmin='$password'");
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
?>