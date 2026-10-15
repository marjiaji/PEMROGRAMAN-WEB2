<?php
require "koneksi.php";
$contoh = [
    ["Karina", "Suwandi", 29],
    ["Glenn", "Gandari", 32]
];
$added = 0;
$stmt = $conn->prepare("INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES (?, ?, ?)");
$check = $conn->prepare("SELECT mhsID FROM tbl_mhs WHERE FirstName=? AND LastName=? AND Age=? LIMIT 1");
foreach ($contoh as [$first, $last, $age]) {
    $check->bind_param("ssi", $first, $last, $age);
    $check->execute();
    $check->store_result();
    if ($check->num_rows === 0) {
        $stmt->bind_param("ssi", $first, $last, $age);
        $stmt->execute();
        $added++;
    }
    $check->free_result();
}
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Latihan 4 - Sisipkan Data</title></head><body>
<h2>Latihan 4: Menyisipkan Data</h2>
<p>Proses selesai. Record baru ditambahkan: <b><?= $added ?></b>.</p>
<p>Data contoh yang sudah ada tidak ditambahkan ulang.</p>
<p><a href="latihan5.php">Lihat data mahasiswa</a></p>
</body></html>