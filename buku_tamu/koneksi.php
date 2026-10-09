<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_buku_tamu"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>