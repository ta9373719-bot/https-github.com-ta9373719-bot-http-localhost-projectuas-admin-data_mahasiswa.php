<?php
include '../config/koneksi.php';

$nidn = mysqli_real_escape_string($koneksi, $_POST['nidn']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$matkul = mysqli_real_escape_string($koneksi, $_POST['mata_kuliah']);

// Cek dulu apakah NIDN sudah ada
$cek = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn='$nidn'");
if(mysqli_num_rows($cek) > 0){
    echo "<script>alert('NIDN sudah terdaftar! Gunakan NIDN lain'); history.back();</script>";
}else{
    // Kalau belum ada, baru simpan
    mysqli_query($koneksi, "INSERT INTO dosen VALUES ('$nidn','$nama','$matkul')");
    mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nidn','123456','dosen')");
    header("location:data_dosen.php");
}
?>