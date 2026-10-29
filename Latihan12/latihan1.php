
<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "UPDATE tbl_mhs
        SET Age = 36
        WHERE FirstName = 'Karina'
        AND LastName = 'Suwandi'";

if ($conn->query($sql) === TRUE) {
    echo "Data Marji berhasil diperbarui.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
