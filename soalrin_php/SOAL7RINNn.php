<?php
function luas($r) {
  return 3.14 * $r * $r;
}
function keliling($r) {
  return 2 * 3.14 * $r;
}

echo "r=7, Luas: " . luas(7) . ", Keliling: " . keliling(7) . "<br>";
echo "r=14, Luas: " . luas(14) . ", Keliling: " . keliling(14);
?>