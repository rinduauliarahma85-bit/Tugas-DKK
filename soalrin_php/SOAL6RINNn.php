<?php
$siswa = [
  ["nama" => "Doni", "nilai" => 88],
  ["nama" => "Faiha", "nilai" => 90],
  ["nama" => "Kusuma", "nilai" => 95],
  ["nama" => "Noel", "nilai" => 89],
  ["nama" => "Nanda", "nilai" => 98],
];

$nilai_saja = [88, 90, 95, 89, 98];
$rata = array_sum($nilai_saja) / count($nilai_saja);

echo "<table border='1'><tr><th>Nama</th><th>Nilai</th></tr>";
foreach ($siswa as $s) {
  echo "<tr><td>{$s['nama']}</td><td>{$s['nilai']}</td></tr>";
}
echo "</table>";
echo "Rata-rata: $rata<br>";
echo "Tertinggi: " . max($nilai_saja) . "<br>";
echo "Terendah: " . min($nilai_saja);
?>