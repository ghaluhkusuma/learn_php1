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

    // menuliakan konten/isi
    echo "<h1> Selamat Datang</h1> <br>";

    echo "<h3> Belajar Variabel</h3> <br>";
    // valiabel pada php
    $nama = "Sekolah koding";
    $nama2 = "Bermain koding";
    
    echo $nama . " untuk " . $nama2; //cara menggabungkan variabel yaitu dengan titik
    echo " <br> Selamat datang di $nama <br> ";

    // tipe data angka/number
    // 1. integer 2. float

    $angka = 1000;
    $angka2 = 100;

    echo  $angka + $angka2 . " <br> ";

    // operator aritmatik
    // + - * / % ++ --

    $angka3 = 23.65;
    $angka++;
    $test = $angka + $angka2;

    // nama = nilai (abaikan variabelnya, perhatikan setelah =)
    // $angka = $angka + $angka3; 
    // += fungsinya sama seperti di atas
    $angka += $angka3;

    echo $angka - $angka2 * $angka3 . "<br>";
    echo $angka . "<br>";

    echo $test . "<br>";
    echo $angka . "<br>";
    
    echo "<h1> Belajar metode math </h1> <br>";
    // metode math
    // round rand(min, max) akan membulatkan ke angka terdekat
    echo round($angka3) . " <br> ";
    // rand digunakan untuk mengacak
    echo "Angka hari ini adalah " . rand (5, 10) . "<br>";
    // max mengambil nilai terbesar
    echo "Angka hari ini adalah " . max (5, 10, 20, 7, 45) . "<br>";
    echo "Angka hari ini adalah " . max ($angka, $angka2, $angka3) . "<br>";


    echo "<h1> Belajar String </h1> <br>";
    // metode string
    
    $text = "Hai Semuanya ";
    // strlen digunakan untuk menghitung jumlah huruf
    echo strlen($text) . "<br>";
    // str_word_count digunakan untuk menghitung jumlah kata
    echo str_word_count($text) . "<br>";
    // str_replace digunakan untuk mengubah kata tertentu
    echo str_replace( "Hai", "Hallo",$text) . "<br>";
    // str_repeat digunakan untuk mengulang text tertentu berkali2
    echo str_repeat( "Hai ", 10 ) . "<br>";
    // mengganti dan mengulang 
    echo str_repeat ( str_replace ( "Hai ", "Hallo ", $text), 10 ) . "<br>";


    //Array pada PHP
    echo "<h1> Belajar Array PHP </h1> <br>";
    $kotak = array("kuda", "sapi", "kambing");
    $nama3 = ["hilman","Endy", "Tiqa"];
    $angka = [3,10,2,1,6];

    
    print $kotak[0] . "<br>";
    //print_r digunakan untuk melihat array ke berapa
    print_r ($kotak) . "<br>";

    //mengabil array tertentu
    echo $kotak[2] . "<br>";

    echo $nama3[2] . "<br>";

    //metode Array
    //metode unique
    echo "<h5> metode unique</h5> <br>";
    print_r( array_unique($kotak));
    
    //metode reverse digunakan untuk membalik array
    echo "<h5> metode reverse</h5> <br>";
    print_r( array_reverse($kotak)) ;
    //metode shuffle digunakan untuk menampilkan urutan yang berbeda
    echo "<h5> metode suffle</h5> <br>";
    shuffle($kotak) ;
    print_r($kotak) ;
    //array metode short
    echo "<h5> metode short</h5> <br>";
    sort($angka);
    print_r ($angka) ;

    //jumlah dari isi array
    echo "<h5> jumlah isi array</h5> <br>";
    echo count($nama3);

    //Assosiative array
    echo "<h1> Assosiative Array</h1> <br>";
    // key => isi valuenya
    $data = array ("nama" => "Hilman",
                    "umur" => 21,
                    "kerja" => "Pengacara",
                    );

    $data2 = array ("istri" => "susi",
                    "laptop" => "Lenovo",
                    );
        
    print_r($data);
    echo "<h5> Mengambil data dari assosiative array</h5> <br>";
    echo "Namanya adalah " . $data['nama'] . "<br>";
    echo "Usianya adalah " . $data['umur'] . "<br>";
    echo "Pekerjaannya adalah " . $data['kerja'] . "<br>";

    //mengganti nama
    echo "<h5> Mengganti nama</h5> <br>";
    $data ['nama'] = "Hilman Ramadhan";
    echo "Namanya adalah " . $data['nama'] . "<br>";


    //metode assosiative array
    echo "<h1> Metode Assosiative Array</h1> <br>";
    //metode array_vallues (mengembalikan nilainya)
    echo "<h5> mengembalikan nilainya</h5> <br>";
    print_r( array_values($data) );
    //metode array_keys (mengembalikan kuncinya)
    echo "<h5> mengembalikan kuncinya</h5> <br>";
    print_r( array_keys($data) );
    //metode array_merge (menggabungkan beberapa array)
    echo "<h5> menggabungkan beberapa array</h5> <br>";
    print_r( array_merge($data) );
    echo "<h5> menggabungkan beberapa array dari 2 variabel</h5> <br>";
    print_r( array_merge($data,  $data2) );

    //multidimensi Array
    echo "<h1> Multidimensi Array</h1> <br>";
    $data3 = array (
        array( "programmer", "21", "tidur"),
        array( "designer", "24", "mancing"),
        array( "manager", "32", "membaca"),
    );

    print_r($data3);
    //Mengakses Array berdasarkan index
    //00 01 02
    //10 11 12
    //20 21 22
    echo "<h5> Mengakses Array berdasarkan index</h5> <br>";
    echo $data3 [1][2];

    //Loop PHP (pegulangan)
    /* terdapat 3 variabel 
        for (variabel awal) - mulai
        for (batas) - syarat
        for (perubahan)
    */
    echo "<h1> Loop PHP</h1> <br>";
    //menambah data
    for($i = 0; $i<5; $i++)
    {
        echo "belajar terus <br>";
    }
    
    for($i = 0; $i<5; $i++)
    {
        echo "belajar terus $i<br>";
    }

    for($i = 0; $i<=5; $i++)
    {
        echo "belajar terus $i<br>";
    }


    //mengeluarkan hasil array
    echo "<h1> Mengeluarkan hasil array</h1> <br>";

    $hewan1 = ['anjing','kuda','cicak','domba','buaya'];
    //gunakan count untuk mengetahui jumlah array
    for($i = 0; $i<count($hewan1) -1 ; $i++)
    {
        echo "-----------";
        echo $hewan1[$i];
        echo "----------- <br>";
    }

    echo "<h3> Mengeluarkan hasil array dengan foreach</h3> <br>";
    foreach($hewan1 as $h){
        echo "-----------";
        echo $h;
        echo "----------- <br>";
    }

    //while dan  do while
    echo "<h1> menggunakan while dan do while</h1> <br>";
    //while
    echo "<h5> menggunakan while</h5> <br>";
    $a = 0;
    while ($a < count ($hewan1)){
       echo $hewan1[$a]. "<br>";
        $a++;
    }
    //do while
    echo "<h5> menggunakan do while</h5> <br>";
    $c = 0;
    do{
        echo $hewan1[$c]. "<br>";
         $c++;
    }
    while ($c < count ($hewan1));
        


    //if dan else
    echo "<h1> If dan Else</h1> <br>";
    $password = "123";
    $password2 = 1234;
    if ($password === $password2){
        echo "anda berhasil masuk";
    }else{
        echo "gagal! passwordnya salah";

    }

    

    
















    ?>
</body>
</html>