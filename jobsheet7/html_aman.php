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
<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input">
        <br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
