<?php
session_start();
if($_SESSION['level'] != "admin"){header("location:../index.php");}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a href="index.php" class="btn btn-secondary">Kembali</a>
    <a href="tambah_dosen.php" class="btn btn-success">+ Tambah Dosen</a>
    <br><br>

    <table class="table table-bordered table-striped">
        <tr>
            <th>NIDN</th>
            <th>NAMA DOSEN</th>
            <th>MATA KULIAH</th>
            <th>AKSI</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM dosen");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?=$d['nidn']?></td>
            <td><?=$d['nama']?></td>
            <td><?=$d['mata_kuliah']?></td>
            <td>
                <a href="edit_dosen.php?nidn=<?=$d['nidn']?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus_dosen.php?nidn=<?=$d['nidn']?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>