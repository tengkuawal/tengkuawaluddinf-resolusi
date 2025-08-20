<!-- <form action="" method="post">
      <label for="menu">pilih menu :</label>
      <input type="number" name="menu" id="menu">
      <button type="submit">Cek</button>
    </form> -->

<?php
    // $menu = $_POST['menu'];
    // echo"<br>";
    // switch($menu){
    //     case
    //      '1' : echo 'Nasi Goreng'; break;
    //     case 
    //     '2' : echo 'Mie ayam '; break;
    //     case 
    //     '3' : echo 'Soto ayam'; break;
    //     case 
    //     '4' : echo 'baso'; break;
    //     default : echo 'Menu tidak tersedia';
        
    // }
?>
    <form action="" method="post">
        <label for="suhu">Cuaca :</label>
        <input type="string" name="suhu" id="suhu">
        <button type="submit">Cek suhu</button>
    </form>
<?php
    echo"<br>";
    $suhu = $_POST['suhu'];
    if($suhu < 20){
        echo "Dingin";
    }elseif($suhu > 21 && $suhu < 30 ){
        echo "Sejuk";
    }elseif($suhu > 30 ){
         echo "Panas";
    }
?>


