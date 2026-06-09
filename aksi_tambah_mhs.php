<?php
include '../config/koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];

// Simpan data mahasiswa
mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jurusan','$angkatan','$email')");

// Buat akun login
mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nim','123456','mahasiswa')");

header("location:data_mahasiswa.php");
?>