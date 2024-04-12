<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Hasil input: " . $input;

        // Memeriksa apakah input adalah email yang valid
        if(isset($_POST['email'])) {
            $email = $_POST['email'];
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                // Lanjutkan dengan pengolahan email yang aman
                echo "<br>";
                echo "Email valid: " . $email;
            } else{
                // Tangani input tidak valid
                echo "<br>";
                echo "Email tidak valid";
            }
        }
    }
?>
