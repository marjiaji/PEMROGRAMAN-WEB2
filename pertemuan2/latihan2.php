<?php

// Nama barang
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// Harga satuan
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// Jumlah barang
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

// Total harga setiap barang
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

// Total seluruh harga
$tharga = $th1 + $th2 + $th3 + $th4;

// Diskon 5%
$diskon = 5;
$tdiskon = ($diskon * $tharga) / 100;

// Jumlah yang harus dibayar
$tdibayar = $tharga - $tdiskon;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peralatan Yang Dibeli</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 800px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #ddd;
        }

        .kanan {
            text-align: right;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Contoh Perhitungan dengan PHP</h2>

    <table>

        <tr>
            <th colspan="4">Daftar Pemesanan Peralatan Kantor</th>
        </tr>

        <tr>
            <th>Nama Peralatan</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Jumlah Harga</th>
        </tr>

        <tr>
            <td><?php echo $brg1; ?></td>
            <td class="kanan"><?php echo $jmlbrg1; ?></td>
            <td class="kanan"><?php echo number_format($harga1); ?></td>
            <td class="kanan"><?php echo number_format($th1); ?></td>
        </tr>

        <tr>
            <td><?php echo $brg2; ?></td>
            <td class="kanan"><?php echo $jmlbrg2; ?></td>
            <td class="kanan"><?php echo number_format($harga2); ?></td>
            <td class="kanan"><?php echo number_format($th2); ?></td>
        </tr>

        <tr>
            <td><?php echo $brg3; ?></td>
            <td class="kanan"><?php echo $jmlbrg3; ?></td>
            <td class="kanan"><?php echo number_format($harga3); ?></td>
            <td class="kanan"><?php echo number_format($th3); ?></td>
        </tr>

        <tr>
            <td><?php echo $brg4; ?></td>
            <td class="kanan"><?php echo $jmlbrg4; ?></td>
            <td class="kanan"><?php echo number_format($harga4); ?></td>
            <td class="kanan"><?php echo number_format($th4); ?></td>
        </tr>

        <tr class="total">
            <td colspan="3" class="kanan">Total Harga</td>
            <td class="kanan"><?php echo number_format($tharga); ?></td>
        </tr>

        <tr>
            <td colspan="3" class="kanan">
                Diskon <?php echo $diskon; ?>%
            </td>
            <td class="kanan">
                <?php echo number_format($tdiskon); ?>
            </td>
        </tr>

        <tr class="total">
            <td colspan="3" class="kanan">
                Jumlah Harus Dibayar
            </td>
            <td class="kanan">
                <?php echo number_format($tdibayar); ?>
            </td>
        </tr>

    </table>

</div>

</body>
</html>