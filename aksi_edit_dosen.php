<?php
include '../config/koneksi.php';

$nidn_lama = $_POST['nidn_lama'];
$nidn = mysqli_real_escape_string($koneksi, $_POST['nidn']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$matkul = mysqli_real_escape_string($koneksi, $_POST['mata_kuliah']);

mysqli_query($koneksi, "UPDATE dosen SET nidn='$nidn', nama='$nama', mata_kuliah='$matkul' WHERE nidn='$nidn_lama'");
mysqli_query($koneksi, "UPDATE user SET username='$nidn' WHERE username='$nidn_lama'");

header("location:data_dosen.php");
?>