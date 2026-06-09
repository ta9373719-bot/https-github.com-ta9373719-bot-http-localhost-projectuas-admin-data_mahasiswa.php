<?php
session_start();
if($_SESSION['level'] != "admin"){header("location:../index.php");}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a href="index.php" class="btn btn-secondary">Kembali</a>
    <a href="tambah_mahasiswa.php" class="btn btn-success">+ Tambah Mahasiswa</a>
    <br><br>

    <table class="table table-bordered table-striped">
        <tr>
            <th>NIM</th>
            <th>NAMA MAHASISWA</th>
            <th>JURUSAN</th>
            <th>AKSI</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
            <td><?=$d['jurusan']?></td>
            <td>
                <a href="edit_mahasiswa.php?nim=<?=$d['nim']?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus_mahasiswa.php?nim=<?=$d['nim']?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>