<?php
include 'config/koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data berdasarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
$row = mysqli_fetch_assoc($data);

// Jika tombol Update ditekan
if(isset($_POST['update'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];

    $update = mysqli_query($koneksi, "UPDATE buku SET
        judul='$judul',
        penulis='$penulis',
        penerbit='$penerbit',
        tahun_terbit='$tahun',
        kategori='$kategori',
        stok='$stok'
        WHERE id_buku='$id'
    ");

    if($update){
        echo "<script>
        alert('Data berhasil diubah');
        window.location='daftar.php';
        </script>";
    }else{
        echo "<script>
        alert('Data gagal diubah');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include 'partials/navbar.php'; ?>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">
<h3>Edit Data Buku</h3>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Judul Buku</label>
<input type="text" name="judul" class="form-control"
value="<?= $row['judul']; ?>" required>
</div>

<div class="mb-3">
<label>Penulis</label>
<input type="text" name="penulis" class="form-control"
value="<?= $row['penulis']; ?>" required>
</div>

<div class="mb-3">
<label>Penerbit</label>
<input type="text" name="penerbit" class="form-control"
value="<?= $row['penerbit']; ?>" required>
</div>

<div class="mb-3">
<label>Tahun</label>
<input type="number" name="tahun" class="form-control"
value="<?= $row['tahun_terbit']; ?>" required>
</div>

<div class="mb-3">
<label>Kategori</label>
<input type="text" name="kategori" class="form-control"
value="<?= $row['kategori']; ?>" required>
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control"
value="<?= $row['stok']; ?>" required>
</div>

<button class="btn btn-warning" name="update">
Update
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