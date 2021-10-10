<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP 2</title>
</head>
<body>
    <h1>Perulangan</h1>
<?php
$d=mktime(4, 56, 54, 9, 10, 2021);
echo " " . date("d-m-Y h:i:s", $d);
echo "<br>";
echo "<br>";
$row1 = 5;
 for ($star3 = $row1; $star3 >= 0; $star3--){
    for ($star4 = $star3; $star4 >= 0; $star4--){
         echo '*';
     }
     echo "<br>";
}
?>
</body>
</html>