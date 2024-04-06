<html>
    <style>
    table, td {
        border: 1px solid black;
        
    }

    .judul{
        background-color: red;
        height: 60px;
        font-size: 20px;
    }
    </style>

<table>
<tr>
    <td class="judul"> <b>
        Daftar Smartphone Samsung
    </b></td>
</tr>
<?php
$samsung = array( 1 =>"Samsung Galaxy S22", 
                2 => "Samsung Galaxy S22+", 
                3 => "Samsung Galaxy A03", 
                4 =>"Samsung Galaxy Xcover 5");

foreach ($samsung as $i => $value){
?>  <tr>
    <td>
        <?php echo "$value"; ?>
    </td>
</tr>

<?php
}
?>

</table>
</html>