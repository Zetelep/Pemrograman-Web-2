<html>
    <style>
        table{
            border-collapse: collapse;
            text-align: left;
        }
        td{
            border: 1px solid;
            padding: 10px;
        }
        th{
            padding: 10;
            border: 1px solid;
            background-color: #D3D3D3;
        }
    </style>
<?php
$list_nilai= [
    ["nama" => "Andi", "NIM" => 2101001, "UTS" => 87, "UAS" => 65],
    ["nama" => "Budi", "NIM" => 2101002, "UTS" => 76, "UAS" => 79],
    ["nama" => "Tono", "NIM" => 2101003, "UTS" => 50, "UAS" => 41],
    ["nama" => "Jessica", "NIM" => 2101004, "UTS" => 60, "UAS" => 75],
];
for ($i = 0; $i < count($list_nilai); $i++) {
    $list_nilai[$i]["Akhir"] = $list_nilai[$i]["UTS"] * 0.4 + $list_nilai[$i]["UAS"] * 0.6;
    if ($list_nilai[$i]["Akhir"] >= 80) {
        $list_nilai[$i]["Huruf"] = "A";
    } elseif ($list_nilai[$i]["Akhir"] > 70) {
        $list_nilai[$i]["Huruf"] = "B";
    } elseif ($list_nilai[$i]["Akhir"] > 60) {
        $list_nilai[$i]["Huruf"] = "C";
    } elseif ($list_nilai[$i]["Akhir"] > 50) {
        $list_nilai[$i]["Huruf"] = "D";
    } else {
        $list_nilai[$i]["Huruf"] = "E";
    }
}
?>
<table>
    <tr>
        <th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Huruf</th>
    </tr>
    <?php
    for ($i = 0; $i < count($list_nilai); $i++) {
        echo "<tr>";
        echo "<td>".$list_nilai[$i]["nama"]."</td>";
        echo "<td>".$list_nilai[$i]["NIM"]."</td>";
        echo "<td>".$list_nilai[$i]["UTS"]."</td>";
        echo "<td>".$list_nilai[$i]["UAS"]."</td>";
        echo "<td>".$list_nilai[$i]["Akhir"]."</td>";
        echo "<td>".$list_nilai[$i]["Huruf"]."</td>";
        echo "</tr>";
    }
    ?>
</table>
</html>
