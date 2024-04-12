<?php
    // Lokasi penyimpanan file yang diunggah 
    // $targetDirectory = "documents/";

    // // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
    // if (!file_exists($targetDirectory)){
    //     mkdir($targetDirectory, 0777, true);
    // }

    // if ($_FILES['files']['name'][0]){
    //     $totalFiles = count($_FILES['files']['name']); // Perbaikan: operator penugasan
    //     // Loop melalui semua file yang diunggah
    //     for ($i = 0; $i < $totalFiles; $i++){
    //         $fileName = $_FILES['files']['name'][$i];
    //         $targetFile = $targetDirectory . $fileName;

    //         // Pindahkan file yang diunggah ke direktori penyimpanan
    //         if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)){ // Perbaikan: kunci array
    //             echo "File $fileName berhasil diunggah.<br>";
    //         }else{
    //             echo "Gagal mengunggah file $fileName.<br>";
    //         }
    //     }
    // }else{
    //     echo "Tidak ada file yang diunggah."; // Perbaikan: tanda titik koma
    // }

// langkah 5
// Lokasi penyimpanan file yang diunggah 
$targetDirectory = "uploads/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['images']['name'])) {
    $totalImages = count($_FILES['images']['name']);

    // Loop melalui semua gambar yang diunggah
    for ($i = 0; $i < $totalImages; $i++){
        $imageFileName = $_FILES['images']['name'][$i];
        $targetFile = $targetDirectory . basename($imageFileName);

        // Periksa apakah file adalah gambar valid
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if (getimagesize($_FILES['images']['tmp_name'][$i]) !== false) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $imageFileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $imageFileName.<br>";
            }
        } else {
            echo "File $imageFileName bukan gambar yang valid.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}

?>
