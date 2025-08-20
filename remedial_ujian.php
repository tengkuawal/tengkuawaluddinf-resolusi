
<form action="" method="post">
    <label for="ipk">Masukkan IPK Anda:</label><br>
    <input type="text" name="ipk" id="ipk" required>
    <button type="submit">Kirim</button>
</form>


<?php
//if
$ipk= $_POST['ipk'];
if ($ipk >= 3.5 && $ipk <= 4.0) {
    echo "ane lulus Cum Laude";
} elseif ($ipk >= 3.0 && $ipk < 3.5) {
    echo "ane lulus, Sangat Memuaskan";
} elseif ($ipk >= 2.0 && $ipk <3.0) {
    echo "ane harus belajar lebih giat lagi";
} else 
    echo "Anda bahlil"; 
?>




