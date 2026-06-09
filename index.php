<?php
session_start();
if($_SESSION['level'] != "mahasiswa"){header("location:../index.php");}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">HALAMAN MAHASISWA</a>
    <a href="../logout.php" class="btn btn-danger">Logout</a>
  </div>
</nav>
<div class="container mt-4">
    <h2>Selamat Datang</h2>
    <a href="khs.php" class="btn btn-primary mt-3">Lihat Nilai (KHS)</a>
</div>
</body>
</html>