<?php
	//function
	
	function hallo(){
		echo "hallo abddul Nurmagedov";
	}
	hallo();

	// function tambah(){
	// 	echo 20 + 30;
	// }
	// echo'<br>';;
	// tambah();

	//function with argumen
	// function perkalian($angka1, $angka2){
	// 	echo $angka1 * $angka2;
	// }
	echo"<br>";
	perkalian(5,2);
	echo"<br>";
	perkalian(5,8);

	function umur($umur){
		if($umur < 5){
			echo "Balita";
		}elseif($umur > 5 && $umur <10){
			echo "Anak";
		}elseif($umur > 10 && $umur <=17){
			echo "Remaja";
		}else{
			echo "Dewasa";
		}
	}

	echo "<br>";
	umur(20);
	echo "<br>";
	umur(16);

	//funtion dengan argumen
	function helloNama($Nama){
		echo"Hello $Nama <br>";
	}
	echo"<br>";
	helloNama('Budi');
	helloNama('tengku rich milioner');
	helloNama('nino');
	echo"<br>";

	function biodata ($nama,$tahunLahir){
		$umur = date('Y') - $tahunLahir;
		echo "Hallo $nama umur kamu :  $umur tahun <br>";
	}
	biodata('Tengku', '2008');
	biodata('tengku parker','2008');

	function tambah($angka1, $angka2){
		$hasil = $angka1 + $angka2;
		echo "Hasil tambah : $angka1 + $angka2 = ".$hasil.'<br>';
		echo"<br>";
	}
	echo"<br>";
	 tambah(45,67);

	function kurang($angka1, $angka2){
		$hasil = $angka1 - $angka2;
		echo "hasil kurang : $angka1 - $angka2 = ".$hasil."<br>";
	}
	echo"<br>";
	kurang(45,42);

	function perkalian($angka1, $angka2){
		$hasil = $angka1 * $angka2;
		echo "hasil perkalian : $angka1 * $angka2 = ".$hasil."<br>";
	}
	echo"<br>";
	perkalian(5,2);

?>