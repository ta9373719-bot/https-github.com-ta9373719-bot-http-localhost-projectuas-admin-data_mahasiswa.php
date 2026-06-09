<?php
include '../koneksi.php';

$matkul = mysqli_query($koneksi, "SELECT * FROM mata_kuliah");
$dosen = mysqli_query($koneksi, "SELECT * FROM dosen");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Jadwal Kuliah</h3>

    <form method="post" action="aksi_tambah_jadwal.php">

        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="id_matkul" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                <?php while($m = mysqli_fetch_assoc($matkul)) { ?>
                    <option value="<?= $m['id_matkul']; ?>">
                        <?= $m['nama_matkul']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Dosen</label>
            <select name="id_dosen" class="form-control" required>
                <option value="">-- Pilih Dosen --</option>
                <?php while($d = mysqli_fetch_assoc($dosen)) { ?>
                    <option value="<?= $d['id_dosen']; ?>">
                        <?= $d['nama_dosen']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Ruangan</label>
            <input type="text" name="ruangan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="jadwal.php" class="btn btn-secondary">Batal</a>

    </form>
</div>

</body>
</html>