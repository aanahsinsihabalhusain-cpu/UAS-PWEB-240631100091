<?php
include 'config/koneksi.php';
include 'config/functions.php';

// Menghitung total buku
$totalBuku = hitungData($koneksi, "buku");

// Menghitung total penulis
$totalPenulis = mysqli_num_rows(mysqli_query($koneksi, "SELECT DISTINCT penulis FROM buku"));

// Menghitung total kategori
$totalKategori = mysqli_num_rows(mysqli_query($koneksi, "SELECT DISTINCT kategori FROM buku"));
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistem Pendataan Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<?php include 'partials/navbar.php'; ?>

<div class="container mt-4">

    <div class="text-center mb-4">
        <h1 class="fw-bold">📚 Sistem Pendataan Buku</h1>
        <p class="text-muted">
            Selamat datang di aplikasi Sistem Pendataan Buku berbasis PHP Native dan MySQL.
        </p>

        <p class="text-secondary">
            Hari ini :
            <strong><?= date("d F Y"); ?></strong>
        </p>

    </div>

    <div class="row">

        <div class="col-md-4 mb-3">

            <div class="card bg-primary text-white shadow">

                <div class="card-body text-center">

                    <i class="bi bi-book fs-1"></i>

                    <h5 class="mt-3">Total Buku</h5>

                    <h2><?= $totalBuku; ?></h2>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="card bg-success text-white shadow">

                <div class="card-body text-center">

                    <i class="bi bi-person-fill fs-1"></i>

                    <h5 class="mt-3">Total Penulis</h5>

                    <h2><?= $totalPenulis; ?></h2>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="card bg-warning text-dark shadow">

                <div class="card-body text-center">

                    <i class="bi bi-tags-fill fs-1"></i>

                    <h5 class="mt-3">Total Kategori</h5>

                    <h2><?= $totalKategori; ?></h2>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="container mt-5">

    <div class="p-5 bg-light rounded-3 shadow">

        <h2 class="fw-bold">

            Selamat Datang 👋

        </h2>

        <p class="fs-5">

            Website ini digunakan untuk mengelola data buku secara mudah.
            Pengguna dapat menambah, mengubah, menghapus,
            dan mencari data buku dengan cepat.

        </p>

        <a href="daftar.php" class="btn btn-primary btn-lg">

            <i class="bi bi-book"></i>

            Daftar Buku

        </a>

        <a href="tambah.php" class="btn btn-success btn-lg">

            <i class="bi bi-plus-circle"></i>

            Tambah Buku

        </a>

    </div>

</div>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>