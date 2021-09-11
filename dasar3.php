<?php
// $angka = 10;
// if ($angka > 10) {
//     echo "Anda mendapatkan predikat baik";
// } else {
//     echo "nilai anda ghoib";
// }
// $belanja = -1000;
// if ($belanja >= 15000) {
//     echo "maka anda mendapatkan Silverqueen";
// } elseif ($belanja <= 10000 && $belanja >= 5000) {
//     echo "anda mendapatkan teh pucuk harum 2 botol";
// } else {
//     echo "anda mendapatkan cireng";
// }
echo "Program lampu lalu lintas <br>";
$lampu = "hijau";
switch ($lampu) {
  case "merah":
    echo "Anda harus berhenti";
    break;
  case "kuning":
    echo "Anda harus siap-siap";
    break;
  case "hijau":
    echo "Anda harus maju";
    break;
  default:
    echo "Lampu lalu lintas error";
  }
