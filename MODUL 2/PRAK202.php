<html>
<body>
<?php
    $error = "tidak boleh kosong";
     if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $NIM = $_POST['nim'];
        if(isset($_POST['jenis_kelamin'])){
            $jenis_kelamin = $_POST['jenis_kelamin'];
        }
     }
    ?>

    
<form method="post">
           Nama: <input type="text" name="nama">
           <span style="color:#FF0000;">* <?php if(empty($nama)) echo "nama $error";?></span> <br>
            Nim: <input type="text" name="nim">
            <span style="color:#FF0000;">* <?php if(empty($NIM)) echo "nim $error";?></span> <br> 
           Jenis Kelamin :          <span style="color:#FF0000;">* <?php if(empty($jenis_kelamin)) echo "jenis kelamin $error";?></span><br>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-laki<br>
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
            <button type="submit" value="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        if(!empty($jenis_kelamin)&&!empty($nama)&&!empty($NIM)) {
            echo "<h2>Output:</h2>";
            echo "$nama<br>";
            echo "$NIM <br>";
            echo "$jenis_kelamin";
        }
    }
    
    ?>
</body>
</html>