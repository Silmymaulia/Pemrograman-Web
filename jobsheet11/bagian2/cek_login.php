<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "config/koneksi.php";
include "fungsi/anti_injection.php";
include "fungsi/pesan_kilat.php"; // Sertakan file pesan_kilat.php

$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

$query = "SELECT username, level, salt, password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

if ($result) { // Periksa apakah query berhasil dieksekusi
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $salt = $row['salt'];
        $hashed_password = $row['password'];
        
        if (!empty($salt) && !empty($hashed_password)) {
            $combined_password = $salt . $password;
        
            if (password_verify($combined_password, $hashed_password)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['level'] = $row['level'];
                header("Location: index.php");
                exit();
            } else {
                pesan('danger', "Login gagal. Password Anda Salah.");
            }
        } else {
            pesan('warning', "Username tidak ditemukan.");
        }
    } else {
        pesan('warning', "Username tidak ditemukan.");
    }
} else {
    pesan('danger', "Terjadi kesalahan dalam mengakses database.");
}

header("Location: login.php");
?>
