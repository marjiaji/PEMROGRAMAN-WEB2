<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }
    </style>
</head>

<body>

<h2>Tabel Perkalian 1 - 10</h2>

<table>

    <tr>
        <th>×</th>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>

    </tr>

    <?php

    for ($i = 1; $i <= 10; $i++) {

        echo "<tr>";

        echo "<th>$i</th>";

        for ($j = 1; $j <= 10; $j++) {

            echo "<td>" . ($i * $j) . "</td>";

        }

        echo "</tr>";
    }

    ?>

</table>

</body>
</html>