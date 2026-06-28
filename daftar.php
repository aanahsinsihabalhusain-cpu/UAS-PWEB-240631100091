<?php
include 'config/koneksi.php';

$cari = "";

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];

    $query = mysqli_query($koneksi,
    "SELECT * FROM buku
    WHERE judul LIKE '%$cari%'
    OR penulis LIKE '%$cari%'
    OR kategori LIKE '%$cari%'");
}else{

    $query = mysqli_query($koneksi,
    "SELECT * FROM buku");

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

<div class="container mt-5">

    <h2 class="text-center mb-4">📚 Daftar Buku</h2>

    <a href="index.php" class="btn btn-secondary mb-3">← Kembali</a>

   <a href="tambah.php" class="btn btn-success mb-3">
    <i class="bi bi-plus-circle"></i> Tambah Buku
    <form method="GET" class="mb-3">

</a>
      

<div class="row">

<div class="col-md-8">

<input
type="text"
name="cari"
class="form-control"
placeholder="Cari judul, penulis atau kategori..."
value="<?= $cari; ?>">

</div>

<div class="col-md-2">

<button class="btn btn-primary w-100">
    <i class="bi bi-search"></i> Cari
</button>

</div>

<div class="col-md-2">

<a href="daftar.php" class="btn btn-secondary w-100">

Reset

</a>

</div>

</div>

</form>
    </a>

    <table class="table table-hover table-bordered align-middle shadow">

       <thead class="table-dark">

        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        </thead>

        <tbody>

        <?php
        $no = 1;

        while($data = mysqli_fetch_assoc($query)){
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $data['judul']; ?></td>

            <td><?= $data['penulis']; ?></td>

            <td><?= $data['penerbit']; ?></td>

            <td><?= $data['tahun_terbit']; ?></td>

            <td><?= $data['kategori']; ?></td>

            <td><?= $data['stok']; ?></td>

            <td>

               <a href="edit.php?id=<?= $data['id_buku']; ?>"
class="btn btn-warning btn-sm">
    <i class="bi bi-pencil-square"></i> Edit
</a>

              <a href="hapus.php?id=<?= $data['id_buku']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">
    <i class="bi bi-trash"></i> Hapus
</a>

            </td>

        </tr>

        <?php } ?>

        </tbody>

    </table>
    // Final Project

</div>

</body>
</html>
