
<?php
require 'koneksi.php';

// Pengaturan halaman
$batas = 5;
$halaman = max(1, (int)($_GET['halaman'] ?? 1));

// Menghitung jumlah data
$result = mysqli_query(
    $koneksi,
    "SELECT COUNT(*) AS total FROM buku_tamu"
);
$totalData = (int)mysqli_fetch_assoc($result)['total'];
$totalHalaman = max(1, (int)ceil($totalData / $batas));

$halaman = min($halaman, $totalHalaman);
$posisi = ($halaman - 1) * $batas;

// Mengambil maksimal 5 data
$sql = "SELECT * FROM buku_tamu
        ORDER BY id DESC
        LIMIT $posisi, $batas";
$data = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f6f9;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #2563eb;
            color: white;
        }
        .pagination a, .pagination strong {
            display: inline-block;
            padding: 8px 12px;
            margin: 4px 2px;
            text-decoration: none;
            border: 1px solid #2563eb;
            border-radius: 4px;
        }
        .pagination strong {
            background: #2563eb;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Buku Tamu</h2>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'sukses'): ?>
        <p>Data berhasil disimpan.</p>
    <?php endif; ?>

    <p>Total data: <?= $totalData ?> record</p>

    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>

        <?php if (mysqli_num_rows($data) > 0): ?>
            <?php $no = $posisi + 1; ?>
            <?php while ($row = mysqli_fetch_assoc($data)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['alamat']) ?></td>
                    <td><?= nl2br(htmlspecialchars($row['pesan'])) ?></td>
                    <td><?= htmlspecialchars($row['tanggal']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Belum ada data buku tamu.</td>
            </tr>
        <?php endif; ?>
    </table>

    <br>
    <div class="pagination">
        <?php if ($halaman > 1): ?>
            <a href="?halaman=<?= $halaman - 1 ?>">Sebelumnya</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalHalaman; $i++): ?>
            <?php if ($i === $halaman): ?>
                <strong><?= $i ?></strong>
            <?php else: ?>
                <a href="?halaman=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($halaman < $totalHalaman): ?>
            <a href="?halaman=<?= $halaman + 1 ?>">Berikutnya</a>
        <?php endif; ?>
    </div>

    <p><a href="index.php">Kembali ke Form Buku Tamu</a></p>
</div>
</body>
</html>
