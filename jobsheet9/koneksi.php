<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$server = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

try {
    $connect = mysqli_connect($server,$username,$password,$database);
} catch (mysqli_sql_exception $e) {
    die("Koneksi gagal : ".$e->getMessage());
}

// echo "Connection Success";
?>


<!-- mengisi tabel sql -->
<?php
// $input = mysqli_query($connect, "INSERT INTO `user` (`username`, `password`, `level`) VALUES ('guest', MD5('234'), '2')");

// if ($input) {
//     echo "Data berhasil dimasukkan ke dalam tabel user.<br>";
// } else {
//     echo "Error: " . mysqli_error($connect);
// }
?>
