
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background: #f4f6f9;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        button {
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }
        a { color: #2563eb; }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Buku Tamu</h2>

    <form action="simpan.php" method="POST">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Alamat</label>
        <input type="text" name="alamat">

        <label>Pesan</label>
        <textarea name="pesan" rows="4" required></textarea>

        <button type="submit">Simpan Data</button>
    </form>

    <a href="tampil.php">Lihat Buku Tamu</a>
</div>
</body>
</html>
