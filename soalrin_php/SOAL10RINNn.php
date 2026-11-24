<?php
$harga = 120000;
$jumlah = 1;
$bayar = 150000;

$subtotal = $harga * $jumlah;
$diskon = 0;
if ($subtotal > 100000) {
    $diskon = $subtotal * 0.10;
}
$total = $subtotal - $diskon;
$kembali = $bayar - $total;

echo "===== STRUK BELANJA =====<br>";
echo "Subtotal : Rp " . number_format($subtotal, 0, ',', '.') . "<br>";
echo "Diskon : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total : Rp " . number_format($total, 0, ',', '.') . "<br>";
echo "Bayar : Rp " . number_format($bayar, 0, ',', '.') . "<br>";
echo "Kembali : Rp " . number_format($kembali, 0, ',', '.') . "<br>";
?>