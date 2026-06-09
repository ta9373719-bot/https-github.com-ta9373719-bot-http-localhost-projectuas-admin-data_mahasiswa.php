<?php
session_start();
if($_SESSION['level'] != "admin"){header("location:../index.php");}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a href="index.php" class="btn btn-secondary">Kembali</a>
    <a href="tambah_matkul.php" class="btn btn-success">+ Tambah Matkul</a>
    <br><br>

    <table class="table table-bordered table-striped">
        <tr>
            <th>KODE</th>
            <th>NAMA MATA KULIAH</th>
            <th>SKS</th>
            <th>AKSI</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM matkul");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?=$d['kode_matkul']?></td>
            <td><?=$d['nama_matkul']?></td>
            <td><?=$d['sks']?></td>
            <td>
                <a href="edit_matkul.php?id=<?=$d['id_matkul']?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus_matkul.php?id=<?=$d['id_matkul']?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>