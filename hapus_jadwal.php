<?php
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM jadwal WHERE id_jadwal='$id'");
header("location:jadwal.php");
?>