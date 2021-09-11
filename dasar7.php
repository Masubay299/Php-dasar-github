<?php
$perusahaan = [
  'nama' => 'Bayu Prima Yuda',
  'umur' => '22 Tahun',
  'alamat' => 'Permata kopo',
  'hobby' => [
    'Membaca',
    'Menghitung',
  ],
  'Media Sosial' => [
    'Instagram' => 'bayuprimayuda',
    'Facebook' => 'Bayu Prima Yuda'
  ]
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Program array multidimensi menampilkan satu data <br>";
echo $perusahaan['hobby'][1]."<br>";
echo $perusahaan['Media Sosial']['Facebook'];
