<?php
echo "1. Pengulangan For <br>";
echo "<br>";
// Perulangan for adalah perulangan yang termasuk dalam
//counted loop, karena kita udah mengetahui
//jumlah pengulangannya
for ($i=0; $i<=10; $i++) {
    echo "Ini perulangan ke - $i <br> ";
}
echo "<br>";
echo "2. Pengulangan While <br>";
echo "<br>";
$ulangi = 0;
while ($ulangi < 10) {
    echo "ini perulangan ke - $ulangi <br>";
    $ulangi++;
}
echo "<br>";
echo "3. Pengulangan Do-While <br>";
echo "<br>";
$ulangi = 0;
do {
    echo "Ini perulangan ke - $ulangi <br>";
    $ulangi++;
} while ($ulangi < 10);
echo "<br>";
echo "4. Pengulangan Foreach <br>";
$books = [
  "Panduan belajar java untuk pemula",
  "Membangun Aplikasi Java dengan Netbeans",
  "Tutorial Java dan Mysql",
  "Membuat Penggajian Desktop dengan Java"
];
echo "<h5>Judul buku Java </h5>";
echo "<ol>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ol>";
