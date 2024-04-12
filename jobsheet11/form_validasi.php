<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span>
            <br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span>
            <br>

            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function(){
                $("#myForm").submit(function(event){
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama === ""){
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    }else{
                        $("#nama-error").text("");
                    }

                    if (email === ""){
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    }else{
                        $("#email-error").text("");
                    }

                    if (!valid) {
                        event.preventDefault(); //menghentikan pengiriman form jika validasi gagal
                    }
                });
            });
        </script>
    </body>
</html> -->

<!-- langkah 9 -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <!-- penambahan input field password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                //event.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi nama
                if (nama === ""){
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }else{
                    $("#nama-error").text("");
                }

                // Validasi email
                if (email === ""){
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }else{
                    $("#email-error").text("");
                }

                // Validasi password
                var password = $("#password").val();
                if (password.length < 8) {
                    $("#password-error").text("Password harus memiliki minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validasi_ajax.php",
                        type: "POST",
                        data: $("#myForm").serialize(), // Mengirim data form menggunakan metode serialize
                        success: function(response){
                            // Menampilkan hasil dari server
                            alert(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
