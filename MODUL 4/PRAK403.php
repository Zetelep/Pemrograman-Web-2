<html>
    <style>
        table,th,tr,td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
        tr{
            text-align: left;
        }
    </style>
    <?php
        $nilai = [
            ["no" => 1, "nama" => "Ridho", "matkul" => [["nama_matkul" =>"Pemrograman I", "sks" => 2], ["nama_matkul" => "Praktikum Pemrograman I", "sks" => 1],["nama_matkul" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], ["nama_matkul" => "Arsitektur Komputer", "sks" => 3],]],
            ["no" => 2, "nama" => "Ratna", "matkul" => [["nama_matkul" =>"Basis Data I", "sks" => 2], ["nama_matkul" => "Praktikum Basis Data I", "sks" => 1],["nama_matkul" => "Kalkulus", "sks" => 3],]],
            ["no" => 3, "nama" => "Tono", "matkul" => [["nama_matkul" => "Rekayasa Perangkat Lunak", "sks" => 3], ["nama_matkul" => "Analisis dan Perancangan Sistem", "sks" => 3],["nama_matkul" => "Komputasi Awan", "sks" => 3], ["nama_matkul" => "Kecerdasan Bisnis", "sks" => 3]]],
        ];
        
        for($i=0; $i<count($nilai); $i++){
            $jumlah_sks=0;
            for($j=0; $j<count($nilai[$i]["matkul"]); $j++) { 
                $jumlah_sks += $nilai[$i]["matkul"][$j]["sks"];
            }
            $nilai[$i]["jmlh_sks"] = $jumlah_sks;
            if($nilai[$i]["jmlh_sks"] < 7) {
                $nilai[$i]["keterangan"] = "Revisi KRS";
            } 
            else{
                $nilai[$i]["keterangan"] = "Tidak Revisi";
            }
        }
        ?>
        <table style='width:700px'>
        <tr style='text-align:left; background-color:#d0cece'>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
        </tr>
    <?php
        for ($i=0; $i<count($nilai); $i++) {
            for ($j=0; $j<count($nilai[$i]["matkul"]); $j++) { 
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>".$nilai[$i]["no"]."</td>";
                    echo "<td>".$nilai[$i]["nama"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["nama_matkul"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td>".$nilai[$i]["jmlh_sks"]."</td>";
                    if($nilai[$i]["keterangan"]=="Revisi KRS"){
                        echo "<td style='background-color:#ea3322'>".$nilai[$i]["keterangan"]."</td>";                        
                    }
                    else{
                        echo "<td style='background-color:#4ead5b'>".$nilai[$i]["keterangan"]."</td>"; 
                    }
                }
                else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["nama_matkul"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
</html>