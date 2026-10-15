<?php
require "koneksi.php";
$result = $conn->query("SELECT mhsID, FirstName, LastName, Age FROM tbl_mhs ORDER BY mhsID");
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Latihan 5 - Fetch Row</title></head><body>
<h2>Latihan 5: Menampilkan Data dengan Fetch Row</h2>
<table border="1" cellpadding="8" cellspacing="0"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th></tr>
<?php while ($data = $result->fetch_row()): ?>
<tr><td><?= htmlspecialchars((string)$data[0]) ?></td><td><?= htmlspecialchars($data[1]) ?></td><td><?= htmlspecialchars($data[2]) ?></td><td><?= htmlspecialchars((string)$data[3]) ?></td></tr>
<?php endwhile; ?>
</table></body></html>