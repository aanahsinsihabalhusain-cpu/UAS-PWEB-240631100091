<?php
include 'config/koneksi.php';

if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];

    $insert = mysqli_query($koneksi,"INSERT INTO buku
    (judul,penulis,penerbit,tahun_terbit,kategori,stok)

    VALUES

    ('$judul','$penulis','$penerbit','$tahun','$kategori','$stok')");

    if($insert){
        echo "<script>
        alert('Data berhasil ditambahkan');
        window.location='daftar.php';
        </script>";
    }else{
        echo "<script>
        alert('Data gagal ditambahkan');
        </script>";
    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Tambah Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <?php include 'partials/navbar.php'; ?>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>Tambah Data Buku</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Judul Buku</label>

<input type="text" name="judul" class="form-control" required>

</div>

<div class="mb-3">

<label>Penulis</label>

<input type="text" name="penulis" class="form-control" required>

</div>

<div class="mb-3">

<label>Penerbit</label>

<input type="text" name="penerbit" class="form-control" required>

</div>

<div class="mb-3">

<label>Tahun Terbit</label>

<input type="number" name="tahun" class="form-control" required>

</div>

<div class="mb-3">

<label>Kategori</label>

<input type="text" name="kategori" class="form-control" required>

</div>

<div class="mb-3">

<label>Stok</label>

<input type="number" name="stok" class="form-control" required>

</div>

<button class="btn btn-success" name="simpan">

Simpan

</button>

<a href="daftar.php" class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>

</html>