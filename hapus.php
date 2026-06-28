<?php
include 'config/koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Hapus data
$hapus = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");

if($hapus){
    echo "<script>
        alert('Data berhasil dihapus');
        window.location='daftar.php';
    </script>";
}else{
    echo "<script>
        alert('Data gagal dihapus');
        window.location='daftar.php';
    </script>";
}
?>