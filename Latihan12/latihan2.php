
<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "DELETE FROM tbl_mhs
        WHERE LastName = 'Prabowo'";

if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
