<?php
echo "<h3>1. Soal 1</h3>";
$gaji = 2000000;
$pajak = 0.1;
$hasil = $gaji * $pajak;
$potongan = $gaji - $hasil;
echo "Gaji : $gaji <br>";
echo "Potongan 10% : $hasil <br>";
echo "Gaji ahmad : $potongan <br>";
echo "<h3>2. Soal 2</h3>";
echo "Menghitung Luas Tabung <br>";
$lalas = 10; $selimuttabung = 30;
echo "Rumus L = 2 x Luas alas + Luas selimut tabung <br>";
echo "luas alas : $lalas <br>";
echo "luas selimut tabung : $selimuttabung <br>";
$hasil = 2 * $lalas + $selimuttabung;
echo "Hasil luas tabung : $hasil <br>";
echo "<h3>3. Soal 3</h3>";
echo "Menghitung volume kerucut <br>";
$phi = 3.14; $r = 8; $t = 12;
echo "Rumus volume = 1/3 x phi.r2.t <br>";
echo "R : $r <br>";
echo "T : $t <br>";
$hasil = 0.3 * $phi * $r * $r * $t;
echo "Hasil volume kerucut : $hasil <br>";
echo "<h3>4. Soal 4</h3>";
echo "Menghitung volume prisma <br>";
$panjang = 7; $lebar = 15 ; $tinggi = 25;
echo "Rumus volume prisma = 1/2 x (panjang x lebar x tinggi) <br>";
echo "Panjang : $panjang <br>";
echo "Lebar : $lebar <br>";
echo "tinggi : $tinggi <br>";
$hasil = 0.5 * ($panjang * $lebar * $tinggi);
echo "Hasil volume prisma : $hasil";
