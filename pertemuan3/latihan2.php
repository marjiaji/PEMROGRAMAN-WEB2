<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan IF</title>
</head>

<body>

<h2>Program Menentukan Diskon</h2>

<form method="post">

    Besar Pembelian :
    <input type="number" name="total_beli" required>

    <br><br>

    <input type="submit" value="Tentukan Diskon">

</form>

<?php

if (isset($_POST['total_beli'])) {

    $total_beli = intval($_POST['total_beli']);

    $diskon = 0;

    if ($total_beli >= 200000) {

        $diskon = 0.10;

    } elseif ($total_beli >= 100000) {

        $diskon = 0.05;

    } else {

        $diskon = 0.01;
    }

    $jumlah_diskon = $diskon * $total_beli;

    $pembayaran = $total_beli - $jumlah_diskon;

    echo "<br>";
    echo "Besar Pembelian = Rp " . number_format($total_beli, 0, ',', '.') . "<br>";
    echo "Diskon = " . ($diskon * 100) . "%<br>";
    echo "Jumlah Diskon = Rp " . number_format($jumlah_diskon, 0, ',', '.') . "<br>";
    echo "Pembayaran = Rp " . number_format($pembayaran, 0, ',', '.');

}

?>

</body>
</html>