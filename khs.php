<?php
session_start();
if($_SESSION['level'] != "mahasiswa"){header("location:../index.php");}
include '../config/koneksi.php';

$nim = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>KHS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Kartu Hasil Studi</h3>
    <table class="table table-bordered">
        <tr><th>Mata Kuliah</th><th>Tugas</th><th>UTS</th><th>UAS</th><th>Nilai Akhir</th></tr>
        <?php
        $sql = "SELECT nilai.*, matkul.nama_matkul 
                FROM nilai 
                JOIN matkul ON nilai.id_matkul = matkul.id_matkul 
                WHERE nilai.nim='$nim'";
        $data = mysqli_query($koneksi, $sql);
        while($d = mysqli_fetch_array($data)){
            $na = ($d['nilai_tugas'] + $d['nilai_uts'] + $d['nilai_uas']) / 3;
        ?>
        <tr>
            <td><?=$d['nama_matkul']?></td>
            <td><?=$d['nilai_tugas']?></td>
            <td><?=$d['nilai_uts']?></td>
            <td><?=$d['nilai_uas']?></td>
            <td><b><?=number_format($na,1)?></b></td>
        </tr>
        <?php } ?>
    </table>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>