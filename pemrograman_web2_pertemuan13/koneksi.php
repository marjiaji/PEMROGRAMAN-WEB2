<?php
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "db_pert13"
);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>