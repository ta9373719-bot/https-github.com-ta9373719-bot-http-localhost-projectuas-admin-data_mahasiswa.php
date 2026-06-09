<?php
include '../config/koneksi.php';

// Ambil data dari form
$matkul = $_POST['id_matkul'];
$dosen = $_POST['id_dosen'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$ruangan = $_POST['ruangan'];

// Masukkan ke database DENGAN URUTAN YANG SAMA PERSIS DENGAN DI DATABASE
mysqli_query($koneksi, "INSERT INTO jadwal VALUES ('', '$matkul', '$dosen', '$hari', '$jam_mulai', '$jam_selesai', '$ruangan')");

header("location:jadwal.php");
?>