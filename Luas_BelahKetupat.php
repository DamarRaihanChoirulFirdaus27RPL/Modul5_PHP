<?php
function luas_Belahketupat ($diagonal1, $diagonal2) {
    return $diagonal1 * $diagonal2 / 2;
  }
function keliling_Segitiga ($sisi1, $sisi2, $sisi3, $sisi4) {
    return $sisi1+$sisi2+$sisi3+$sisi4;
}
//pemanggilan fungsi
$D1 = 55;
$D2 = 155;
$S1 = 35;
$S2 = 23;
$S3 = 13;
$S4 = 44;
echo "Diagonal 1 = $D1 cm <br>"; 
echo "Diagonal 2 = $D2 cm<br>";
echo "Sisi 1 = $S1 cm <br>"; 
echo "Sisi 2 = $S2 cm <br>";
echo "Sisi 3 = $S3 cm <br>"; 
echo "Sisi 4 = $S4 cm <br>"; 
echo "Luas Belah Ketupat  = Diagonal 1 * Diagonal 2 / 2 = $D1 * $D2 /2 = ";
echo luas_Belahketupat($D1, $D2);
echo " cm<sup>2</sup><br>";
echo "Keliling Belah Ketupat  = Sisi1 + Sisi2 + Sisi3 + Sisi4 = $S1 + $S2 + $S3 + $S4 =";
echo keliling_Segitiga($S1, $S2, $S3, $S4);
echo " m";
?>
