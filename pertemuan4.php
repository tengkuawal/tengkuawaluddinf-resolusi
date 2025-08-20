<!-- array -->
<!-- array adalah variable yang dapat menampung lebih dari 1 value -->
<?php 
    // Indexed array
    // Membuat array
    $buah = ['Apel','Anggur','Jeruk','Buah Naga'];
    $sayur = array('Bayem','Kangkung','Wortel');
    // Menampilkan array
    echo $buah[0];
    echo "<br>";
    echo $sayur[2];
    echo "<br>";
    // "Count" menampilkan jumlah data di array
    echo count($buah);
    // Menambahkan array
    echo "<br>";
    $buah[] = "Sirsak";
    $buah[] = "Pisang";
    echo "Buah telah di tambahkan lagi :".count($buah);
    echo"<br>";
    var_dump($buah);
    echo "<br>";
    // for
    for($i = 0; $i < count ($buah); $i++){
        echo $buah[$i].'<br>';
    }
    // menampilkan array menggunakan foreach
    echo"<br>";
    array_push($sayur, 'Brokoli');
    $sayur[1] = 'Sawi';
    unset($sayur[0]);
    foreach($sayur as $data){
        echo $data."<br>";
    }
    echo "<br>";
    

?>

<!-- Recap Array -->
 <!-- 
Membuat Array
array('data1','data2');
$arr = ['data1','data2'];
$arr[index];

menampilkan semua data array -> for, foreach
-->

<!-- Assosiative Array -->
 <?php
    echo "<h1>Assosiative Array</h1>";
    $siswa = array(
        'nama' => 'Dzakwan',
        'kelas' => '11RPL2',
        'jk' => 'L');
    echo $siswa['kelas'];

    echo "<br>";
    foreach($siswa as $key=>$data){
        echo$key." : ".$data."<br>";
    }
 ?>