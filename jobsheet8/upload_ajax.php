<?php
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file
        $extensions = array("pdf", "doc", "docx", "txt");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
        }

        if ($file_size > 2097152) { // 2 MB dalam byte
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah.";
        } else {
            echo implode(" ", $errors);
        }
    }

    // langkah 5
    // if (isset($_FILES['images'])) {
    //     $errors = array();
    
    //     // Lokasi penyimpanan file yang diunggah 
    //     $targetDirectory = "uploads/";
    
    //     // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
    //     if (!file_exists($targetDirectory)){
    //         mkdir($targetDirectory, 0777, true);
    //     }
    
    //     foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
    //         $file_name = $_FILES['images']['name'][$key];
    //         $file_size = $_FILES['images']['size'][$key];
    //         $file_type = $_FILES['images']['type'][$key];
    //         $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file
    //         $extensions = array("jpg", "jpeg", "png", "gif");
    
    //         if (in_array($file_ext, $extensions) === false) {
    //             $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
    //         }
    
    //         if ($file_size > 2097152) { // 2 MB dalam byte
    //             $errors[] = 'Ukuran file ' . $file_name . ' melebihi batas maksimum 2 MB';
    //         }
    
    //         if (empty($errors) == true) {
    //             move_uploaded_file($tmp_name, $targetDirectory . $file_name);
    //             echo "Gambar $file_name berhasil diunggah.<br>";
    //         } else {
    //             echo implode("<br>", $errors);
    //         }
    //     }
    // } else {
    //     echo "Tidak ada gambar yang diunggah.";
    // }
?>