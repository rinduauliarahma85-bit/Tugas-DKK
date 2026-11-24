<h2>Form REGISTRASI</h2>
<form method="POST">
Nama : <br><input type="text" name="nama" required><br><br>
Username : <br><input type="text" name="user" required><br><br>
Password : <br><input type="password" name="pass" required><br><br>
Konfirmasi Password : <br><input type="password" name="konfirmasi" required><br><br>
<button name="daftar">DAFTAR</button>
<button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    if ($_POST['pass'] == $_POST['konfirmasi']) {
        echo "<br>Berhasil Daftar! Halo, " . $_POST['nama'];
    } else {
        echo "<br>Password tidak sama!";
    }
}
?>

<hr>

<h2>Form LOGIN</h2>
<form method="POST">
Username : <br><input type="text" name="user2" required><br><br>
Password : <br><input type="password" name="pass2" required><br><br>
<button name="login">LOGIN</button>
<button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['login'])) {
    echo "<br>Login sebagai : " . $_POST['user2'];
}
?>