<?php
include '../config/koneksi.php';

$kode = mysqli_real_escape_string($koneksi, $_POST['kode']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$sks = mysqli_real_escape_string($koneksi, $_POST['sks']);

// Cek dulu apakah Kode sudah ada
$cek = mysqli_query($koneksi, "SELECT * FROM matkul WHERE kode_matkul='$kode'");
if(mysqli_num_rows($cek) > 0){
    echo "<script>alert('Kode Matkul sudah ada! Gunakan kode lain'); history.back();</script>";
}else{
    // Simpan data
    mysqli_query($koneksi, "INSERT INTO matkul VALUES ('','$kode','$nama','$sks')");
    header("location:data_matkul.php");
}
?>