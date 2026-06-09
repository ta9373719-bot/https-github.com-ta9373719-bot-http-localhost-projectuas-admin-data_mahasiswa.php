<!DOCTYPE html>
<html>
<head>
    <title>Tambah Matkul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Tambah Data Mata Kuliah</h3>
    <form method="post" action="aksi_tambah_matkul.php">
        <div class="mb-3">
            <label>Kode Matkul</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Matkul</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="data_matkul.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>