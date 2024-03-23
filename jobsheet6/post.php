<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['fname'];
            if (empty($name)){
                echo "Name is empty";
            }else {
                echo $name;
            }
        }
        ?>
    </body>
</html>