<html>
<body>
<form method="post">
    Nilai: <input type="number" name="nilai"> <br>
    <input type="submit" value="konversi" name="konversi">
</form>

<?php
    if(isset($_POST['konversi']) && isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];
        if($nilai > 0 && $nilai < 10){
            echo "<h2> Hasil: satuan </h2>";
        }
        else if($nilai ==0){
            echo "<h2> Hasil: nol </h2>";
        }
        else if($nilai >= 10 && $nilai < 100){
            echo "<h2> Hasil: belasan </h2>";;
        }
        else if($nilai >=100 && $nilai < 1000){
            echo "<h2> Hasil: ratusan </h2>";
        }
        else{
            echo "<h2 style=\"color:#FF0000;\" > Anda menginput melebihi limit bilangan </h2>";
        }
    }
?>
</body>
</html>
