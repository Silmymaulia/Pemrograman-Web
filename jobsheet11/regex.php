<?php
    //langkah 2
    $pattern = '/[a-z]/'; //cocokkan huruf kecil
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)){
        echo "Huruf kecil ditemukan";
    }else{
        echo "Tidak ada huruf kecil!";
    }

    //langkah 6
    $pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
    $text = 'There are 123 apples.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    }else{
        echo "Tidak ada yang cocok!";
    }

    //langkah 10
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text;

    //langkah 14
    $pattern = '/go*d/'; //cocokkan "god". "good", "goood", dll
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ", $matches[0];
    }else{
        echo "Tidak ada yang cocok!";
    }

    //langkah 17
    $pattern = '/go?d/'; //cocokkan "god", "good"
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ", $matches[0];
    }else{
        echo "Tidak ada yang cocok!";
    }

    //langkah 18
    $pattern = '/go{1,2}d/'; // Cocokkan "god", "good", "goood", dll (o muncul 1 atau 2 kali)
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ", $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
?>