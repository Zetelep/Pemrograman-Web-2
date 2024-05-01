<html>
    <body>
        <style>
            img{
                height: 15px;
                width: 15px;                
            }
        </style>
        <form action="" method="post">
            Batas Bawah: <input type="number" name="bawah" id=""> <br>
            Batas Atas: <input type="number" name="atas" id=""><br>
            <input type="submit" value="Cetak" name="cetak"><br><br>

            <?php
            if(isset($_POST["cetak"])){
                $bawah = $_POST['bawah'];
                $atas = $_POST['atas'];
                do{
                    if(($bawah+7)%5 == 0){
                        echo '<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png"> ';
                    }else{
                        echo "$bawah ";
                    }
                    $bawah++;
                }while($bawah<=$atas);
            }
            ?>
        </form>
    </body>
</html>