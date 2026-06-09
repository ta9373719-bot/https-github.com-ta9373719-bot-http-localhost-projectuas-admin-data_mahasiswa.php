<?php
include '../config/koneksi.php';

$nim_lama = mysqli_real_escape_string($koneksi, $_POST['nim_lama']);
$nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
$angkatan = mysqli_real_escape_string($koneksi, $_POST['angkatan']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);

mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', angkatan='$angkatan', email='$email' WHERE nim='$nim_lama'");

// Update username di tabel user jika NIM berubah
mysqli_query($koneksi, "UPDATE user SET username='$nim' WHERE username='$nim_lama'");

header("location:data_mahasiswa.php");
?>