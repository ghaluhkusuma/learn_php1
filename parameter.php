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
    function print_text($text){

        $text = "gedung" . $text;

        echo "------------";
        echo $text;
        echo "------------";
    }
    function jarak(){
        echo "<br>";
    }

    print_text(" koding");
    jarak();
    print_text(" perawat");
    jarak();
    print_text(" mengemudi");
    jarak();

    ?>
</body>
</html>