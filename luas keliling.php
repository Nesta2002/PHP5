<?php
  function luas_layang ($d1, $d2) {
    return $d1 * $d2 * 0.5;
  }
  function keliling_layang ($nil1, $nil2) {
    return 2 * ($nil1 + $nil2);
  }
  //pemanggilan fungsi
  $bil1 = 10;
  $bil2 = 20;
  $ang1 = 6;
  $ang2 = 8;
  echo "Luas layang-layang dengan diagonal $bil1 dan $bil2 = ";
  echo luas_layang($bil1, $bil2);
  echo "<br>";
  echo "Keliling layang-layang dengan diagonal $ang1 dan $ang2 = ";
  echo keliling_layang($ang1, $ang2);
 ?>
