<form method="POST">
Masukkan Luas : <input type="number" name="luas" required>
<button name="hitung">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $luas = $_POST['luas'];
    $r = sqrt($luas / (22/7));

    echo "<br>Luas : $luas <br>";
    echo "Jari-jari : $r";
}
?>