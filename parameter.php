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
    function print_text($text, $angka){

        $text = "gedung " . $text . " " . $angka;

        echo "------------";
        echo $text;
        echo "------------";
    }
    function jarak(){
        echo "<br>";
    }

    print_text("koding", 21);
    jarak();
    print_text("perawat", 23);
    jarak();
    print_text("mengemudi", 43);
    jarak();

    ?>
</body>
</html>