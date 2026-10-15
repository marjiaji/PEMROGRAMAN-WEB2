<?php
require "koneksi.php";
$result = $conn->query("SELECT mhsID, FirstName, LastName, Age FROM tbl_mhs ORDER BY mhsID");
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Latihan 6 - Fetch Array</title></head><body>
<h2>Latihan 6: Menampilkan Data dengan Fetch Array</h2>
<table border="1" cellpadding="8" cellspacing="0"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th></tr>
<?php while ($data = $result->fetch_assoc()): ?>
<tr><td><?= htmlspecialchars((string)$data["mhsID"]) ?></td><td><?= htmlspecialchars($data["FirstName"]) ?></td><td><?= htmlspecialchars($data["LastName"]) ?></td><td><?= htmlspecialchars((string)$data["Age"]) ?></td></tr>
<?php endwhile; ?>
</table></body></html>