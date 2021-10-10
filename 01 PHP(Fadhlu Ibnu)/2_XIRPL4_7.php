<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP 2</title>
</head>

<body>
    <h1>Pendahuluan</h1>
    <?php
    echo date('d-m-Y') . ' ' . date('h:i:s');
    echo "<br>";
    echo "<br>";
    $row1 = 10;
    for ($star3 = $row1; $star3 >= 0; $star3--) {
        for ($star4 = $star3; $star4 >= 0; $star4--) {
            echo '*';
        }
        echo "<br>";
    }
    ?>
</body>

</html>