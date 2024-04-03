<?php
    if (isset($_POST["submit"])){
        $targetDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        $maxFileSize = 5 * 1024 * 1024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
                echo "File berhasil diunggah.";
            }else{
                echo "Gagal mengunggah file.";
            }
        }else{
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }

    // langkah 7
    // if (isset($_POST["submit"])){
    //     $targetDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    //     $maxFileSize = 5 * 1024 * 1024;

    //     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
    //             // Membuat thumbnail
    //             $thumbnailWidth = 200; // Lebar thumbnail tetap 200px

    //             // Mendapatkan informasi gambar asli
    //             list($originalWidth, $originalHeight) = getimagesize($targetFile);

    //             // Menghitung tinggi thumbnail sesuai dengan lebar yang ditetapkan
    //             $thumbnailHeight = floor($originalHeight * ($thumbnailWidth / $originalWidth));

    //             // Membuat gambar thumbnail baru
    //             $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);

    //             // Memuat gambar asli
    //             $source = null;
    //             if ($fileType === 'jpg' || $fileType === 'jpeg') {
    //                 $source = imagecreatefromjpeg($targetFile);
    //             } elseif ($fileType === 'png') {
    //                 $source = imagecreatefrompng($targetFile);
    //             } elseif ($fileType === 'gif') {
    //                 $source = imagecreatefromgif($targetFile);
    //             }

    //             // Menyalin dan menyesuaikan ukuran gambar asli ke thumbnail
    //             imagecopyresampled($thumbnail, $source, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);

    //             // Simpan thumbnail
    //             $thumbnailFileName = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
    //             if ($fileType === 'jpg' || $fileType === 'jpeg') {
    //                 imagejpeg($thumbnail, $thumbnailFileName);
    //             } elseif ($fileType === 'png') {
    //                 imagepng($thumbnail, $thumbnailFileName);
    //             } elseif ($fileType === 'gif') {
    //                 imagegif($thumbnail, $thumbnailFileName);
    //             }

    //             echo "File dan thumbnail berhasil diunggah.";
    //         }else{
    //             echo "Gagal mengunggah file.";
    //         }
    //     }else{
    //         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    //     }
    // }

    // //langkah 8
    // if (isset($_POST["submit"])){
    //     $targetDirectory = "documents/"; // direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    //     $allowedExtensions = array("txt", "pdf", "doc", "docx");
    
    //     $maxFileSize = 10 * 1024 * 1024;
    
    //     if (in_array($fileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize){
    //         if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
    //             echo "Dokumen berhasil diunggah.";
    //         }else{
    //             echo "Gagal mengunggah dokumen.";
    //         }
    //     }else{
    //         echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    //     }
    // }
    
?>