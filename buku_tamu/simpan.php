
<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama   = trim($_POST['nama'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $alamat = trim($_POST['alamat'] ?? '');
    $pesan  = trim($_POST['pesan'] ?? '');

    if ($nama === '' || $email === '' || $pesan === '') {
        die("Nama, email, dan pesan wajib diisi.");
    }

    $sql = "INSERT INTO buku_tamu (nama, email, alamat, pesan)
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param(
        $stmt, "ssss", $nama, $email, $alamat, $pesan
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: tampil.php?status=sukses");
        exit;
    }

    echo "Gagal menyimpan data.";
}
?>
