<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form if</title>
</head>
<body>
    <form action="" method="post">
        <label for="angka1">Masukan angka-1 :</label>
        <input type="number" name="angka1" 
        id="angka1"><br>
        <label for="angka2">masukan angka-2 :</label>
        <input type="number" name="angka2" id="angka2">
        <button type="submit">Cek</button>
    </form>
    <?php
    $angka1 = $_POST['angka1']; 
    $angka2 = $_POST['angka2'];
    if($angka1 > $angka2){
        echo "$angka1 lebih besar dari $angka2";
    }else{
        echo "$angka1 lebih kecil dari $angka2"; 
    }
    
    ?>

    <form action="" method="post">
      <label for="umur">masukan umur :</label>
      <input type="number" name="nama" id="nama">
      <button type="submit">Cek</button>
    </form>
    <?php
    $umur = $_POST['umur'];
    echo"<br>";
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
  
</body>
</html>