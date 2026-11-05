<?php
include 'koneksi.php';

$id = trim($_POST['id_mahasiswa'] ?? '');
$nama = trim($_POST['nama'] ?? '');
$jurusan = trim($_POST['jurusan'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$telepon = trim($_POST['telepon'] ?? '');

if ($id == '' || $nama == '' || $jurusan == ''
    || $alamat == '' || $telepon == '') {
    die("Data harus dilengkapi!");
}

$stmt = $conn->prepare(
    "INSERT INTO mahasiswa
    (id_mahasiswa, nama, jurusan, alamat, telepon)
    VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssss",
    $id, $nama, $jurusan, $alamat, $telepon
);

if ($stmt->execute()) {
    echo "<script>
        alert('Data Mahasiswa Berhasil Disimpan!');
        window.location='index.php';
    </script>";
} else {
    if ($stmt->errno == 1062) {
        echo "<script>
            alert('NIM sudah digunakan!');
            window.location='index.php';
        </script>";
    } else {
        echo "Gagal menyimpan data: " . htmlspecialchars($stmt->error);
    }
}
?>