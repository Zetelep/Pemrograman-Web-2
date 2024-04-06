<?php
    $jari_jari = 4.2;
    $tinggi = 5.4; //tinggi prisma
    $panjang = 8.9; //sebagai alas
    $lebar = 14.7; //sebagai tinggi segitiga
    $sisi = 7.9;
    
    // Rumus volumev prisma alas segitiga = (0.5 * alas * tinggi) * tinggi prisma
    $volume_prisma_alas_segitiga = round((0.5 * $panjang * $lebar) * $tinggi, 3);
    
    echo "$volume_prisma_alas_segitiga m3";
?>