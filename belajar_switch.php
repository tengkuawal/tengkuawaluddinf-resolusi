<?php

?>
     <!-- <form action="" method="post">
      <label for="warna">masukan warna :</label>
      <input type="String" name="warna" id="warna">
      <button type="submit">cetak warna</button>
    </form> -->
    <?php
    warna
    echo "<br>";
    $warna =  $_POST['warna'];
    switch($warna){
        case
         'biru' : echo 'blue'; break;
        case 
        'merah' : echo 'red'; break;
        case 
        'hitam' : echo 'black'; break;
        case 
        'putih' : echo 'white'; break;
        default : echo 'warna belom tersedia';
        
    }

    ?>
        <form action="" method="post">
             <label for="hari">masukan hari :</label>
             <input type="String" name="hari" id="hari">
             <button type="submit">CETAK!!!!!</button>
        </form>

    <?php
    //warna
    echo "<br>";
    $hari =  $_POST['hari'];
    switch($hari){
        case
         'senin' : echo 'monday'; break;
        case 
        'selasa' : echo 'tuesday'; break;
        case 
        'rabu' : echo 'wednesday'; break;
        case 
        'kamis' : echo 'thursday'; break;
         case 
        'jumat' : echo 'friday'; break;
         case 
        'sabtu' : echo 'saturday'; break;
         case 
        'minggu' : echo 'sunday'; break;
        default : echo 'GA ADA HARI ITU';
        
    }

    ?>








