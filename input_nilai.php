<?php
session_start();
if($_SESSION['level'] != "dosen"){header("location:../index.php");}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Input Nilai Mahasiswa</h3>
    <form method="post" action="simpan_nilai.php">
        <table class="table table-bordered">
            <tr><th>NIM</th><th>Nama</th><th>Tugas</th><th>UTS</th><th>UAS</th></tr>
            <?php
            $mhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            while($d = mysqli_fetch_array($mhs)){
            ?>
            <tr>
                <td><?=$d['nim']?></td>
                <td><?=$d['nama']?></td>
                <td><input type="number" name="tugas[<?=$d['nim']?>]" class="form-control"></td>
                <td><input type="number" name="uts[<?=$d['nim']?>]" class="form-control"></td>
                <td><input type="number" name="uas[<?=$d['nim']?>]" class="form-control"></td>
            </tr>
            <?php } ?>
        </table>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>