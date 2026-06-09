<?php
include '../config/koneksi.php';
$nim = $_GET['nim'];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");
mysqli_query($koneksi, "DELETE FROM user WHERE username='$nim'");
header("location:data_mahasiswa.php");
?>