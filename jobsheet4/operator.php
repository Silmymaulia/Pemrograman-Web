<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah a + b = {$hasilTambah} <br>";
echo "Hasil kurang a - b = {$hasilKurang} <br>";
echo "Hasil kali a * b = {$hasilKali} <br>";
echo "Hasil bagi a / b = {$hasilBagi} <br>";
echo "Hasil sisa bagi a % b = {$sisaBagi} <br>";
echo "Hasil pangkat a ** b = {$pangkat} <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama a == b = {$hasilSama} <br>";
echo "Hasil tidak sama a != b = {$hasilTidakSama} <br>";
echo "Hasil lebih kecil a < b = {$hasilLebihKecil} <br>";
echo "Hasil lebih besar a > b = {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama a <= b = {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama a >= b = {$hasilLebihBesarSama} <br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND a && b = {$hasilAnd} <br>";
echo "Hasil OR a || b = {$hasilOr} <br>";
echo "Hasil NOT a = {$hasilNotA} <br>";
echo "Hasil NOT a = {$hasilNotB} <br>";
echo "<br>";

$hasilPenambahan = $a += $b;
$hasilPengurangan = $a -= $b;
$hasilPengalian = $a *= $b;
$hasilPembagian = $a /= $b;
$hasilModulus = $a %= $b;

echo "Hasil a += b = {$hasilPenambahan} <br>";
echo "Hasil a -= b = {$hasilPengurangan} <br>";
echo "Hasil a *= b = {$hasilPengalian} <br>";
echo "Hasil a /= b = {$hasilPembagian} <br>";
echo "Hasil a %= b = {$hasilModulus} <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik a === b = {$hasilIdentik} <br>";
echo "Hasil tidak identik a !== b = {$hasilTidakIdentik} <br>";
echo "<br>";

// Jumlah total kursi
$totalKursi = 45;
// Jumlah kursi yang ditempati
$kursiDitempati = 28;
// Menghitung jumlah kursi kosong
$kursiKosong = $totalKursi - $kursiDitempati;
// Menghitung persentase kursi kosong
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;
// Menghitung modulus dari jumlah kursi kosong dibagi jumlah kursi yang ditempati
$modulusKursi = $kursiKosong % $kursiDitempati;

// Menampilkan hasil
echo "Jumlah kursi yang masih kosong: {$kursiKosong} <br>";
echo "Persentase kursi yang masih kosong: {$persentaseKursiKosong} %<br>";
echo "Modulus dari jumlah kursi kosong dibagi jumlah kursi yang ditempati: $modulusKursi";

?>