<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM matkul WHERE id_matkul='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Matkul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Data Mata Kuliah</h3>
    <form method="post" action="aksi_edit_matkul.php">
        <input type="hidden" name="id" value="<?=$d['id_matkul']?>">
        <div class="mb-3">
            <label>Kode Matkul</label>
            <input type="text" name="kode" class="form-control" value="<?=$d['kode_matkul']?>" required>
        </div>
        <div class="mb-3">
            <label>Nama Matkul</label>
            <input type="text" name="nama" class="form-control" value="<?=$d['nama_matkul']?>" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="<?=$d['sks']?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="data_matkul.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>