<?php
echo "1. Output array dengan menggunakan perintah PRINT_R() <br>";
$negara[0] = "Indonesia";
$negara[1] = "Malaysia";
$negara[2] = "Singapura";
$negara[3] = "Brunei Darussalam";
$negara[4] = "Filipina";
echo '<pre>';
print_r($negara);
echo "<br>";
echo "2. Output array assosiatif ";
$negara = array(
  'Indonesia' => 'Jakarta',
  'Malaysia'  => 'Kuala Lumpur',
  'Singapura' => 'Singapura',
  'Thailand'  => 'Bangkok',
  'Filipina'  => 'Manila'
);
?>
<ul>
  <?php foreach ($negara as $key => $value): ?>
      <li>Ibukota <?= $key ?> adalah <?= $value ?></li>
  <?php endforeach ?>
</ul>