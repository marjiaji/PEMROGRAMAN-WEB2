
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data Mahasiswa</title>
</head>

<body>

<div style="width:760px; margin:20px auto; padding:10px;">

    <form action="action-input-data.php" method="POST">

        <table width="100%" border="0" cellpadding="0" cellspacing="0">

            <tr height="46">
                <td width="25%"></td>
                <td width="65%">
                    <font color="orange" size="2">
                        <b>Form Input Data Mahasiswa</b>
                    </font>
                </td>
            </tr>

            <tr height="46">
                <td>ID Mahasiswa / NIM</td>
                <td>
                    <input type="text"
                        name="id_mahasiswa"
                        size="35"
                        maxlength="12"
                        minlength="12"
                        pattern="[0-9]{12}"
                        required>
                </td>
            </tr>

            <tr height="46">
                <td>Nama</td>
                <td>
                    <input type="text"
                        name="nama"
                        size="50"
                        maxlength="30"
                        required>
                </td>
            </tr>

            <tr height="46">
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" required>
                        <option value="">- Pilih Jurusan -</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                    </select>
                </td>
            </tr>

            <tr height="46">
                <td>Alamat</td>
                <td>
                    <input type="text"
                        name="alamat"
                        size="50"
                        maxlength="100"
                        required>
                </td>
            </tr>

            <tr height="46">
                <td>No. Telp</td>
                <td>
                    <input type="text"
                        name="telepon"
                        size="20"
                        maxlength="15"
                        required>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Submit">
                    <input type="reset" name="reset" value="Cancel">
                </td>
            </tr>

        </table>

    </form>

</div>

</body>
</html>
