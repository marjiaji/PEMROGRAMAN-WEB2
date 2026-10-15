<?php
require "koneksi.php";
$result = $conn->query("SELECT COUNT(*) AS total FROM tbl_mhs");
$row = $result->fetch_assoc();
$total = $row["total"];
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Latihan 7 - Jumlah Record</title></head><body>
<h2>Latihan 7: Menghitung Jumlah Record</h2>
<p>Jumlah record dalam tabel <b>tbl_mhs</b>: <b><?= (int)$total ?></b></p>
<p><a href="latihan5.php">Lihat data mahasiswa</a></p>
</body></html>