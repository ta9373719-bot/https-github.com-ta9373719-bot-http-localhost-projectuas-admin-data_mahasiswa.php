<?php
session_start();
if($_SESSION['level'] != "admin"){header("location:../index.php");}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <a href="index.php" class="btn btn-secondary">Kembali</a>
    <a href="tambah_jadwal.php" class="btn btn-success">+ Tambah Jadwal</a>
    <br><br>

    <table>
        <tr>
            <th>HARI</th>
            <th>MATA KULIAH</th>
            <th>DOSEN</th>
            <th>JAM MULAI</th>
            <th>JAM SELESAI</th>
            <th>RUANGAN</th>
            <th>AKSI</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM jadwal");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?=$d['hari']?></td>
            <td><?=$d['id_matkul']?></td>
            <td><?=$d['id_dosen']?></td>
            <td><?=$d['jam_mulai']?></td>
            <td><?=$d['jam_selesai']?></td>
            <td><?=$d['ruangan']?></td>
            <td>
                <a href="edit_jadwal.php?id=<?=$d['id_jadwal']?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus_jadwal.php?id=<?=$d['id_jadwal']?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</div>
</body>
</html>