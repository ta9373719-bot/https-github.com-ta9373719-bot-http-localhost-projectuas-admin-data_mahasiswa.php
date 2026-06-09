<?php
include '../config/koneksi.php';
$nidn = $_GET['nidn'];
mysqli_query($koneksi, "DELETE FROM dosen WHERE nidn='$nidn'");
mysqli_query($koneksi, "DELETE FROM user WHERE username='$nidn'");
header("location:data_dosen.php");
?>