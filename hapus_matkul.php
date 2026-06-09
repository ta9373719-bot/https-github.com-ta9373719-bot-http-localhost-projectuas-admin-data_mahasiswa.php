<?php
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM matkul WHERE id_matkul='$id'");
header("location:data_matkul.php");
?>