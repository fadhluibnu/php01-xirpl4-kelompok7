<?php 
$value = 'achmmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>ini halaman pergeseran cookie</h1>";
echo "<h1>Klik <a href = 'cookie02.php'> di sini</a> untuk pemeriksaan cookie</h2>";
