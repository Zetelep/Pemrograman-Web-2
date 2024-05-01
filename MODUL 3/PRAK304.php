<!DOCTYPE html>
<html>
    <body>
    <style>
            img{
                height: 50px;
                width: 50px;                
            }
        </style>
        <form action="" method="post">
            Jumlah Bintang: <input type="number" name="jumlah"><br>
            <input type="submit" value="Submit" name="submit"><br>
        </form>

        <?php
        if(isset($_POST["submit"])){
            $bintang = $_POST["jumlah"];
            echo "Jumlah Bintang $bintang<br>";
            echo str_repeat('<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png"> ', $bintang);
            ?>
            <form action="" method="post">
                <input type="hidden" name="jumlah" value="<?php echo $bintang; ?>">
                <input type="submit" value="tambah" name="tambah">
                <input type="submit" value="kurang" name="kurang">
            </form>
            <?php
        }

        if(isset($_POST["tambah"])){
            $bintang = $_POST["jumlah"] + 1;
            echo "Jumlah Bintang $bintang <br>";
            echo str_repeat('<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png"> ', $bintang);
            ?>
            <form action="" method="post">
                <input type="hidden" name="jumlah" value="<?php echo $bintang; ?>">
                <input type="submit" value="tambah" name="tambah">
                <input type="submit" value="kurang" name="kurang">
            </form>
            <?php
        }

        if(isset($_POST["kurang"])){
            $bintang = $_POST["jumlah"] - 1;
            echo "Jumlah Bintang $bintang<br>";
            if ($bintang > 0) {
                echo str_repeat('<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png"> ', $bintang);
            } else {
                echo "Masukkan jumlah bintang yang valid.";
            }
            ?>
            <form action="" method="post">
                <input type="hidden" name="jumlah" value="<?php echo $bintang; ?>">
                <input type="submit" value="tambah" name="tambah">
                <input type="submit" value="kurang" name="kurang">
            </form>
            <?php
        }
        ?>
    </body>
</html>
