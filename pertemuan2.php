<?php
    $angka1 = 30;
    $angka2 = 20;
    if($angka1 < $angka2){
        echo"angka $angka1 lebih kecil dari $angka2";
    }else{
        echo"angka $angka1 lebih besar dari $angka2";
    }

    //if(kondisi)

    echo "<br>";
    //ternary operators
    echo ($angka1 > $angka2) ? "$angka1 lebh besar dari $angka2" : "$angka1 lebih kecil dari $angka2" ;
    //echo (kondisi) ? true : false;

    //perbandingan string (== === != !==)
    echo "<br>";
    $jeniskelamin = "laki-laki";
    if(($jeniskelamin == 'pria') || $jeniskelamin ==='laki-laki'){
        echo "hallo bapak";
    }else{
        echo "hallo ibu";
    }

    //if elseif else
    echo"<br>";
    echo"<h1>if elseif else</h1>";
    echo"<br>";
    $umur = 130;
    if($umur < 5){
        echo "hai balita";
    }elseif($umur > 6 && $umur < 17){
        echo "halo remaja";
    }elseif($umur > 18 && $umur < 40){
        echo "hallo pak/bu";
    }elseif($umur > 41 && $umur < 80){
        echo "hallo kek/nek";
    }elseif($umur > 81 && $umur < 120 ){
         echo "hallo buyut";
    }elseif($umur > 121 ){
        echo "Artefak/fosil";
    }
?>