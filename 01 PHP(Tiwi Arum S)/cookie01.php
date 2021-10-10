<?php
$value = 'achmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /*exprice in 1 */

echo "<h1> ini halaman pengetesan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>