<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function menghitung ($x, $y){
        $z = $x + $y;
        return $z;
    }

    $hasil = menghitung(2,5) * 10;
    echo " hasil dari penjumlahan" . $hasil;
    echo " hasil dari penjumlahan" . menghitung (2,4);
    
    ?>
</body>
</html>