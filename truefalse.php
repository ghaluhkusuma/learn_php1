<?php

$uang_programmer = 1000;
$keyboard        = 2000;
$uang_designer = 4000;

$hasil = true;
$hasil2 = false;

if($hasil){
    echo "dibeli";

}else if($hasil2){
    echo "dibeli oleh designer";
    
    //ini yang bersarang
    if($uang_designer >= $keyboard * 2){
        echo "dibeli dua kali oleh designer";  
    }
} else{
    echo "nggag cukup";
}

?>