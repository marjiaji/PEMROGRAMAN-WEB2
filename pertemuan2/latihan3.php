<!DOCTYPE html>
<html>
<head>

    <title>Kalkulator PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 600px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }

        h2 {
            margin-bottom: 30px;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        input {
            width: 130px;
            padding: 10px;
        }

        select {
            padding: 10px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 30px;
            padding: 15px;
            background-color: #eee;
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>

<body>

<div class="container">

    <h2>Kalkulator Sederhana PHP</h2>

    <form method="post">

        <div class="form">

            <input type="number" name="nilai1"
                   placeholder="Nilai I" required>

            <select name="operator">

                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>

            </select>

            <input type="number" name="nilai2"
                   placeholder="Nilai II" required>

            <button type="submit" name="hitung">
                Submit
            </button>

        </div>

    </form>


    <?php

    if (isset($_POST['hitung'])) {

        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];

        switch ($operator) {

            case "+":
                $hasil = $nilai1 + $nilai2;
                break;

            case "-":
                $hasil = $nilai1 - $nilai2;
                break;

            case "*":
                $hasil = $nilai1 * $nilai2;
                break;

            case "/":

                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    $hasil = "Tidak dapat dibagi dengan 0";
                }

                break;

            default:
                $hasil = "Operator tidak valid";
        }

        echo "<div class='hasil'>";
        echo "Hasil: $nilai1 $operator $nilai2 = $hasil";
        echo "</div>";
    }

    ?>

</div>

</body>
</html>