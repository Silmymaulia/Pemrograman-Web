<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis kelamin' => 'Perempuan'
            ];

            echo "Nama : {$Dosen ['nama']} <br>";
            echo "Domisili : {$Dosen ['domisili']} <br>";
            echo "Jenis Kelamin : {$Dosen ['jenis kelamin']} <br>";
        ?>     
    </body>
</html>

<!-- MODIFIKASI -->
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1">
    <title>Tabel Informasi Dosen</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis kelamin' => 'Perempuan'
        ];
    ?>
    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <?php
            foreach ($Dosen as $key => $value) {
                echo "<tr>";
                echo "<td>{$key}</td>";
                echo "<td>{$value}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html> -->
