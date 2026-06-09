<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_jadwal='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Jadwal Kuliah</h3>
    <form method="post" action="aksi_edit_jadwal.php">
        <input type="hidden" name="id" value="<?=$d['id_jadwal']?>">
        
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="<?=$d['hari']?>" required>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <input type="text" name="id_matkul" class="form-control" value="<?=$d['id_matkul']?>" required>
        </div>
        <div class="mb-3">
            <label>Dosen</label>
            <input type="text" name="id_dosen" class="form-control" value="<?=$d['id_dosen']?>" required>
        </div>
        <div class="mb-3">
            <label>Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" value="<?=$d['jam_mulai']?>" required>
        </div>
        <div class="mb-3">
            <label>Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" value="<?=$d['jam_selesai']?>" required>
        </div>
        <div class="mb-3">
            <label>Ruangan</label>
            <input type="text" name="ruangan" class="form-control" value="<?=$d['ruangan']?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="jadwal.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>