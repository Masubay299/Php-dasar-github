<?php
$jurusan = array("Teknik Informatika", "Sistem Informasi",
"Teknik Komputer", "Manajemen Informatika");
















$jumlah_array = count($jurusan);
for ($i = 0; $i < $jumlah_array ; $i++) {
    echo "Jurusan ".$jurusan[$i]." - ada di index $i";
    echo "<br>";
}
