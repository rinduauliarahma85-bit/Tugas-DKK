<!-- kalkulator.php -->
<form method="POST" action="">
  Angka 1: <input type="number" name="a"><br>
  Angka 2: <input type="number" name="b"><br>
  <select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">x</option>
    <option value="/">/</option>
  </select><br>
  <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $op = $_POST["op"];
  switch ($op) {
    case "+": echo $a + $b; break;
    case "-": echo $a - $b; break;
    case "*": echo $a * $b; break;
    case "/":
      if ($b == 0) {
        echo "Tidak bisa dibagi nol!";
      } else {
        echo $a / $b;
      }
      break;
  }
}
?>