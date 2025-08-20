<?php
function tambah($angka1, $angka2){
		$hasil = $angka1 + $angka2;
		echo "Hasil tambah : $angka1 + $angka2 = ".$hasil.'<br>';
		echo"<br>";
	}
	
	function kurang($angka1, $angka2){
		$hasil = $angka1 - $angka2;
		echo "hasil kurang : $angka1 - $angka2 = ".$hasil."<br>";
	}
	
	function perkalian($angka1, $angka2){
		$hasil = $angka1 * $angka2;
		echo "hasil perkalian : $angka1 * $angka2 = ".$hasil."<br>";
	}

    function biodata ($nama,$tahunLahir){
		$umur = date('Y') - $tahunLahir;
		echo "Hallo $nama umur kamu :  $umur tahun <br>";
	}

?>