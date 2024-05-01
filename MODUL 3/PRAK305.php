<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="string">
            <input type="submit" value="Cetak">
        </form>

        <?php
        if(isset($_POST["string"])){
            $input_string = $_POST["string"];
            $panjang_string = strlen($input_string);

            for ($i = 0; $i < $panjang_string; $i++) {
                $char = strtoupper($input_string[$i]);
                echo $char . str_repeat(strtolower($char), $panjang_string - 1);
            }
        }
        ?>
    </body>
</html>
