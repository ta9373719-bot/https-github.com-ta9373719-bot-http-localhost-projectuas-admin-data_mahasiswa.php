<?php
include '../config/koneksi.php';
$nim = $_GET['nim'];
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Data</h3>
    <form method="post" action="aksi_edit_mhs.php">
        <input type="hidden" name="nim_lama" value="<?=$d['nim']?>">
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="<?=$d['nim']?>" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?=$d['nama']?>" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="<?=$d['jurusan']?>" required>
        </div>
        <div class="mb-3">
            <label>Angkatan</label>
            <input type="number" name="angkatan" class="form-control" value="<?=$d['angkatan']?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?=$d['email']?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>
</body>
</html>