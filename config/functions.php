<?php

// Function untuk membersihkan input
function bersihkan($data)
{
    return htmlspecialchars(trim($data));
}

// Function untuk menghitung jumlah data
function hitungData($koneksi, $tabel)
{
    $query = mysqli_query($koneksi, "SELECT * FROM $tabel");
    return mysqli_num_rows($query);
}

?>