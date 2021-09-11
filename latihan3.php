<?php
echo "1. Contoh program array numeric <br>";
 $jurusan = array("Teknik Informatika",
  "Sistem Informasi",
 "Teknik Komputer", "Manajemen Informatika");
 $jumlah_array = count($jurusan);
 for ($i = 0; $i < $jumlah_array ; $i++) {
     echo "Jurusan ".$jurusan[$i]." - ada di index $i";
     echo "<br>";
 }


echo "<br>";

echo "2. Contoh program array assosiatif <br>";







$data= array("jurusan1"=>"Teknik Informatika","jurusan2"=>"Sistem Informasi","jurusan3"=>"Teknik Komputer","jurusan4"=>"Manajemen Informatika");

foreach ($data as $index => $nilai) {
    echo "Kata kunci Index=  " . $index . ", Nilai = " . $nilai;
    echo "<br>";
}
