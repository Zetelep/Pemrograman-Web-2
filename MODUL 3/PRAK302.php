<!DOCTYPE html>
<html>
<head>
    <title>Segitiga</title>
    <style>
         img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Tinggi Segitiga: <input type="number" name="tinggi"><br>
        Alamat Gambar: <input type="text" name="link"><br>
        <input type="submit" value="Tampilkan Segitiga" name="submit">
    </form>

    <div class="segitiga">
        <?php
        function build_triangle($tinggi, $gambar_url) {
            $baris = $tinggi;
            $ws = 0;
            while ($baris > 0) {
                echo str_repeat('<img src=" " class= "ws">', $ws);
                echo str_repeat('<img src="' . $gambar_url . '">', $baris) . "<br>";
                $baris--; $ws++;
            }
        }

        if(isset($_POST['submit'])){
            $tinggi = $_POST['tinggi'];
            $gambar_url = $_POST['link'];
            build_triangle($tinggi, $gambar_url);
        }
        ?>
    </div>
</body>
</html>
