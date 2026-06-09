<?php
include '../config/koneksi.php';

$id = $_POST['id'];
$kode = mysqli_real_escape_string($koneksi, $_POST['kode']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$sks = mysqli_real_escape_string($koneksi, $_POST['sks']);

mysqli_query($koneksi, "UPDATE matkul SET kode_matkul='$kode', nama_matkul='$nama', sks='$sks' WHERE id_matkul='$id'");

header("location:data_matkul.php");
?>