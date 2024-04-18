<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $guests = $_POST["guests"];

    // Simpan data booking ke dalam session
    $_SESSION['booking_data'] = [
        'name' => $name,
        'email' => $email,
        'date' => $date,
        'time' => $time,
        'guests' => $guests
    ];

    // Redirect ke halaman konfirmasi
    header("Location: confirmation.php");
    exit();
}
?>
