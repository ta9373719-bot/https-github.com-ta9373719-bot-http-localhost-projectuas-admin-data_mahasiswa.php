<?php
session_start();
include 'config/koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass'");
$ada = mysqli_num_rows($cek);

if($ada == 1){
    $data = mysqli_fetch_assoc($cek);
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    if($data['level'] == 'admin'){
        header("location:admin/");
    }elseif($data['level'] == 'dosen'){
        header("location:dosen/");
    }else{
        header("location:mahasiswa/");
    }
}else{
    echo "GAGAL LOGIN! <a href='index.php'>Kembali</a>";
}
?>