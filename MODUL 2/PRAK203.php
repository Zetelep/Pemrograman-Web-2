<html>
<body>
    <form method="post">
        Nilai:  <input type="number" name="nilai"> <br>
        Dari:<br>
        <input type="radio" name="awal" value="c">Celcius <br>
        <input type="radio" name="awal" value="f">Fahrenheit <br>
        <input type="radio" name="awal" value="r">Rheamur <br>
        <input type="radio" name="awal" value="k">Kelvin <br>
        Ke: <br>
        <input type="radio" name="hasil" value="c">Celcius <br>
        <input type="radio" name="hasil" value="f">Fahrenheit <br>
        <input type="radio" name="hasil" value="r">Rheamur <br>
        <input type="radio" name="hasil" value="k">Kelvin <br>

        <input type="submit" value="Konversi" name="konversi">
    </form>

    <?php
    if(isset($_POST['konversi'])){
        $nilai=$_POST['nilai'];
        $awal = $_POST['awal'];
        $hasil = $_POST['hasil'];
        switch ($awal) {
            case 'c':
                switch ($hasil) {
                    case 'f':
                        echo "<h2>Hasil Konversi: ",(9/5*$nilai)+32," &degF</h2>";
                        break;
                    case 'r':
                        echo "<h2>Hasil Konversi: ",(4/5*$nilai)," &degR</h2>";
                        break;
                    case 'k':
                        echo "<h2>Hasil Konversi: ",$nilai+273.15," K</h2>";
                        break;
                    default:
                        echo "<h2>Hasil Konversi: ",$nilai," &degC</h2>";
                }
                break;
            case 'f':
                switch ($hasil) {
                    case 'c':
                        echo "<h2>Hasil Konversi: ",(5/9*($nilai-32))," &degC</h2>";
                        break;
                    case 'r':
                        echo "<h2>Hasil Konversi: ",(4/9*($nilai-32))," &degR</h2>";
                        break;
                    case 'k':
                        echo "<h2>Hasil Konversi: ",(5/9*($nilai-32)+273.15)," K</h2>";
                        break;
                    default:
                        echo "<h2>Hasil Konversi: ",$nilai," &degF</h2>";
                }
                break;
            case 'r':
                switch ($hasil) {
                    case 'c':
                        echo "<h2>Hasil Konversi: ",(5/4*$nilai)," &degC</h2>";
                        break;
                    case 'f':
                        echo "<h2>Hasil Konversi: ",(9/4*$nilai+32)," &degF</h2>";
                        break;
                    case 'k':
                        echo "<h2>Hasil Konversi: ",(5/4*$nilai+273.15)," K</h2>";
                        break;
                    default:
                        echo "<h2>Hasil Konversi: ",$nilai," &degR</h2>";
                }
                break;
            case 'k':
                switch ($hasil) {
                    case 'c':
                        echo "<h2>Hasil Konversi: ",($nilai-273.15)," &degC</h2>";
                        break;
                    case 'f':
                        echo "<h2>Hasil Konversi: ",(9/5*($nilai-273.15)+32)," &degF</h2>";
                        break;
                    case 'r':
                        echo "<h2>Hasil Konversi: ",(4/5*($nilai-273.15))," &degR</h2>";
                        break;
                    default:
                        echo "<h2>Hasil Konversi: ",$nilai," K</h2>";
                }
                break;
        }
    }
    ?>
</body>
</html>
