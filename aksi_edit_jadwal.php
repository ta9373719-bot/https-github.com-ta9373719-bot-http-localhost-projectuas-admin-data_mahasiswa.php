<?php
include '../config/koneksi.php';

$id = $_POST['id'];
$hari = $_POST['hari'];
$matkul = $_POST['id_matkul'];
$dosen = $_POST['id_dosen'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$ruangan = $_POST['ruangan'];

mysqli_query($koneksi, "UPDATE jadwal SET 
                        hari='$hari',
                        id_matkul='$matkul',
                        id_dosen='$dosen',
                        jam_mulai='$jam_mulai', 
                        jam_selesai='$jam_selesai', 
                        ruangan='$ruangan' 
                        WHERE id_jadwal='$id'");

header("location:jadwal.php");
?>