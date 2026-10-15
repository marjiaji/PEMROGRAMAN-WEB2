<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lat_dbase";

try {
    $conn = new mysqli($host, $user, $password);
    $conn->set_charset("utf8mb4");

    // Buat database jika belum ada, lalu pilih database.
    $conn->query("CREATE DATABASE IF NOT EXISTS `$dbname`");
    $conn->select_db($dbname);

    // Untuk mengatasi tabel lama dengan struktur berbeda, tambahkan kolom yang belum ada.
    $conn->query("CREATE TABLE IF NOT EXISTS tbl_mhs (
        mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        FirstName VARCHAR(50) NOT NULL,
        LastName VARCHAR(50) NOT NULL,
        Age INT NOT NULL
    )");

    $columns = [];
    $res = $conn->query("SHOW COLUMNS FROM tbl_mhs");
    while ($col = $res->fetch_assoc()) {
        $columns[] = $col["Field"];
    }

    // Bila tabel lama tidak mempunyai kolom standar, buat ulang tabel latihan
    // agar kode latihan konsisten. Data tabel lama dapat hilang pada kondisi ini.
    if (!in_array("FirstName", $columns) ||
        !in_array("LastName", $columns) ||
        !in_array("Age", $columns)) {
        $conn->query("DROP TABLE tbl_mhs");
        $conn->query("CREATE TABLE tbl_mhs (
            mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(50) NOT NULL,
            LastName VARCHAR(50) NOT NULL,
            Age INT NOT NULL
        )");
    } else {
        if (!in_array("mhsID", $columns)) {
            $conn->query("ALTER TABLE tbl_mhs ADD COLUMN mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
        }
    }
} catch (mysqli_sql_exception $e) {
    die("Terjadi kesalahan database: " . htmlspecialchars($e->getMessage()));
}
?>