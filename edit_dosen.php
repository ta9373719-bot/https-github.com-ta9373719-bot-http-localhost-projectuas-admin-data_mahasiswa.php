<?php
include '../config/koneksi.php';
$nidn = $_GET['nidn'];
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn='$nidn'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Data Dosen</h3>
    <form method="post" action="aksi_edit_dosen.php">
        <input type="hidden" name="nidn_lama" value="<?=$d['nidn']?>">
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="<?=$d['nidn']?>" required>
        </div>
        <div class="mb-3">
            <label>Nama Dosen</label>
            <input type="text" name="nama" class="form-control" value="<?=$d['nama']?>" required>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="form-control" value="<?=$d['mata_kuliah']?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="data_dosen.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>