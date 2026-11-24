<!-- form.php -->
<form method="POST" action="">
  Nama: <input type="text" name="nama"><br>
  Kelas: <input type="text" name="kelas"><br>
  <button type="submit">Kirim</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $kelas = $_POST["kelas"];
  if (empty($nama) || empty($kelas)) {
    echo "Semua kolom tidak boleh kosong!";
  } else {
    echo "Halo, " . htmlspecialchars($nama) . " dari kelas " . htmlspecialchars($kelas);
  }
}
?>
