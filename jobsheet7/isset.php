<?php
    // langkah 1
    $umur;
    if(isset($umur) && $umur >= 18){
        echo "Anda sudah dewasa.";
    }else{
        echo "Anda belum dewasa atau variabe 'umur' tidak ditemukan."
    }
    
    // langkah 5
    $data = array ("nama" => "Jane", "usia" => 25);
    if(isset($data["nama"])){
        echo "Nama: <br>";
        echo $data["nama"];
    }else{
        echo "Variabel 'nama' tidak ditemukan di dalam array.";
    }
?>
