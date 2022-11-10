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
    $a = 2000;
    $b = 3;
    function menghitung (){
        global $a, $b;

     //  $c = $GLOBALS["a"] + $GLOBALS["B"]; 
        $c = $a + $b;
        return $c;
    }

    echo menghitung();
    ?>
</body>
</html>