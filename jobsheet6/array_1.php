<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

            echo "Menampilkan tanpa perulangan <br>";
            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";
            echo "<br><br>";

            // Menggunakan perulangan untuk menampilkan isi array
            echo "Menampilkan dengan perulangan <br>";
            foreach ($Listdosen as $dosen) {
                echo $dosen . "<br>";
            }
        ?>
    </body>
</html>