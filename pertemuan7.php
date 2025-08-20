<?php
$file = fopen('biodata.txt','r');

while(!feof($file)){
    echo fgets($file);
    }
    fclose($file);

    $file  = fopen('biodata.txt', 'w');
    $newName  = 'Harry Potter';
    // fwrite($file,$newName. '\n');
    for($i = 1;  $i<=5; $i++){
     fwrite($file, "John cena $i\n");
    }
?>